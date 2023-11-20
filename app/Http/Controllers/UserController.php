<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $user = User::where("email",$request->email);
            if($user->count() == 0)
            {
                $new_user = User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone_no'=>$request->phone,
                    'whatsApp_alert'=>$request->whatsApp,
                    'password'=>Hash::make($request->email)
                ]);
                Session::put("user_name",$new_user->name);
                Session::put("user_id",$new_user->id);
                return response()->json(["user" => $user, "message" => "User created successfully.", "success" => true], 200);
            } else {
                $user_id = $user->get()[0]->id;
                $existing_user = User::find($user_id)->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone_no'=>$request->phone,
                    'whatsApp_alert'=>$request->whatsApp,
                    'password'=>Hash::make($request->email)
                ]);
                Session::put("user_name",$user->get()[0]->name);
                Session::put("user_id",$user->get()[0]->id);
                return response()->json(["user" => $user, "message" => "User updated successfully.", "success" => true], 200);
            }
        } catch(Exception $e){
            return response()->json(['message' => $e->getMessage(), "success" => false], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
