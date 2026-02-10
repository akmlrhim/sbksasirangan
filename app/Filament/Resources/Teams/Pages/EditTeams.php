<?php

namespace App\Filament\Resources\Teams\Pages;

use App\Filament\Resources\Teams\TeamsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeams extends EditRecord
{
	protected static string $resource = TeamsResource::class;

	public function getRedirectUrl(): string
	{
		return $this->getResource()::getUrl('index');
	}
}
