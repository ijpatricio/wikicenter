<?php

namespace App\Actions;

use Spatie\Browsershot\Browsershot;

class GeneratePdf
{
    public function __invoke($pageId)
    {
        $pdf = Browsershot::url('https://example.com')
            ->setWSEndpoint('ws://chrome:3000')
            ->setScreenshotType('jpeg', 100)
            ->format('A4')
            ->pdf();

        return response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="page.pdf"',
        ]);
    }
}
