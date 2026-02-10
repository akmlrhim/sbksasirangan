<?php

namespace App\Filament\Resources\Galleries\Pages;

use App\Filament\Resources\Galleries\GalleryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGallery extends CreateRecord
{
	protected static string $resource = GalleryResource::class;

	protected static bool $canCreateAnother = false;

	public function getRedirectUrl(): string
	{
		return $this->getResource()::getUrl('index');
	}
}
