<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Function_;
use Dirape\Token\Token;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::get([ 'celular',
            'cpf',
            'driver',
            'email',
           // 'geo_state_id',
           'code_user',
            'id',
            'name',
            'premium',
            'score']);
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
            $code = (new Token())->Unique('users', 'code_user', 6);
            $user = new User;

            $user->name = $request->name;
            $user->cpf = $request->cpf;
            $user->celular = $request->celular;
            $user->email = $request->email;
            $user->code_user = $code;
                             
            $user->save();

            return response()->json([

                'message' => 'User Created.'

            ]);

        } catch (\Throwable $th) {

            return $th;
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
