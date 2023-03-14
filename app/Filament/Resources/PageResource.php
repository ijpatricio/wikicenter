<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages\EditPage;

use Z3d0X\FilamentFabricator\Resources\PageResource\Pages\CreatePage;
use Z3d0X\FilamentFabricator\Resources\PageResource\Pages\ListPages;
use Z3d0X\FilamentFabricator\Resources\PageResource\Pages\ViewPage;

class PageResource extends \Z3d0X\FilamentFabricator\Resources\PageResource
{
    public static function getPages(): array
    {
        return [
            'index' => ListPages::route('/'),
            'create' => CreatePage::route('/create'),
            'view' => ViewPage::route('/{record}'),
            'edit' => EditPage::route('/{record}/edit'),
        ];
    }
}
