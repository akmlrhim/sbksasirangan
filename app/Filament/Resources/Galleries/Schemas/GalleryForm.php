<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('title')->label('Judul')
					->required()
					->maxLength(255)
					->autocomplete(false)
					->placeholder('Masukkan judul')
					->unique(ignoreRecord: true)
					->validationAttribute('Judul')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'unique' => ':attribute sudah ada.'
					])->columnSpanFull(),

				Textarea::make('description')->label('Caption')
					->required()
					->autocomplete(false)
					->placeholder('Masukkan deskripsi disini')
					->validationAttribute('Judul')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
					])->columnSpanFull(),

				FileUpload::make('images')
					->label('Upload Gambar')
					->required()
					->maxSize(5120)
					->multiple()
					->acceptedFileTypes(['image/jpg', 'image/png', 'image/jpeg'])
					->reorderable()
					->disk('public')
					->directory('gallery')
					->helperText('Format: jpg, jpeg, png. Bisa upload banyak gambar. Maks 5MB')
					->validationMessages([
						'required' => 'Mohon upload minimal satu gambar untuk galeri.',
						'max' => 'Ukuran file terlalu besar. Maksimal 5MB per gambar.',
						'accepted_file_types' => 'Format file tidak didukung. Harap gunakan JPG, JPEG, atau PNG.',
						'mimetypes' => 'Format file tidak didukung. Harap gunakan JPG, JPEG, atau PNG.',
					])->columnSpanFull()

			]);
	}
}
