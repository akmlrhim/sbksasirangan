<?php

namespace App\Filament\Resources\Works\Pages;

use App\Filament\Resources\Works\WorkResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWork extends CreateRecord
{
	protected static string $resource = WorkResource::class;

	protected static bool $canCreateAnother = false;

	public function getRedirectUrl(): string
	{
		return $this->getResource()::getUrl('index');
	}
}
