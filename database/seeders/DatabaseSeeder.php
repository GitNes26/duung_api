<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(RoleSeeder::class);
        //UserSeeder::class;
=======
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DifficultSeeder::class,
            SubjetSeeder::class,
            GameSeeder::class,
            TypesQuestionSeeder::class,
            ItemSeeder::class,
            AnswerSeeder::class,
        ]);
>>>>>>> 39fa9161d607c93e306e179b51eb59627431b40d
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
