<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    // protected $guarded = [];
    
    protected $table = 'signatures';
    
    protected $fillable = [
      'id',
      'name',
      'signature_name',
      'signature_location',
      ];
}
