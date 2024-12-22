<?php

namespace App\Filament\Resources\ObjectiveResource\Pages;

use App\Filament\Resources\ObjectiveResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListObjectives extends ListRecords
{
    protected static string $resource = ObjectiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
