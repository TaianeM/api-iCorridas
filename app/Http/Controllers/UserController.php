<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::all();
            return response($users);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
           
            $validated = $request->validated();

            User::create($validated)->save();

            return response()->json([

                'message' => 'User Created.'

            ]);

        } catch (\Throwable $th) {

      
            return response()->json([
                'message'=>'Error in create a user!'
            ], 402);
        }
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
        try {
          
        $user = User::findOrFail($id);

        return response()->json($user);

       

        } catch (\Throwable $th) {

        return response()->json([
            'message'=>'Something goes wrong!'
        ], 402);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $users = User::findOrFail($id);

        if(!$users){

            return response('User not find.');

        }

        try {
          
            $users->update($request->all());

            return response()->json([
                'message'=>'User Updated.'
            ]);

        } catch (\Throwable $th) {

            return response()->json([
                'message'=>'Fail updated!'
            ], 402);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

        $user = user::findOrFail($id);


        $user->delete();
        return response()->json([
            'message'=>'User Deleted.'
        ]);

    }   catch (\Throwable $th) {

        return response()->json([
            'message'=>'Fail Delete!'
        ], 402);
    }

    }
}
