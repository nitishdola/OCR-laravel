<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['email' => 'nitish.dola@gmail.com', 'password' => bcrypt('ocrAdmin#')]);

        $this->command->info('User Added !');
    }
}
