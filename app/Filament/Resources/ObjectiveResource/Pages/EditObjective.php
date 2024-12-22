<?php

namespace App\Filament\Resources\ObjectiveResource\Pages;

use App\Filament\Resources\ObjectiveResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditObjective extends EditRecord
{
    protected static string $resource = ObjectiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
