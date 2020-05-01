<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = [
              [
                 'name'=>'Admin',
                 'email'=>'admin@example.com',
                  'is_admin'=>'1',
                 'password'=> bcrypt('amponsah'),
              ],

          ];

          foreach ($user as $key => $value) {
              User::create($value);
          }
    }
}
