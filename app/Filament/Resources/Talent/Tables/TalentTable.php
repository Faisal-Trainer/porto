<?php

namespace App\Filament\Resources\Talent\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class TalentTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('phone')
                    ->label('WhatsApp')
                    ->searchable(),

                TextColumn::make('skill')
                    ->label('Skill')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'frontend' => 'Frontend',
                        'backend' => 'Backend',
                        'fullstack' => 'Fullstack',
                        'uiux' => 'UI/UX',
                        'social_media' => 'Social Media',
                        'copywriting' => 'Copywriting',
                        'it_support' => 'IT Support',
                        default => 'Lainnya',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'frontend' => 'info',
                        'backend' => 'success',
                        'fullstack' => 'primary',
                        'uiux' => 'warning',
                        'social_media' => 'danger',
                        'copywriting' => 'primary',
                        'it_support' => 'gray',
                        default => 'gray',
                    }),

                TextColumn::make('experience')
                    ->label('Level')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'beginner' => 'Pemula',
                        'junior' => 'Junior',
                        'intermediate' => 'Intermediate',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'beginner' => 'gray',
                        'junior' => 'info',
                        'intermediate' => 'success',
                        default => 'gray',
                    }),

                IconColumn::make('cv_path')
                    ->label('CV')
                    ->boolean()
                    ->trueIcon('heroicon-o-document-text')
                    ->falseIcon('heroicon-o-x-mark')
                    ->trueColor('success')
                    ->falseColor('gray'),

                IconColumn::make('read_at')
                    ->label('Dibaca')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->trueColor('success')
                    ->falseColor('warning'),

                TextColumn::make('created_at')
                    ->label('Daftar')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('skill')
                    ->label('Skill')
                    ->options([
                        'frontend' => 'Frontend Development',
                        'backend' => 'Backend Development',
                        'fullstack' => 'Fullstack Development',
                        'uiux' => 'UI/UX Design',
                        'social_media' => 'Social Media & Content',
                        'it_support' => 'IT Support',
                        'other' => 'Lainnya',
                    ]),

                SelectFilter::make('experience')
                    ->label('Level Pengalaman')
                    ->options([
                        'beginner' => 'Pemula',
                        'junior' => 'Junior',
                        'intermediate' => 'Intermediate',
                    ]),

                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('download_cv')
                    ->label('Download CV')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('info')
                    ->url(fn ($record) => $record->cv_url)
                    ->openUrlInNewTab()
                    ->visible(fn ($record) => ! empty($record->cv_path)),
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
