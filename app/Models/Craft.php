<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Craft extends Model
{
    use HasFactory;
    use Uuids;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'objective_id',
        'type',
        'link',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function objective() {
        return $this->belongsTo('App\Models\Objective');
    }
}
