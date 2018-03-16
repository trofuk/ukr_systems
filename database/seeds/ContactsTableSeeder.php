<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
        ['address' => "Україна, м.Київ, вул. Хрещатик, 1", 'email' => "sales@ukrainian.systems", 'phone' => "(067)-672-99-69"]
        ]);
    }
}
