<?php

namespace App\Filament\Resources\Talent\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TalentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Pribadi')
                    ->schema([
                        Grid::make(2)->schema([
                            TextEntry::make('name')
                                ->label('Nama Lengkap'),

                            TextEntry::make('email')
                                ->label('Email')
                                ->copyable(),

                            TextEntry::make('phone')
                                ->label('No. WhatsApp')
                                ->copyable(),

                            TextEntry::make('created_at')
                                ->label('Tanggal Daftar')
                                ->dateTime('d M Y, H:i'),
                        ]),
                    ]),

                Section::make('Profil Skill')
                    ->schema([
                        Grid::make(3)->schema([
                            TextEntry::make('skill')
                                ->label('Skill Utama')
                                ->badge()
                                ->formatStateUsing(fn (string $state): string => match ($state) {
                                    'frontend' => 'Frontend Development',
                                    'backend' => 'Backend Development',
                                    'fullstack' => 'Fullstack Development',
                                    'uiux' => 'UI/UX Design',
                                    'social_media' => 'Social Media & Content',
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

                            TextEntry::make('experience')
                                ->label('Level Pengalaman')
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

                            TextEntry::make('availability')
                                ->label('Ketersediaan')
                                ->badge()
                                ->formatStateUsing(fn (string $state): string => match ($state) {
                                    'lt10' => '< 10 jam/minggu',
                                    '10-20' => '10–20 jam/minggu',
                                    '20-40' => '20–40 jam/minggu',
                                    'fulltime' => 'Full-time',
                                    default => $state,
                                }),
                        ]),

                        TextEntry::make('bio')
                            ->label('Bio / Tentang Diri')
                            ->columnSpanFull(),
                    ]),

                Section::make('File & Status')
                    ->schema([
                        Grid::make(2)->schema([
                            TextEntry::make('cv_path')
                                ->label('File CV')
                                ->formatStateUsing(fn (?string $state): string => $state ? 'Ada (klik untuk download)' : 'Tidak ada CV')
                                ->url(fn ($record) => $record->cv_url)
                                ->openUrlInNewTab(),

                            IconEntry::make('read_at')
                                ->label('Status Baca')
                                ->boolean()
                                ->trueIcon('heroicon-o-check-circle')
                                ->falseIcon('heroicon-o-clock')
                                ->trueColor('success')
                                ->falseColor('warning'),
                        ]),
                    ]),
            ]);
    }
}
