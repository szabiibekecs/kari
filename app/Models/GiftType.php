<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftType extends Model
{
    protected $fillable = ['type_name'];

    public function gifts()
    {
        return $this->hasMany(Gift::class);
    }
}
