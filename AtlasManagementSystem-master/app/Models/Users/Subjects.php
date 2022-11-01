<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

use App\Models\Users\User;

class Subjects extends Model
{
    const UPDATED_AT = null;


    protected $fillable = [
        'subject'
    ];

    public function users(){
        // リレーションの定義
        //BelongsToMany:多対多(モデルの場所,中間テーブル,紐づけるカラム)
        return $this->BelongsToMany('App\Models\Users','subject_users','user_id','subject_id')->withPivot('id');
    }
}
