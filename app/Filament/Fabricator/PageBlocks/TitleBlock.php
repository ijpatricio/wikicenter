<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TitleBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('title')
            ->schema([
                TextInput::make('title'),
                TextInput::make('subtitle'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
