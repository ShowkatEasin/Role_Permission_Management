<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('email','showkateasin@gmail.com')->first();
        if(is_null($user)){

        $user = new User();
        $user->name = "Showkat Easin";
        $user->email = "showkateasin@gmail.com";
        $user->password = Hash::make('123456789');
        $user->save();

        }
    }
}
