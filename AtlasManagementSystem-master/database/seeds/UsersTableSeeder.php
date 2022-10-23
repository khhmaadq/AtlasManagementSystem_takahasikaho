<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'over_name'=>'武田',
            'under_name'=>'慶喜',
            'over_name_kana'=>'タケダ',
            'under_name_kana'=>'ヨシノブ',
            'mail_address'=>'yosinobu@yahho.jp',
            'sex'=>'1',
            'birth_day'=>'1999-02-02',
            'role'=>'2',
            'password'=>bcrypt('yosiyosiyosi'),
        ]);
    }
}
