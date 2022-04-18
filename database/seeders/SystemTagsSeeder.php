<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SystemTags;

class SystemTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemTags::create([
            'name' => 'sport',
            'label' => 'Sport',
        ]);

        SystemTags::create([
            'name' => 'travel',
            'label' => 'Travel',
        ]);
    }
}
