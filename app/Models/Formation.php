<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string, text>
     */
    protected $fillable = [
        'title',
        'descrFormations',
        'startDate',
        'endDate',
        'type',
        'idActivity',
    ];
}