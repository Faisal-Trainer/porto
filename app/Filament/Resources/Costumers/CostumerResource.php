<?php

namespace App\Filament\Resources\Costumers;

use App\Filament\Resources\Costumers\Pages\CreateCostumer;
use App\Filament\Resources\Costumers\Pages\EditCostumer;
use App\Filament\Resources\Costumers\Pages\ListCostumers;
use App\Filament\Resources\Costumers\Pages\ViewCostumer;
use App\Filament\Resources\Costumers\Schemas\CostumerForm;
use App\Filament\Resources\Costumers\Schemas\CostumerInfolist;
use App\Filament\Resources\Costumers\Tables\CostumersTable;
use App\Models\Customer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CostumerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'costumer';

    public static function form(Schema $schema): Schema
    {
        return CostumerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CostumerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CostumersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCostumers::route('/'),
            'create' => CreateCostumer::route('/create'),
            'view' => ViewCostumer::route('/{record}'),
            'edit' => EditCostumer::route('/{record}/edit'),
        ];
    }
}
