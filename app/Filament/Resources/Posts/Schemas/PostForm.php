<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            Grid::make(1)
                    ->schema([
                        Section::make('Post Content')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                                TextInput::make('slug')
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(Post::class, 'slug', ignoreRecord: true),
                                RichEditor::make('content')
                                    ->required()
                                    ->columnSpanFull(),
                                Textarea::make('excerpt')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ]),
                    ]),
            Grid::make(1)
                    ->schema([
                                Section::make('Status & Category')
                                    ->schema([
                                        Toggle::make('is_published')
                                            ->live()
                                            ->afterStateUpdated(fn ($state, Set $set) => $state ? $set('published_at', now()) : $set('published_at', null)),
                                        DateTimePicker::make('published_at')
                                            ->hidden(fn (Get $get) => ! $get('is_published')),
                                        Toggle::make('is_journal')
                                            ->label('Scientific Journal / Article')
                                            ->helperText('Jika aktif, skema ScholarlyArticle akan digunakan.'),
                                        Select::make('category_id')
                                            ->relationship('category', 'name')
                                            ->required()
                                            ->searchable()
                                            ->preload()
                                            ->createOptionForm([
                                                TextInput::make('name')
                                                    ->required()
                                                    ->live(onBlur: true)
                                                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                                                TextInput::make('slug')
                                                    ->required()
                                                    ->unique('categories', 'slug'),
                                            ]),
                                    ]),

                                Section::make('Featured Image')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->directory('posts')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ]),
                                    ]),

                                Section::make('SEO Meta')
                                    ->collapsed()
                                    ->schema([
                                        TextInput::make('meta_title'),
                                        Textarea::make('meta_description'),
                                        TextInput::make('meta_keywords'),
                                    ]),
                    ]),
            ]);
    }
}
