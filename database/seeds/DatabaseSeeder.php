<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Lang;
use App\User;
use App\Categories;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $itemsRole = [
            ['id' => 1, 'prefix' => 'admin'],
            ['id' => 2, 'prefix' => 'user'],
            ['id' => 3, 'prefix' => 'moderator'],
        ];

        foreach ($itemsRole as $item) {
            Role::create($item);
        }
        $itemsLang= [
            ['id' => 1, 'name' => 'am'],
            ['id' => 2, 'name' => 'en'],
            ['id' => 3, 'name' => 'ru'],
        ];

        foreach ($itemsLang as $item) {
            Lang::create($item);
        }
        $itemsUser = [
            ['id' => 1, 'email' => 'admin@admin.com','password' => '$2y$12$UMFF8WLaUb51E4uOKse/rudjxjPm5K5D4VaPRGptZNeLDM8DRMGfK','role_id' => '1'],
            ['id' => 2, 'email' => 'admin2@admin.com','password' => '$2y$12$UMFF8WLaUb51E4uOKse/rudjxjPm5K5D4VaPRGptZNeLDM8DRMGfK','role_id' => '2'],
            ['id' => 3, 'email' => 'admin3@admin.com','password' => '$2y$12$UMFF8WLaUb51E4uOKse/rudjxjPm5K5D4VaPRGptZNeLDM8DRMGfK','role_id' => '3'],

        ];

        foreach ($itemsUser as $item) {
            User::create($item);
        }
        $itemsCategory = [
            ['id' => 1, 'name' => 'Hot'],
            ['id' => 2, 'name' => 'Travel'],
            ['id' => 3, 'name' => 'News'],

        ];

        foreach ($itemsCategory as $item) {
            Categories::create($item);
        }

    }

}
