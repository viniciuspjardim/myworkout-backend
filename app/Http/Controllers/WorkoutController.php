<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkoutFormRequest;
use Illuminate\Http\Request;
use App\Workout;
use Illuminate\Http\Response;

class WorkoutController extends Controller
{
    public function index()
    {
       return response(Workout::all(),Response::HTTP_OK);
    }

    public function store(WorkoutFormRequest $request)
    {
        $data = $request->validated();
        $workout = Workout::create($data);
        return response($workout, Response::HTTP_CREATED);
    }

    public function update(WorkoutFormRequest $request, Workout $workout)
    {
        $data = $request->validated();
        $workout->update($data);
        return response($workout,Response::HTTP_CREATED);
    }

    public function destroy(Workout $workout)
    {
        $workout->delete();
        return response($workout, Response::HTTP_OK);
    }
}
