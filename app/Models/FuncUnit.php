<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'func_unit'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
