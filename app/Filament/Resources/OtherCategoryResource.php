<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherCategoryResource\Pages;
use App\Models\OtherCategory;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OtherCategoryResource extends Resource
{
    protected static ?string $model = OtherCategory::class;

    protected static ?string $navigationGroup = 'Project';

    protected static ?string $label = 'Alt kateqoriyalar';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')->required()->label('Kateqoriya Adı'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->label('Kateqoriya Adı'),
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
            ])->defaultSort('created_at', 'desc')->reorderable('sort_order');
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
            'index' => Pages\ListOtherCategories::route('/'),
            'create' => Pages\CreateOtherCategory::route('/create'),
            'edit' => Pages\EditOtherCategory::route('/{record}/edit'),
        ];
    }
}
