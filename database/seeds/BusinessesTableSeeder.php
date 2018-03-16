<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
        ['title' => "Єдина база клінік", 'image' => "slider01.png"],
        ['title' => "Зручний доступ", 'image' => "slider02.png"],
        ['title' => "Швидкий запис на прийом", 'image' => "slider03.png"],
        ['title' => "Рейтин лікарів та лікарень", 'image' => "slider04.png"],
        ['title' => "Доступ до карти пацієнта", 'image' => "slider05.png"]
        ]);
    }
}
