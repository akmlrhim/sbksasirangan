<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Support\Str;

class PostForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('title')
					->label('Judul')
					->required()
					->placeholder('Masukkan judul')
					->autocomplete(false)
					->maxLength(255)
					->unique(ignoreRecord: true)
					->live(onBlur: true)
					->afterStateUpdated(function (Set $set, ?string $state) {
						$set('slug', Str::slug($state));
					})
					->validationAttribute('Judul')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'unique' => ':attribute sudah terdaftar.',
						'max' => ':attribute maksimal 255 karakter.',
					])->columnSpanFull(),

				Hidden::make('slug')
					->unique(ignoreRecord: true),


				Select::make('category')
					->label('Kategori')
					->required()
					->options([
						'news' => 'News',
						'blog' => 'Blog'
					])
					->native(false)
					->searchable()
					->validationAttribute('Kategori')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
					])->columnSpanFull(),

				FileUpload::make('cover_image')
					->label('Cover artikel')
					->required()
					->helperText('Format gambar: jpg, jpeg, png. Maksimal 5MB')
					->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
					->maxSize(5120)
					->directory('insight')
					->disk('public')
					->validationAttribute('Cover artikel')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'max' => ':attribute maskimal 5MB.',
						'accepted_file_types' => ':attribute harus berformat jpeg, png, jpg'
					])->columnSpanFull(),

				RichEditor::make('content')
					->label('Konten/isi artikel')
					->required()
					->placeholder('Masukkan isi artikel disini')
					->required(false)
					->fileAttachmentsDirectory('attach')
					->validationAttribute('Konten')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
					])
					->columnSpanFull()
					->extraInputAttributes(['style' => 'min-height: 300px;']),

				TextInput::make('source')
					->label('Sumber')
					->required()
					->helperText('Beri tanda "-" jika tidak ada sumber')
					->markAsRequired()
					->placeholder('Masukkan link sumber artikel')
					->validationAttribute('Sumber')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
					])
					->columnSpanFull()
			]);
	}
}
