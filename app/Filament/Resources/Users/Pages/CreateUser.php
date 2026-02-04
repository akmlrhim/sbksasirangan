<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
	protected static string $resource = UserResource::class;

	protected static bool $canCreateAnother = false;

	public function getRedirectUrl(): string
	{
		return $this->getResource()::getUrl('index');
	}

	protected function afterCreate(): void
	{
		$this->record->sendEmailVerificationNotification();
	}
}
