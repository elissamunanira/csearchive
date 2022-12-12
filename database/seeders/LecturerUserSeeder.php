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
            'firstname' => 'Habwikuzo',
            'lastname' => 'Henriette',
            'gender' => 'FEMALE',
            'phone' => '+250782688362',
            'department' => 'CSE',
            'email' => 'habwikuzo@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'Lecturer']);

        $lecturerPermissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($lecturerPermissions);

        $user->assignRole([$role->id]);
    }
}
