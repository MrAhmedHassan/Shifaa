<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            'Admin',
            'Doctor',
            'Assistant',
            'Patient',
        ];

        foreach ($roles as $role){
            $roleTable = new \Spatie\Permission\Models\Role();
            $roleTable->name = $role;
            $roleTable->save();
        }

        App\User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('123456'),
            'email_verified_at'=>time()
        ])->assignRole('Admin');

    }
}
