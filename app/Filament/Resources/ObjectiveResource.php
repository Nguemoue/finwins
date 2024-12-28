<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObjectiveResource\Pages;
use App\Models\Objective;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;

class ObjectiveResource extends Resource
{
    protected static ?string $model = Objective::class;

    protected static ?string $slug = 'objectives';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = "Administration";

    protected static ?string $navigationLabel = "Nos Objectifs";
    protected static ?string $label = "Objectifs";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('label')
                    ->columnSpanFull()
                    ->required(),

                Textarea::make('content')
                    ->label("contenu de l'objectif")
                    ->columnSpanFull()
                    ->required(),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->visibleOn('edit')
                    ->content(fn(?Objective $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->visibleOn('edit')
                    ->content(fn(?Objective $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('label')
                    ->searchable(),
                TextColumn::make('content')
                    ->limit(20)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])->actionsColumnLabel('Actions');

    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListObjectives::route('/'),
          //  'create' => Pages\CreateObjective::route('/create'),
//            'edit' => Pages\EditObjective::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
