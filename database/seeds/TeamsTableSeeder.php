<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
        ['name' => "ESFBI LAB.", 'link' => "#", 'description' => "Enterprise service for business intelligence", 'image' => "team-1.jpg"],
        ['name' => "REDCUBE", 'link' => "#", 'description' => "IT-Solutions for Startups", 'image' => "team-2.jpg"],
        ['name' => "STEPICO", 'link' => "#", 'description' => "Digital Marketing", 'image' => "team-3.jpg"],
        ['name' => "WEBDREAMLAB", 'link' => "#", 'description' => "ERP + CRM Solutions", 'image' => "team-4.jpg"]
        ]);
    }
}
