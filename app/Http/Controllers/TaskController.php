<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //GET ALL TASKS
    public function getAll()
    {
        $data = Task::get();
        return response()->json($data);
    }
    /*------------------------------------------*/
    // GET 1 TASK BY ID
    public function get($id)
    {
        $data = Task::find($id);
        return response()->json($data);
    }
    /*------------------------------------------*/
    // DELETE TASK BY ID
    public function delete($id)
    {
        $res = Task::find($id)->delete();
        return response()->json([
            'message' => "Removed!",
            'success' => true,
        ], 200);
    }
    /*------------------------------------------*/
    //CREATE NEW TASK
    public function create(Request $request)
    {
        $data["date_time_from"] = $request["date_time_from"];
        $data["date_time_to"] = $request["date_time_to"];
        $data["city"] = $request["city"];
        $data["location_lat"] = $request["location_lat"];
        $data["location_lng"] = $request["location_lng"];
        $data["total_cost"] = $request["total_cost"];
        $data["task_type"] = $request["task_type"];
        $data["created_by_id"] = $request["created_by_id"];
        $data["assigned_to_id"] = $request["assigned_to_id"];
        $data["status"] = $request["status"];
        Task::create($data);
        return response()->json([
            "message" => "Added!",
            "success" => 200
        ], 200);
    }
    /*------------------------------------------*/
    //UPDATE EXISTING TASK
    public function update(Request $request, $id)
    {
        $data["date_time_from"] = $request["date_time_from"];
        $data["date_time_to"] = $request["date_time_to"];
        $data["city"] = $request["city"];
        $data["location_lat"] = $request["location_lat"];
        $data["location_lng"] = $request["location_lng"];
        $data["total_cost"] = $request["total_cost"];
        $data["task_type"] = $request["task_type"];
        $data["created_by_id"] = $request["created_by_id"];
        $data["assigned_to_id"] = $request["assigned_to_id"];
        $data["status"] = $request["status"];
        Task::find($id)->update($data);
        return response()->json([
            "message" => "Saved!",
            "success" => 200
        ], 200);
    }
    /*------------------------------------------*/
}
