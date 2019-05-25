<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([
            'name' => 'Admin LibraryKu',
            'email' => 'admin@lib.dev',
            'password' => Hash::make('adminperpus')
        ]);
    }
}
