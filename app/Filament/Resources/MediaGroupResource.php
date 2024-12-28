<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaGroupResource\Pages;
use App\Filament\Resources\MediaGroupResource\RelationManagers\MediaRelationManager;
use App\Filament\Resources\MediaGroupResource\RelationManagers\MediaTypeRelationManager;
use App\Models\MediaGroup;
use App\Models\MediaType;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MediaGroupResource extends Resource
{
    protected static ?string $model = MediaGroup::class;

    protected static ?string $slug = 'media-groups';
    protected static ?string $navigationLabel = "Media";

    protected static ?string $navigationIcon = 'heroicon-o-film';
    protected static ?string $navigationGroup = "Administration";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('label')
                    ->label("Label")
                    ->required(),

                DatePicker::make('published_at')
                    ->native(false)
                    ->label("Date de publication")
                    ->required(),

                Textarea::make('description')
                    ->nullable(),
                FileUpload::make('poster')
                    ->image()
                    ->imageCropAspectRatio("1:1")
                    ->directory("uploads/poster")
                    ->imageEditor(),

                Select::make('media_type_id')
                    ->relationship('mediaType', 'name')
                    ->native(false)
                    ->createOptionModalHeading("Creation d'un nouveau type")
                    ->createOptionForm([
                        Select::make(name: "name")
                            ->options([
                                "image"=>"Images",
                                "video"=>"Videos"
                            ])
                            ->required()
                            ->unique(MediaType::class)
                    ])
                    ->required(),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->visibleOn('edit')
                    ->content(fn(?MediaGroup $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->visibleOn('edit')
                    ->content(fn(?MediaGroup $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label'),

                TextColumn::make('published_at'),

                TextColumn::make('description'),

                TextColumn::make('mediaType.name')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListMediaGroups::route('/'),
            'create' => Pages\CreateMediaGroup::route('/create'),
            'edit' => Pages\EditMediaGroup::route('/{record}/edit'),
        ];
    }

    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['mediaType']);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['mediaType.name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        $details = [];

        if ($record->mediaType) {
            $details['MediaType'] = $record->mediaType->name;
        }

        return $details;
    }

    public static function getRelations(): array
    {
        return [
            MediaRelationManager::class
        ];
    }

}
