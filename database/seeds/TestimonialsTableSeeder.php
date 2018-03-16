<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('testimonials')->insert([
        ['name' => "Оксана Кошак -", 'position' => " директор ЛКП «Лев»", 'image' => "member-1.jpg", 'text' => "Львівське комунальне підприємство «ЛЕВ» висловлює щиру подяку керівництву та команді розробників ТзОВ “УКРАЇНСЬКІ СИСТЕМИ ТА БЛОКЧЕЙН РІШЕННЯ” за довготривалу співпрацю та своєчасну підтримку в галузі ІТ технологій. Саме завдяки вашій роботі та щирому бажанню допомогти безпритульним тваринам ми отримали сайт www.lkplev.com, з яким наша робота стала більш ефективною, а рівень прилаштування тварин у родини зріс до 70% у 2017 році.
"],
        ['name' => "Федоришин Я.В. -", 'position' => "директор-художній керівник ЛАДТ «Воскресіння»", 'image' => "member-2.jpg", 'text' => "Львівський академічний театр Воскресіння в особі директора Федоришина Ярослава Васильовича висловлює подяку команді професіоналів  ТОВ «УКРАЇНСЬКІ СИСТЕМИ ТА БЛОКЧЕЙН РІШЕННЯ»  за якісну, багаторічну співпрацю та консультації в розробці ІТ рішень для нашого осередку."],
        ['name' => "Mhichel Munna -", 'position' => "Advissor of Vision studio", 'image' => "member-3.jpg", 'text' => "Quality-focused Wordpress Theme that our startup went to after previous designers had failed to deliver. I highly recommend Porton for any business projects."],
        ]);
    }
}
