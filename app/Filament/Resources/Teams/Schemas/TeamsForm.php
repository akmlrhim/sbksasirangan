<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TeamsForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('name')
					->required()
					->placeholder('Masukkan nama lengkap')
					->autocomplete(false)
					->label('Nama Lengkap')
					->unique(ignoreRecord: true)
					->maxLength(255)
					->validationAttribute('Nama lengkap')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'unique' => ':attribute sudah ada.',
						'max' => ':attribute maksimal 255 karakter'
					])
					->afterStateUpdated(function (Set $set, ?string $state) {
						$set('slug', Str::slug($state));
					}),

				Hidden::make('slug')->required(),

				Select::make('role')
					->required()
					->label('Role')
					->searchable()
					->native(false)
					->placeholder('Pilih role')
					->options([
						'team' => 'Team',
						'artisan' => 'Artisan'
					])
					->validationAttribute('Role')
					->validationMessages([
						'required' => ':attribute wajib diisi.'
					]),

				Textarea::make('biography')
					->required()
					->autocomplete(false)
					->placeholder('Masukkan biografi disini')
					->label('Biografi')
					->validationAttribute('Biografi')
					->validationMessages(['required' => ':attribute wajib diisi'])
					->extraInputAttributes(['style' => 'min-height: 150px;'])
					->columnSpanFull(),

				FileUpload::make('profile_picture')
					->nullable()
					->helperText('Format gambar: jpg, jpeg, png. Ukuran maksimal 5MB')
					->acceptedFileTypes(['image/jpg', 'image/png', 'image/jpeg'])
					->label('Foto')
					->maxSize(5120)
					->image()
					->imageEditor()
					->disk('public')
					->visibility('public')
					->directory('teams')
					->validationAttribute('Foto')
					->validationMessages([
						'accepted_file_types' => 'Format file harus jpg, jpeg, dan png'
					])
					->columnSpanFull(),

				TextInput::make('ig_link')
					->nullable()
					->label('URL Instagram')
					->placeholder('Masukkan tautan')
					->url()
					->autocomplete(false)
					->maxLength(255)
					->validationAttribute('Tautan instagram')
					->validationMessages([
						'url' => 'Format tautan salah. Pastikan menyertakan http:// atau https://.',
						'active_url' => 'Tautan tidak dapat ditemukan atau tidak aktif.',
					]),

				TextInput::make('yt_link')
					->nullable()
					->label('URL youtube')
					->placeholder('Masukkan tautan')
					->url()
					->autocomplete(false)
					->maxLength(255)
					->validationAttribute('Tautan youtube')
					->validationMessages([
						'url' => 'Format tautan salah. Pastikan menyertakan http:// atau https://.',
						'active_url' => 'Tautan tidak dapat ditemukan atau tidak aktif.',
					]),

				TextInput::make('linkedin_link')
					->nullable()
					->label('URL linkedin')
					->placeholder('Masukkan tautan')
					->autocomplete(false)
					->url()
					->maxLength(255)
					->validationAttribute('Tautan linkedin')
					->validationMessages([
						'url' => 'Format tautan salah. Pastikan menyertakan http:// atau https://.',
						'active_url' => 'Tautan tidak dapat ditemukan atau tidak aktif.',
					]),

			]);
	}
}
