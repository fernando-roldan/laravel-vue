<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = ['brand'];

    public function cars(): HasMany {
        
        return $this->hasMany(Cars::class, "brands_id");
    }
}
