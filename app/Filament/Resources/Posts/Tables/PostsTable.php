<?php

namespace App\Filament\Resources\Posts\Tables;

use App\Models\Post;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PostsTable
{
	public static function configure(Table $table): Table
	{
		return $table
			->columns([
				ImageColumn::make('cover_image')->label('Foto cover')->disk('public')->defaultImageUrl('https://placehold.co/400?text=No+Image'),

				TextColumn::make('title')->label('Judul')
					->sortable()
					->searchable()
					->wrap(),

				TextColumn::make('category')->label('Kategori')->badge()
					->formatStateUsing(fn($state) => ucfirst($state)),
			])
			->filters([
				SelectFilter::make('category')
					->label('Filter Kategori')
					->options(fn() => Post::pluck('category', 'category')->toArray()),
			])
			->recordActions([
				ViewAction::make(),
				EditAction::make(),
				DeleteAction::make()
			])
			->toolbarActions([
				BulkActionGroup::make([
					DeleteBulkAction::make(),
				]),
			]);
	}
}
