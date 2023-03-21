<?php

namespace App\Filament\Fabricator\PageBlocks;

use Closure;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeadingBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('heading')
            ->schema([
                TextInput::make('heading')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        /**
                         * Generate the unique hash for the TOC item
                         * and save to the tocHash field for link
                         * generation while rendering
                         */
                        $set('tocHash', Str::slug($state) . '-' . uniqid());
                    })
                    ->columnSpan(2),
                Hidden::make('tocHash')
                    ->disabled(),
                Select::make('heading_type')
                    ->options(config('wikicenter.headings'))
            ])
            ->columns(3);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
