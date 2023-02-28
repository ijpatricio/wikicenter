<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Z3d0X\FilamentFabricator\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::query()->create([
            'blocks' => json_decode('[{"data": {"title": "Assemble mechanical keyboard", "subtitle": "Get your keys right!"}, "type": "title"}, {"data": {"content": "<p>Donec semper quis velit ut elementum. Cras convallis lectus eu felis ultricies tempus. Morbi sed consectetur nulla. Quisque volutpat purus id ultricies venenatis. Phasellus faucibus neque eget nulla finibus, non lacinia arcu facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas varius sagittis aliquet.</p>"}, "type": "content-tip-tap"}, {"data": {"content": "<p>Ut ullamcorper <strong>imperdiet</strong> est, non finibus ipsum mattis at. Duis id ullamcorper erat. In quis sapien ultricies, </p><ul><li><p>efficitur erat eget, </p></li><li><p><em>efficitur erat. Duis commodo </em></p></li><li><p>tempus condimentum. Integer i</p></li></ul><p>Imperdiet risus id mi porttitor, non ultrices ipsum pulvinar. Duis vehicula et purus quis efficitur. Mauris eget diam vel urna commodo interdum.</p>"}, "type": "content-tip-tap"}]'),
            'title' => "Assemble mechanical keyboard",
            'slug' => "assemble-mechanical-keyboard",
            'layout' => "default",
        ]);


    }
}
