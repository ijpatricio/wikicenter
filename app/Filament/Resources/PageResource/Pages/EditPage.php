<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Actions\GeneratePdf;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class EditPage extends \Z3d0X\FilamentFabricator\Resources\PageResource\Pages\EditPage
{
    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Action::make('visit')
                ->label(__('filament-fabricator::page-resource.actions.visit'))
                ->url(fn () => config('filament-fabricator.routing.prefix') . FilamentFabricator::getPageUrlFromId($this->record->id, true))
                ->icon('heroicon-o-external-link')
                ->openUrlInNewTab()
                ->color('success')
                ->visible(config('filament-fabricator.routing.enabled')),
            Action::make('generate_pdf')
                ->label(__('Generate PDF'))
                ->url(fn () => route('generate-pdf', $this->record->id))
                ->icon('heroicon-o-external-link')
                ->openUrlInNewTab()
                ->color('success')
                ->visible(config('filament-fabricator.routing.enabled')),
            Action::make('save')
                ->action('save')
                ->label(__('filament::resources/pages/edit-record.form.actions.save.label')),
        ];
    }
}
