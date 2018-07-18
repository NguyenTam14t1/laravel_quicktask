<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\ValidationRequest;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', ['tasks' => $task]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $validate = trans('lang.messageAddSuccess');
        if (!$task->save()) {
            $validate = trans('lang.messageAddError');
        }

        return redirect('/task')->with('alertError', $validate);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $validate = trans('lang.messageDeleteSuccess');
        if (!$task->delete()) {
        $validate = trans('lang.messageDeleteError');
        }

        return redirect('/task')->with('alertError', $validate);
    }
}
