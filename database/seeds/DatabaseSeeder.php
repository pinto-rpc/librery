<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {	
    	$this->trucateTables([
    		'rols',
            'permisos'
    	]);
        // $this->call(UsersTableSeeder::class);
        $this->call(RolsTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
    }

    protected function trucateTables(array $tablas)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tablas as $tabla) {
    		DB::table($tabla)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
