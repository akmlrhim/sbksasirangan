<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\RawJs;
use Illuminate\Support\Str;

class ProductForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('name')
					->label('Nama produk')
					->placeholder('Masukkan nama produk')
					->autocomplete(false)
					->maxLength(255)
					->unique(ignoreRecord: true)
					->live(onBlur: true)
					->afterStateUpdated(function (Set $set, ?string $state) {
						$set('slug', Str::slug($state));
					})
					->required()
					->validationAttribute('Nama produk')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'unique' => ':attribute sudah terdaftar.',
						'max' => ':attribute maksimal 255 karakter.',
					]),

				Hidden::make('slug')
					->unique(ignoreRecord: true),

				TextInput::make('category')
					->label('Kategori')
					->placeholder('Pilih kategori atau ketik kategori baru disini')
					->autocomplete(false)
					->datalist(function () {
						return Product::pluck('category')->unique()->all();
					})
					->required()
					->validationAttribute('Kategori')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
					]),

				FileUpload::make('picture')
					->label('Foto produk')
					->helperText('Format: JPEG, JPG, PNG. Maksimal 2MB.')
					->image()
					->directory('products')
					->disk('public')
					->visibility('public')
					->maxSize(2048)
					->imageEditor()
					->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
					->required()
					->validationAttribute('Foto produk')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'max' => ':attribute maksimal 2 MB.',
					])
					->columnSpanFull(),

				RichEditor::make('description')
					->label('Deskripsi produk')
					->placeholder('Masukkan deskripsi produk')
					->fileAttachmentsDirectory('products/attachments')
					->fileAttachmentsDisk('public')
					->required()
					->validationAttribute('Deskripsi produk')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
					])
					->columnSpanFull()
					->extraInputAttributes(['style' => 'min-height: 300px;']),

			]);
	}
}
