<?php

namespace App\Filament\Resources\Costumers\Pages;

use App\Filament\Resources\Costumers\CostumerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCostumer extends EditRecord
{
    protected static string $resource = CostumerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
