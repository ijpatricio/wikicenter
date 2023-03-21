<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::name('generate-pdf')->middleware('auth:sanctum')->get('/generate-pdf/{pageId}', function ($pageId) {

    // TODO DONE - setup the connection from chrome's container to visit thr url on the webserver (not localhost!) :)
    // env variable app.url_for_chrome_docker
    $url = config('app.url_for_chrome_docker')
        . config('filament-fabricator.routing.prefix')
        . FilamentFabricator::getPageUrlFromId($pageId, true);

    $pdf = Browsershot::url($url)
        ->setWSEndpoint('ws://chrome:3000')
        ->setScreenshotType('jpeg', 100)
        ->margins(15, 10, 15, 10)
        ->format('A4')
        ->pdf();

    return response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="page.pdf"',
    ]);

// TODO check if code above is equivalent to the one below, or if there are differences in performance

//    return response()->streamDownload(function () use ($pdf) {
//        echo $pdf;
//    }, 'laravel-readme.pdf', [
//        'Content-Type' => 'application/pdf',
//    ], 'inline');

});
