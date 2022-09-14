<?php

namespace App\Http\Controllers;

use App\Models\CodeInvite;
use App\Models\User;

use Illuminate\Http\Request;

class CodeInviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes_invites = CodeInvite::all();

       return response()->json($codes_invites, 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {
            $code_invite = $request->code_invite;
            $count_code = CodeInvite::where('code_invite', '=', $code_invite)->count();
            $driver = User::where('code_user', '=', $code_invite)->get('driver');
           // dd($driver);
            // dd($count_code);
            $code = new CodeInvite;
            $code->user_id = '1';

          if($count_code <= 6){
            $code->code_invite = $code_invite;
            $code->sale_invite = '1';
            if($count_code == 5){
                 if($driver == false ){
                    $code->sale_user = true;
                //  }elseif($driver == '1' ){
                //     $code->sale_driver = true;
                }
            }
          }else{

            return response()->json([

                'message' => 'Invite Invalid.'

            ]);
          }
            
            
            $code->save();

            return response()->json([

                'message' => 'CodeInvite Created.'

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
    public function destroy($id)
    {
        //
    }
}
