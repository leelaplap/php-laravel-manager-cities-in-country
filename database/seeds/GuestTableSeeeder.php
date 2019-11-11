<?php

use Illuminate\Database\Seeder;

class GuestTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name ="Admin";
        $user->email ="admin@gmail.com";
        $user->password =\Illuminate\Support\Facades\Hash::make('1');
        $user->role = \App\RoleInterface::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name ="Guest";
        $user->email ="guest@gmail.com";
        $user->password =\Illuminate\Support\Facades\Hash::make('1');
        $user->role = \App\RoleInterface::GUEST;
        $user->save();

    }
}
