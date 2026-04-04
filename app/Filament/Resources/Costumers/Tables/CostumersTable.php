<?php

namespace App\Filament\Resources\Costumers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class CostumersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('username')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('phone')
                    ->label('Telepon')
                    ->searchable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'web_application' => '🌐 Web Application',
                        'it_support' => '🛠️ IT Support',
                        'ui_ux' => '🎨 UI/UX Design',
                        'digital_consulting' => '💼 Digital Consulting',
                        'goes_to_school' => '🏫 Goes to School',
                        'social_media' => '📱 Social Media',
                        default => '📋 Lainnya',
                    }),

                TextColumn::make('message')
                    ->label('Pesan')
                    ->limit(60)
                    ->tooltip(fn (TextColumn $column): ?string => $column->getState()),

                TextColumn::make('created_at')
                    ->label('Masuk')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'web_application' => 'Web Application',
                        'it_support' => 'IT Support',
                        'ui_ux' => 'UI/UX Design',
                        'digital_consulting' => 'Digital Consulting',
                        'goes_to_school' => 'Goes to School',
                        'social_media' => 'Social Media',
                        'other' => 'Lainnya',
                    ]),

                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }
}
