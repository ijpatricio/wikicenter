<?php

namespace App\Filament\Fabricator\PageBlocks;

use Closure;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\Str;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContentTipTapBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('content-tip-tap')
            ->schema([
                TextInput::make('toc')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        /**
                         * Generate the unique hash for the TOC item
                         * and save to the tocHash field for link
                         * generation while rendering
                         */
                        $set('tocHash', Str::slug($state) . '-' . uniqid());
                    }),
                Hidden::make('tocHash')
                    ->disabled(),
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
