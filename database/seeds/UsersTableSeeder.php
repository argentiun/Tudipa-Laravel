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
          'email' => 'pablo@gmail.com',
          'password' => bcrypt('asdfasdf'),
          'admin' => true]
        );
        User::create(
          ['name' => 'Pedro',
          'email' => 'pedro@gmail.com',
          'password' => bcrypt('asdfasdf'),
          'admin' => false]
        );

    }
}
