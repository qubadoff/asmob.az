<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectGalleryResource\Pages;
use App\Models\ProjectGallery;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectGalleryResource extends Resource
{
    protected static ?string $model = ProjectGallery::class;

    protected static ?string $navigationGroup = 'Layihələr';

    protected static ?string $label = 'Layihə Şəkilləri';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('project_id')->relationship('project', 'name')->required()->label('Layihə'),
                    Select::make('project_category_id')->relationship('projectCategory', 'name')->required()->label('Layihə kateqoriyası'),
                    TextInput::make('name')->required()->label('Ad'),
                    TextArea::make('description')->label('Qısa məzmun'),
                    FileUpload::make('images')->multiple()->image()->required()->label('Şəkillər')->openable()->downloadable(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProjectGalleries::route('/'),
            'create' => Pages\CreateProjectGallery::route('/create'),
            'edit' => Pages\EditProjectGallery::route('/{record}/edit'),
        ];
    }
}
