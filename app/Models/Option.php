<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $fillable = [
        'parent',
        'name',
        'color',
        'color_1',
        'img'
    ];


    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


    public function children()
    {
        return $this->hasMany(Option::class, 'parent', 'id');
    }

    public function parentOption()
    {
        return $this->belongsTo(Option::class, 'parent', 'id');
    }

    

}
