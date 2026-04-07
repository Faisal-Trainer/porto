<?php

namespace App\Filament\Resources\Talent\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class TalentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)->schema([
                    TextInput::make('name')
                        ->label('Nama Lengkap')
                        ->required(),

                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required(),

                    TextInput::make('phone')
                        ->label('No. WhatsApp')
                        ->tel()
                        ->required(),

                    Select::make('skill')
                        ->label('Skill Utama')
                        ->options([
                            'frontend' => 'Frontend Development',
                            'backend' => 'Backend Development',
                            'fullstack' => 'Fullstack Development',
                            'uiux' => 'UI/UX Design',
                            'social_media' => 'Social Media & Content',
                            'copywriting' => 'Copywriting',
                            'it_support' => 'IT Support',
                            'other' => 'Lainnya',
                        ])
                        ->required(),

                    Select::make('experience')
                        ->label('Level Pengalaman')
                        ->options([
                            'beginner' => 'Pemula',
                            'junior' => 'Junior',
                            'intermediate' => 'Intermediate',
                        ])
                        ->required(),

                    Select::make('availability')
                        ->label('Ketersediaan Waktu')
                        ->options([
                            'lt10' => '< 10 jam/minggu',
                            '10-20' => '10–20 jam/minggu',
                            '20-40' => '20–40 jam/minggu',
                            'fulltime' => 'Full-time',
                        ])
                        ->required(),
                ]),

                Textarea::make('bio')
                    ->label('Bio / Tentang Diri')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),

                FileUpload::make('cv_path')
                    ->label('File CV')
                    ->disk('public')
                    ->directory('talents/cv')
                    ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png'])
                    ->maxSize(5120)
                    ->nullable()
                    ->columnSpanFull(),

                DateTimePicker::make('read_at')
                    ->label('Dibaca Pada')
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }
}
