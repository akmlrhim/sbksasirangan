<?php

namespace App\Filament\Resources\Teams;

use App\Filament\Resources\Teams\Pages\CreateTeams;
use App\Filament\Resources\Teams\Pages\EditTeams;
use App\Filament\Resources\Teams\Pages\ListTeams;
use App\Filament\Resources\Teams\Schemas\TeamsForm;
use App\Filament\Resources\Teams\Tables\TeamsTable;
use App\Models\Team;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeamsResource extends Resource
{
	protected static ?string $model = Team::class;

	protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

	protected static ?string $recordTitleAttribute = 'name';

	public static function form(Schema $schema): Schema
	{
		return TeamsForm::configure($schema);
	}

	public static function table(Table $table): Table
	{
		return TeamsTable::configure($table);
	}

	public static function getRelations(): array
	{
		return [
			//
		];
	}

	public static function getPages(): array
	{
		return [
			'index' => ListTeams::route('/'),
			'create' => CreateTeams::route('/create'),
			'edit' => EditTeams::route('/{record}/edit'),
		];
	}
}
