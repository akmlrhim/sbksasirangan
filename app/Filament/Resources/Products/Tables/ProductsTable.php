<?php

namespace App\Filament\Resources\Products\Tables;

use App\Models\Product;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProductsTable
{
	public static function configure(Table $table): Table
	{
		return $table
			->columns([
				ImageColumn::make('picture')->label('Foto Produk')->disk('public')->defaultImageUrl('https://placehold.co/400?text=No+Image'),

				TextColumn::make('name')->label('Nama Produk')
					->sortable()
					->searchable()
					->wrap()
					->weight('bold'),

				TextColumn::make('category')->label('Kategori')->badge(),

			])
			->filters([
				SelectFilter::make('category')
					->label('Filter Kategori')
					->options(fn() => Product::pluck('category', 'category')->toArray()),
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
