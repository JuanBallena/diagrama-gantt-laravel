<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Link;
use App\Models\GanttTask;
use App\Models\GanttLink;

use Dhtmlx\Connector\GanttConnector;

class GanttController extends Controller
{
    public function index() {
        return view('gantt');
    }

    // public function data() {
    //     $connector = new GanttConnector(null, "PHPLaravel");
    //     $connector->render_links(new GanttLink(), "id", "source,target,type");
    //     $connector->render_table(new GanttTask(), "id", "start_date,duration,text,progress,parent");
    // }

    public function data(){
         
        return response()->json([
            "data" => GanttTask::all(),
            "links" => GanttLink::all()
        ]);
    }

    public function save() {

        GanttTask::create([
            "text" => "Proyecto 2",
            "duration" => 2,
            "progress" => 0.8,
            "start_date" => "2020-04-07 00:00:00",
            "parent" => 1
        ]);
    }
}
