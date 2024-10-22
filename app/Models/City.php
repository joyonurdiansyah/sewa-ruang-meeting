<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
Use Illuminate\Support\Str;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'photo'
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['address'] = Str::slug($value);
    }

    // satu city dapat memiliki lebih dari satu spaces
    public function officeSpaces(): HasMany{
        return $this->hasMany(OfficeSpace::class);
    }
}
