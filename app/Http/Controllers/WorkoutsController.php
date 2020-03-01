<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Workout;

class WorkoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
        $user = User::find($userId);
        return $user->workouts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'name' => 'required|string',
            'sets' => 'required|integer',
            'reps' => 'required|integer',
            'weight' => 'required|integer',
            'done' => 'required|boolean'
        ]);

        $workout = Workout::create($data);
        return response($workout, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $workoutId)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'name' => 'required|string',
            'sets' => 'required|integer',
            'reps' => 'required|integer',
            'weight' => 'required|integer',
            'done' => 'required|boolean'
        ]);

        $workout = Workout::find($workoutId);
        $workout->update($data);

        return response($workout, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $workoutId)
    {
        $workout = Workout::find($workoutId);
        $workout->delete();
        return $workout;
    }
}
