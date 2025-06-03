<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $link1 = new Link();
        $link1->name = 'link1';
        $link1->url = 'https://github.com/';
        $link1->save();
    }
}
