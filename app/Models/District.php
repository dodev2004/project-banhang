<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $primaryKey = "code";
    protected $keyType = 'string';
    public function provinces(){
      return $this->belongsTo(Province::class,"province_code","code");
    }
    public function wards(){
      return $this->hasMany(Ward::class,"district_code","code");
    }
}
