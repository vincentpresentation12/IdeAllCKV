<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nameEvent',
        'startDate',
        'endDate',
        'duration',
        'nbAnimNeed',
        'nbAnimSub',
        'nbParticipant',
        'companyName',
        'descrEvent',
        'isOpen',
        'type',
        //'langue',
        'idAnimModo'
    ];

    public function user() {
        return $this->belongsTo('User::class', 'idAnimModo');
    }

    public function users() {
        return $this->belongsToMany('User::class', "id", "id");
    }
}
