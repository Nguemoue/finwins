<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PressEchoResource\Pages;
use App\Models\PressEcho;
use Filament\Facades\Filament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PressEchoResource extends Resource
{
    protected static ?string $model = PressEcho::class;

    protected static ?string $slug = 'press-echos';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $title = 'Presse';
    protected static ?string $navigationLabel="Presse";
    protected static ?string $navigationBadgeTooltip = "Echo de presse";
    protected static ?string $label = "Gestion de presse";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),

                Select::make('type')
                    ->options([
                        'press_echo'=>"échos de presse",
                        'publication'=>'publication'
                    ])
                    ->native(false)
                    ->required(),

                DatePicker::make('published_at')
                    ->label("Date de publication")
                    ->native(false)
                    ->required(),

                FileUpload::make('pdf_path')
                    ->label("Chemin du fichier")
                    ->acceptedFileTypes(['application/pdf'])
                    ->openable()
                    ->previewable()
                    ->preserveFilenames()
                    ->required(),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->visibleOn('edit')
                    ->content(fn(?PressEcho $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->visibleOn('edit')
                    ->content(fn(?PressEcho $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('type'),

                TextColumn::make('published_at'),

                TextColumn::make('pdf_path'),
                TextColumn::make('created_at')->label("Cree le")
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->actionsColumnLabel("Actions")
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPressEchos::route('/'),
            'create' => Pages\CreatePressEcho::route('/create'),
            'edit' => Pages\EditPressEcho::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
