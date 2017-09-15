<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'HuongNT';
        $user->password = '123456';
        $user->email = 'street.demon95@gmail.com';
        $user->save();

        $user = new User();
        $user->name = 'HoaiNT';
        $user->password = '123456';
        $user->email = 'hoaittt@nal.vn';
        $user->save();

        $user = new User();
        $user->name = 'NgocNT';
        $user->password = '123456';
        $user->email = 'ngoc123@gmail.com';
        $user->save();

        $user = new User();
        $user->name = 'DuongHTT';
        $user->password = '123456';
        $user->email = 'duongabc@gmail.com';
        $user->save();
    }
}
