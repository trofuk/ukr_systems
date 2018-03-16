<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
        ['question' => "У складні ваших систем багато команд. Хто відповідатиме за мій проект?", 'answer' => "Зазвичай проектом займається одна команда, наша ж спілка являється гарантом високої якості виконання поставлених задач. Саме тому ми запрошуємо тільки кращі компанії до нашого складу."],
        ['question' => "Які цілі Українських Систем?", 'answer' => "Якщо завдання кожної компанії окремо - отримання прибутків, спілка створена для того щоб всі наші знання, вміння та досвід інтегрувати у майбутнє країни в якій ми народилися та живемо. Ми хочемо враваджувати ефективні рішення для кращого свого життя, близьких, знайомих та всіх співвітчизників"],
        ['question' => "Все чудово. А що ви можете запропонувати конкретно для мене?", 'answer' => "Зверніться до нас за телефоном або заповніть просту форму знизу."]
        ]);
    }
}