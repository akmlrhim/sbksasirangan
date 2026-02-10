<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('name')
					->label('Nama lengkap')
					->required()
					->autocomplete(false)
					->unique(ignoreRecord: true)
					->placeholder('Masukkan nama lengkap')
					->maxLength(255)
					->validationAttribute('Nama lengkap')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'max' => ':attribute maksimal :max karakter.',
						'unique' => ':attribute sudah terdaftar.',
					])
					->columnSpanFull(),

				TextInput::make('email')
					->label('Email address')
					->required()
					->autocomplete(false)
					->unique(ignoreRecord: true)
					->email()
					->placeholder('Masukkan email address')
					->validationAttribute('Email address')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'unique' => ':attribute sudah terdaftar.',
					])
					->columnSpanFull(),

				TextInput::make('password')
					->label('Password')
					->required()
					->password()
					->revealable()
					->minLength(8)
					->visibleOn('create')
					->placeholder('Masukkan password')
					->validationAttribute('Password')
					->validationMessages([
						'required' => ':attribute wajib diisi.',
						'min' => ':attribute minimal 8 karakter'
					])->columnSpanFull()
			]);
	}
}
