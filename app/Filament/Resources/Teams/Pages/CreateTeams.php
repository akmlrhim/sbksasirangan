<?php

namespace App\Filament\Resources\Teams\Pages;

use App\Filament\Resources\Teams\TeamsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTeams extends CreateRecord
{
	protected static string $resource = TeamsResource::class;

	protected static bool $canCreateAnother = false;

	public function getRedirectUrl(): string
	{
		return $this->getResource()::getUrl('index');
	}
}
