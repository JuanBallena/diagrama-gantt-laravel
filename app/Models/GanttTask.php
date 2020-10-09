<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanttTask extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'gantt_tasks';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'text',
        'duration',
        'progress',
        'start_date',
        'parent',
        'sortorder'
    ];

    protected $appends = ["open"];
 
    public function getOpenAttribute(){
        return true;
    }
}
