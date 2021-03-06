<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $user = new User;

        $user->fill(array(
            'email'    => 'antonin@antjanus.com',
            'username' => 'antjanus',
            'name'     => 'Antonin Januska',
            'role'     => 2
            ));

        $user->password = Hash::make('admin');

        $user->save();
    }

}
