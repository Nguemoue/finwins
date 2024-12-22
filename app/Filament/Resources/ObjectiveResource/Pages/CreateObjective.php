<?php

namespace App\Filament\Resources\ObjectiveResource\Pages;

use App\Filament\Resources\ObjectiveResource;
use Filament\Resources\Pages\CreateRecord;

class CreateObjective extends CreateRecord
{
    protected static string $resource = ObjectiveResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
