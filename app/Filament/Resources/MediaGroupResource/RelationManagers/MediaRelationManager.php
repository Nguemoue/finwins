<?php

namespace App\Filament\Resources\MediaGroupResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class MediaRelationManager extends RelationManager
{
    protected static string $relationship = 'media';

    protected static ?string $title = "Resource associes";

    public function mount(): void
    {
        //dd($this->getOwnerRecord()->mediaType);

    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('media_type')
                    ->default($this->getOwnerRecord()->mediaType->name)
                    ->label('Type de média')
                    ->disabled()
           ,

                Forms\Components\Radio::make('media_source')
                    ->label('Source du média')
                    ->options([
                        'local' => 'Fichier local',
                        'url' => 'Lien externe',
                    ])
                    ->required()
                    ->reactive(),

                // Gestion des fichiers locaux
                Forms\Components\FileUpload::make('file_path')
                    ->label('Fichier')
                    ->visible(fn (callable $get) => $get('media_source') === 'local')
                    ->required(fn (callable $get) => $get('media_source') === 'local')
                    ->acceptedFileTypes(fn(callable $get)=> $get("media_type") === "image"? [
                        'image/jpeg', 'image/png', 'image/gif', // Types d'images
                    ]:[
                        'video/mp4', 'video/mpeg', 'video/quicktime', // Types de vidéos
                    ])
                    ->directory('uploads/media') // Répertoire de stockage
                    ->openable()
                    ->reactive()
                    ->downloadable(),

                // Gestion des liens externes
                Forms\Components\TextInput::make('media_url')
                    ->label('Lien externe')
                    ->visible(fn (callable $get) => $get('media_source') === 'url')
                    ->url()
                    ->placeholder('https://example.com/media.mp4')
                    ->required(fn (callable $get) => $get('media_source') === 'url'),

                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->nullable(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('file_path')
            ->columns([
                Tables\Columns\TextColumn::make('media_type')->label('Type de média'),
                Tables\Columns\TextColumn::make('file_path')->label('Chemin du fichier'),
                Tables\Columns\TextColumn::make('media_source')->label('Source'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
