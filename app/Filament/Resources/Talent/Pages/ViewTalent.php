<?php

namespace App\Filament\Resources\Talent\Pages;

use App\Filament\Resources\Talent\TalentResource;
use App\Models\Talent;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTalent extends ViewRecord
{
    protected static string $resource = TalentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    protected function afterFill(): void
    {
        /** @var Talent $record */
        $record = $this->getRecord();
        $record->markAsRead();
    }
}
