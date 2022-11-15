<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        'user_id',
        'post_title',
        'post',
    ];

    public function user(){
        //リレーション　belongsTo　多対1
        return $this->belongsTo('App\Models\Users\User');
    }

    public function postComments(){
        //リレーション　hasMany 1対多
        return $this->hasMany('App\Models\Posts\PostComment');
    }

    public function subCategories(){
        // リレーションの定義 hasOne　1対1
        return $this->hasOne('App\Models\Categories\SubCategories');
    }

    // コメント数
    public function commentCounts($post_id){
        return Post::with('postComments')->find($post_id)->postComments();
    }
}
