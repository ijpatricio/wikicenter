<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use FilamentTiptapEditor\TiptapEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContentTipTapBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('content-tip-tap')
            ->schema([
                TiptapEditor::make('content')
                    ->profile('simple')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
