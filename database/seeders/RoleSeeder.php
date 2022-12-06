<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use DB;
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 39fa9161d607c93e306e179b51eb59627431b40d

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([ 'role_name' => 'Administrador']);
        DB::table('roles')->insert([ 'role_name' => 'Jugador']);
    }
}
