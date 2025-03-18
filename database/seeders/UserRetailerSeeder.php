<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Retailer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRetailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       
        $users = User::all();      
        $retailers = Retailer::all();
        
        if ($users->isEmpty() || $retailers->isEmpty()) {            
            return;
        }
       
        foreach ($users as $user) {            
            $randomRetailers = $retailers->random(rand(1, $retailers->count()));
            foreach ($randomRetailers as $retailer) {               
                $user->retailers()->attach($retailer->id, ['is_active' => true]);
            }
        }

        
    }
}
