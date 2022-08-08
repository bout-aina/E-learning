<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
class UserController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        
        $request->validate( [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'faculte' => 'required',
            'year' => 'required|min:4',
            'type' => 'required|min:6',
        ]);

     
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'faculte' => $request->faculte,
            'year' => $request->year,
            'type' => $request->type,
        ]);

        
        $token = $user->createToken('MySecret')->accessToken;
 
        return response()->json(['token' => $token], 200);
        
    }
     /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('MySecret')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
       
    }
    ////////////////////
    public function user()
    {
        
        //return auth()->user(); 
         return new UserResource(auth()->user());
    }
    //////////////////////
    public function edit1(Request $request, $id)
    {     
        
        $user = auth()->user(
      )->find($id);
 
        if (!$user) {
            return response()->json('sorry', 400);
        }
         
        $request->validate( [
            'name' => 'required|min:3',
            
           
        ]);

        $updated = $user->fill($request->all())->save();
 
        if ($updated)
            return response()->json('done'
            //     [
            //     'success' => true
            // ]
        );
        else
            return response()->json('sorry'
            //     [
            //     'success' => false,
            //     'message' => 'Product could not be updated'
            // ]
            , 500);
    }
    public function edit2(Request $request, $id)
    {     
        
        $user = auth()->user(
      )->find($id);
 
        if (!$user) {
            return response()->json('sorry', 400);
        }
         
        $request->validate( [
            'email' => 'required|email|unique:users',
            
           
        ]);

        $updated = $user->fill($request->all())->save();
 
        if ($updated)
            return response()->json('done'
            //     [
            //     'success' => true
            // ]
        );
        else
            return response()->json('sorry'
            //     [
            //     'success' => false,
            //     'message' => 'Product could not be updated'
            // ]
            , 500);
    }

   
    
    
}
