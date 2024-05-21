<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;

class ParseCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parse-cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse cities and save to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cities = [
            ['name' => 'Kazan', 'slug' => 'kazan'],
            ['name' => 'Moscow', 'slug' => 'msk'],
            // Добавьте другие города
        ];

        foreach ($cities as $cityData) {
            City::updateOrCreate(
                ['slug' => $cityData['slug']],
                ['name' => $cityData['name']]
            );
        }

        $this->info('Cities have been parsed and saved.');
    }
}