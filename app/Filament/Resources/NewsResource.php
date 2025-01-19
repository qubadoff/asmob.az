<?php

namespace App\Filament\Resources;

use App\Enum\NewsStatusEnum;
use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationGroup = 'News';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('category_id')->relationship('category', 'name')->required(),
                    TextInput::make('title')
                        ->required()
                        ->live(debounce: '1000')
                        ->afterStateUpdated(fn (Set $set,?string  $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug')->required(),
                    Select::make('status')->options([
                        NewsStatusEnum::PUBLISHED->value => NewsStatusEnum::PUBLISHED->getLabel(),
                        NewsStatusEnum::DRAFT->value => NewsStatusEnum::DRAFT->getLabel(),
                    ])->required()->default(0),
                ])->columns(),
                Section::make([
                    Textarea::make('description')->nullable(),
                    RichEditor::make('body')->required(),
                ]),
                Section::make([
                    FileUpload::make('images')->image()->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\ImageColumn::make('images'),
                Tables\Columns\TextColumn::make('status')->badge(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
