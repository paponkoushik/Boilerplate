<?php
namespace Database\Seeders\App;

use App\Models\Core\Auth\Permission;
use App\Models\Core\Auth\Role;
use App\Models\Core\Auth\User;
use Illuminate\Database\Seeder;
use App\Models\App\User\SocialLink;

class UserDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::where('id', '!=', 1)->delete();

        Role::insert([
            [
                'name' => 'Manager',
                'type_id' => 1,
                'created_by' => 1
            ],
            [
                'name' => 'Moderator',
                'type_id' => 1,
                'created_by' => 1
            ],
        ]);
        $permissions = Permission::pluck('id')->toArray();
        $socialLinks = SocialLink::pluck('id')->toArray();

        Role::where('id', '!=', 1)->get()->each(function (Role $role) use ($permissions) {
            $role->permissions()->attach($permissions);
        });

        User::where('id', '!=', 1)->delete();
        User::find(1)->assignSocialLinks($socialLinks);

        factory(User::class, 10)->create()->each(function (User $user) use ($socialLinks){
            $user->assignRole(Role::inRandomOrder()->first());
            $user->assignSocialLinks($socialLinks);
        });

    }
}
