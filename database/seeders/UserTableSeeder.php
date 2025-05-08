<?php
namespace Database\Seeders;

use App\models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => Hash::make(1234567890)
        ]);

    }
}
