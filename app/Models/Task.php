<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tasks';

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

    //For gantt
    protected $appends = ["open"];
 
    public function getOpenAttribute(){
        return true;
    }
}
