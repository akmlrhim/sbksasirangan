<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
	public static function configure(Table $table): Table
	{
		return $table
			->columns([
				TextColumn::make('name')->label('Nama lengkap')->searchable()->sortable(),

				TextColumn::make('email')->label('Email')->searchable(),

				TextColumn::make('email_verified_at')
					->label('Verifikasi Email')
					->badge()
					->state(fn($record): string => $record->email_verified_at ? 'verified' : 'unverified')
					->color(fn(string $state): string => match ($state) {
						'verified' => 'success',
						'unverified' => 'danger',
					})
					->formatStateUsing(fn(string $state): string => match ($state) {
						'verified' => 'Terverifikasi',
						'unverified' => 'Belum Terverifikasi',
					})
			])
			->filters([
				//
			])
			->recordActions([
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
