<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConceptResource\Pages;
use App\Filament\Resources\ConceptResource\RelationManagers;
use App\Models\Concept;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConceptResource extends Resource
{
    protected static ?string $model = Concept::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required()->maxLength(255),
                Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true)->maxLength(255),
                Forms\Components\FileUpload::make('image_path')->directory('uploads/concepts')->image()->imageEditor()->downloadable(),
                Forms\Components\RichEditor::make('content')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('slug')->toggleable()->searchable(),
                Tables\Columns\ImageColumn::make('image_path')->square(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Delete disabled
                ]),
            ])
            ->defaultPaginationPageOption('all')
            ->paginationPageOptions(['all']);
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
            'index' => Pages\ListConcepts::route('/'),
            'edit' => Pages\EditConcept::route('/{record}/edit'),
        ];
    }
}
