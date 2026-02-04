<?php

namespace App\Filament\Resources\Works\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class WorkForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('name')->label('Nama kain/karya')
					->required()
					->autocomplete(false)
					->live(onBlur: true)
					->maxLength(255)
					->placeholder('Masukkan nama kain/karya')
					->validationAttribute('Nama karya')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'max' => ':attribute maksimal 255 karakter.'
					])
					->afterStateUpdated(function (Set $set, ?string $state) {
						$uuid = substr(Str::uuid(), 0, 8);
						$set('slug', Str::slug($state) . '-' . $uuid);
					})->columnSpanFull(),

				Hidden::make('slug')->unique(ignoreRecord: true),

				FileUpload::make('picture')->label('Foto kain/karya')
					->helperText('Format: JPEG, JPG, PNG. Maksimal 2MB.')
					->image()
					->required()
					->directory('works')->disk('public')
					->maxSize(2048)
					->imageEditor()
					->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
					->validationAttribute('Foto kain/karya')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'max' => ':attribute maksimal 2 MB.',
						'mime' => ':attribute harus JPEG, PNG, JPG'
					])
					->columnSpanFull()
			]);
	}
}
