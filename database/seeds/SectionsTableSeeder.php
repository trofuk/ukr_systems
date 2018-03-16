<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
        ['title' => "top baner", 'description' => "top baner"],
        ['title' => "Українські Системи", 'description' => "Кращі компанії України у галузі сучасних технологічних та інформаціїних систем - зібрані для втілення найсміливіших проектів по покращенню життя нашої країни та її людей"],
        ['title' => "ASKEP.NET", 'description' => "Рішення для української медицини"],
        ['title' => "Наші напрямки", 'description' => "Все що стосується технологій і навіть більше..."],
        ['title' => "Маєте питання? Дозвольте вам допомогти", 'description' => "Задати питання"],
        ['title' => "Про нас", 'description' => "Про нас"],
        ['title' => "Наші команди", 'description' => "Наші ТОПові компанії із особливими вміннями - до ваших послуг"],
        ['title' => "testimonials", 'description' => "testimonials"],
        ['title' => "Цікавить співпраця?", 'description' => "Не зволікайте - Дзвоніть, Пишіть, Заходьте!"]
        ]);
    }
}
