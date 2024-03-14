<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vehicle;

class JourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $v = new vehicle();
        $v->type = "repülőgép";
        $v->save();
        $v = new vehicle();
        $v->type = "busz";
        $v->save();

        $v = new vehicle();
        $v->type = "autó";
        $v->save();

        $v = new vehicle();
        $v->type = "vonat";
        $v->save();

        $v = new vehicle();
        $v->type = "hajó";
        $v->save();
    }
}
