<?php

namespace App\Filament\Resources\Costumers\Pages;

use App\Filament\Resources\Costumers\CostumerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCostumers extends ListRecords
{
    protected static string $resource = CostumerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
