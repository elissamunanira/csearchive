<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
        $user = User::create([
            'firstname' => 'Munanira',
            'lastname' => 'Elissa',
            'gender' => 'male',
            'phone' => '+250788565520',
            'department' => 'CSE',
            'email' => 'elissamuannira@gmail.com',
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
