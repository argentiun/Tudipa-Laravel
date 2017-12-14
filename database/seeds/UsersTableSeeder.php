<?php

use Illuminate\Database\Seeder;
use App\User; //para poder hacer el php artisan db:seed debe estar esto llamando.

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //Con esto crearemos un usuario automanticamente.
    public function run()
    {
        User::create(
          ['name' => 'Pablo',
          'lastname' => 'Lalala',
          'dateB' => '1990-06-18',
          'country' => 'Argentina',
          'province' => 'Buenos Aires',
          'email' => 'pablo@gmail.com',
          'password' => bcrypt('asdfasdf'),
          'admin' => true]
        );
        User::create(
          ['name' => 'Pedro',
          'lastname' => 'Trala',
          'dateB' => '1996-05-09',
          'country' => 'Argentina',
          'province' => 'Buenos Aires',
          'email' => 'pedro@gmail.com',
          'password' => bcrypt('asdfasdf'),
          'admin' => false]
        );

    }
}
