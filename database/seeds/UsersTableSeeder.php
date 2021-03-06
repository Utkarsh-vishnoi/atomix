<?php

use Atomix\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = new User;
        // $user->name = 'Utkarsh Vishnoi';
        // $user->email = 'utkarshvishnoi25@gmail.com';
        // $user->password = Hash::make('secret');
        // $user->save();

        factory(Atomix\User::class, 2)->create()->each(function($u) {
            $u->atoms()->save(factory(Atomix\Atom::class)->make());
        });
    }
}
