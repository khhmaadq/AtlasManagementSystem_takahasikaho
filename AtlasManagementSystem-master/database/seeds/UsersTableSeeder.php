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
            'over_name'=>'三角',
            'under_name'=>'毛糸玉',
            'over_name_kana'=>'ミスミ',
            'under_name_kana'=>'ケイト',
            'mail_address'=>'keito@yahho.jp',
            'sex'=>'1',
            'birth_day'=>'1999-3-3',
            'password'=>'keitokeito'
        ]);
    }
}
