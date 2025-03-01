<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $label = 'Əlaqə';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('phone')->required()->label('Telefon'),
                    TextInput::make('email')->required()->label('Email'),
                    TextInput::make('address')->required()->label('Ünvan'),
                    TextInput::make('facebook')->required()->label('Facebook'),
                    TextInput::make('instagram')->required()->label('Instagram'),
                    TextInput::make('tiktok')->required()->label('TikTok'),
                    TextInput::make('linkedin')->required()->label('Linkedin'),
                    TextInput::make('x')->required()->label('X'),
                ])->columns(4)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone')->label('Telefon'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('address')->label('Ünvan'),
                Tables\Columns\TextColumn::make('facebook')->label('Facebook'),
                Tables\Columns\TextColumn::make('instagram')->label('Instagram'),
                Tables\Columns\TextColumn::make('tiktok')->label('TikTok'),
                Tables\Columns\TextColumn::make('linkedin')->label('Linkedin'),
                Tables\Columns\TextColumn::make('x')->label('X'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
