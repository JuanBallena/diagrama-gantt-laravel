<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    {{-- <script src="dhtmlxGantt/codebase/dhtmlxgantt.js"></script>
    <link rel="stylesheet" href="dhtmlxGantt/codebase/dhtmlxgantt.css"> --}}
</head>
<body>
   

    <style type="text/css">
        html, body {
            height:100%;
            padding:0px;
            margin:0px;
            overflow: hidden;
        }
    </style>
    GANTT
    <div id="gantt_here" style='width:100%; height:300px;'></div>

    <script type="text/javascript">

        //gantt.init("gantt_here");
        
        gantt.config.date_format = "%Y-%m-%d %H:%i:%s";
        gantt.config.step = 1;
        gantt.config.scale_unit= "day";
        //gantt.config.autosize = "xy";
        gantt.config.fit_tasks = true;

        // gantt.config.start_date = new Date(2020, 03, 01);
        // gantt.config.end_date = new Date(2020, 03, 11);

        // gantt.config.columns = [
        //     {name:"description", label:"Tarea",  /*width:"*", tree:true*/ },
        //     {name:"start_date",  label:"Fecha incio", /*align: "center"*/ },
        //     {name:"duration",    label:"Duracion",   align: "center" },
        //     {name:"add",         label:"",           /*width:44*/ }
        // ];

        // gantt.templates.task_text=function(start,end,task){
        //     return "<b> TEXT: "+ task.text +' - DURATION: '+ task.duration +"</b>";
        // };
        
        //gantt.init("gantt_here");
        gantt.init("gantt_here", new Date(2020, 03, 01), new Date(2020, 04, 15));
        gantt.load("/data");

        var dp = new gantt.dataProcessor("/api"); //controller in route api
        //var dp = new gantt.dataProcessor("/"); //controller in web
        dp.init(gantt);
        dp.setTransactionMode("REST");

    </script>
    {{-- <div id="gantt_here" style='width:100%; height:250px;'></div>

    
    <script type="text/javascript">
        /* chart configuration and initialization */
        gantt.config.xml_date = "%Y-%m-%d %H:%i:%s";
        //gantt.config.step = 1;
        gantt.config.scale_unit= "day";
        gantt.config.fit_tasks = true;
        gantt.init("gantt_here", new Date(2020,04,24), new Date(2020,04,30));
        /* refers to the 'data' action that we will create in the next substep */
        gantt.load("./data", "xml");
        /* refers to the 'data' action as well */
        var dp = new gantt.dataProcessor("./data");
        dp.init(gantt);

        // gantt.attachEvent("onTaskCreated", function(task) { 
        //     task.projetoid = projetoId; 
        //     return true; 
        // });
    </script> --}}
</body>
</html>