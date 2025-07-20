<?php

namespace App\Filament\Resources;

use App\Enum\ProjectStatusEnum;
use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\FileUpload;
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

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationGroup = 'Layihələr';

    protected static ?string $label = 'Layihələr';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')->label('Başlıq')
                        ->required(),
//                        ->live(debounce: '1000')
//                        ->afterStateUpdated(fn (Set $set,?string  $state) => $set('slug', Str::slug($state))),
//                    TextInput::make('slug')->required()->label('Slug'),
                    Textarea::make('description')->nullable()->label('Qısa Məzmun'),
                    Select::make('status')->options([
                        ProjectStatusEnum::ACTIVE->value => ProjectStatusEnum::ACTIVE->getLabel(),
                        ProjectStatusEnum::INACTIVE->value => ProjectStatusEnum::INACTIVE->getLabel(),
                    ])->required()->label('Status')->default(1),
                ])->columns(3),
                Section::make([
                    FileUpload::make('image')->image()->required()->label('Şəkil'),
                ])->columns()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->label('Başlıq'),
                Tables\Columns\TextColumn::make('status')->badge()->label('Status'),
                Tables\Columns\ImageColumn::make('image')->label('Şəkiler'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
