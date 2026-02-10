<?php

namespace App\Filament\Resources\Teams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class TeamsTable
{
	public static function configure(Table $table): Table
	{
		return $table
			->columns([
				ImageColumn::make('profile_picture')->label('Foto profil')
					->disk('public')
					->defaultImageUrl('https://placehold.co/400?text=No+Image'),

				TextColumn::make('name')->label('Nama lengkap')->searchable()->sortable(),
				TextColumn::make('role')
					->label('Role')
					->badge()
					->formatStateUsing(fn(string $state): string => Str::headline($state))
					->color(fn(string $state): string => match ($state) {
						'artisan' => 'danger',
						'team' => 'warning',
					}),

				TextColumn::make('ig_link')
					->label('Instagram')
					->icon('heroicon-m-link')
					->iconColor('info')
					->formatStateUsing(fn($state) => $state ? 'Kunjungi' : '-')
					->url(fn($state) => $state)
					->openUrlInNewTab()
					->color('info'),

				TextColumn::make('yt_link')
					->label('Youtube')
					->icon('heroicon-m-link')
					->iconColor('danger')
					->formatStateUsing(fn($state) => $state ? 'Kunjungi' : '-')
					->url(fn($state) => $state)
					->openUrlInNewTab()
					->color('danger'),

				TextColumn::make('linkedin_link')
					->label('LinkedIn')
					->icon('heroicon-m-link')
					->iconColor('success')
					->formatStateUsing(fn($state) => $state ? 'Kunjungi' : '-')
					->url(fn($state) => $state)
					->openUrlInNewTab()
					->color('success'),
			])
			->filters([
				//
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
