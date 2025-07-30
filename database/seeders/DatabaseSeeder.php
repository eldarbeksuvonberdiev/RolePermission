<?php

namespace Database\Seeders;

use App\Models\RolePermission\Permission;
use App\Models\RolePermission\Role;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
        ]);

        $role = Role::create(['name' => 'admin']);

        $user->roles()->attach($role->id);

        $permissions = Permission::all();

        $role->permissions()->attach($permissions);
    }
}
