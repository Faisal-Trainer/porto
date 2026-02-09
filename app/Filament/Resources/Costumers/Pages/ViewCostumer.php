<?php

namespace App\Filament\Resources\Costumers\Pages;

use App\Filament\Resources\Costumers\CostumerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCostumer extends ViewRecord
{
    protected static string $resource = CostumerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
