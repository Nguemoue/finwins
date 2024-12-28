<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Models\Member;
use App\Models\MemberCategory;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $slug = 'members';

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = "Administration";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('avatar')
                    ->image(),
                TextInput::make('name')
                    ->required(),

                TextInput::make('surname'),

                TextInput::make('phone_number'),

                TextInput::make('position')
                    ->label("Poste")
                    ->required(),


                Select::make('member_category_id')
                    ->relationship('memberCategory', 'name')
                    ->searchable()
                    ->createOptionForm([
                        TextInput::make(name: "name")
                            ->unique(MemberCategory::class)
                    ])
                    ->editOptionForm([
                        TextInput::make(name: "name")
                            ->unique(MemberCategory::class, ignoreRecord: true)
                    ])
                    ->preload()
                    ->required(),

                TextInput::make('email'),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?Member $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?Member $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('surname'),

                TextColumn::make('phone_number'),

                TextColumn::make('position'),

                ImageColumn::make('avatar'),

                TextColumn::make('memberCategory.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }

    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['memberCategory']);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email', 'memberCategory.name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        $details = [];

        if ($record->memberCategory) {
            $details['MemberCategory'] = $record->memberCategory->name;
        }

        return $details;
    }
}
