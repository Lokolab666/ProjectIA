<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'email'=>'fernando.escobar',
               'password'=> bcrypt('fernando.escobar'),
               'type'=>0,
            ],
            [
                'email'=>'Ines.Blanca',
                'password'=> bcrypt('Ines.Blanca'),
                'type'=>0,
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
