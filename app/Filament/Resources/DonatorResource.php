<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonatorResource\Pages;
use App\Models\Donator;
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
use Filament\Tables\Table;

class DonatorResource extends Resource
{
    protected static ?string $model = Donator::class;

    protected static ?string $slug = 'givers';

    protected static ?string $navigationLabel = "Donateurs";

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),

                Textarea::make('address')
                    ->columnSpanFull()
                    ->required(),

                Placeholder::make('created_at')
                    ->visibleOn('edit')
                    ->label('Created Date')
                    ->content(fn(?Donator $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->visibleOn('edit')
                    ->label('Last Modified Date')
                    ->content(fn(?Donator $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('address'),
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
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDonators::route('/'),
            //comment to allow as modal create and modal edit
            //'create' => Pages\CreateDonator::route('/create'),
            //'edit' => Pages\EditDonator::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name','address'];
    }
}
