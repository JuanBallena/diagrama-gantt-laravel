<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanttLink extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'gantt_links';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'type',
        'source',
        'target'
    ];
}
