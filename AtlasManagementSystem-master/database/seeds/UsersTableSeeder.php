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
            ['over_name'=>'三角'],
            ['under_name'=>'けいと'],
            ['over_name_kana'=>'ミスミ'],
            ['under_name_kana'=>'ケイト'],
            ['mail_address'=>'keito@yahho.jp'],
            ['sex'=>'men'],
            ['birth_day'=>'3/3'],
        ]);
    }
}
