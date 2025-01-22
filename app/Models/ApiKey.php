<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $fillable = ['key', 'user_id'];

    public static function generate($user_id)
    {
        $apiKey = new self();
        $apiKey->key = Str::random(60);
        $apiKey->user_id = $user_id;
        $apiKey->save();

        return $apiKey->key;
    }
}
