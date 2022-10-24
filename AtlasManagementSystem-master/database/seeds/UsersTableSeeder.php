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
            'over_name'=>'五条',
            'under_name'=>'悟',
            'over_name_kana'=>'ゴジョウ',
            'under_name_kana'=>'サトル',
            'mail_address'=>'g@yahho.jp',
            'sex'=>'1',
            'birth_day'=>'1999-02-02',
            'role'=>'4',
            'password'=>bcrypt('yosiyosiyosi'),
        ]);
    }
}
