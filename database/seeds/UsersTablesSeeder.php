<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name'    => 'Ben Apple1',
          'email'    => 'ben_apple1@gmail.com',
          'password'   =>  Hash::make('password'),
          'remember_token' =>  str_random(12),
          ]);

          User::create([
              'name'    => 'admin',
              'email'    => 'admin@gmail.com',
              'password'   =>  Hash::make('password'),
              'remember_token' =>  str_random(12),
            ]);
            }
        }
        /*
        |--------------------------------------------------------------------------
        | User Seeder
        |--------------------------------------------------------------------------
        |
        | Here is the start of the database, by doing this I send the
          logins in to the database.   'name' 'email' is the id for the Database
          so puting any name or email into a new form will create a new user
        |
        */
