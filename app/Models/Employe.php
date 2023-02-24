<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'departement_id',
        'name',
        'nip',
        'jk',
        'photo'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
