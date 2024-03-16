<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $userList = ['bobo', 'mgmg', 'susu', 'popo'];
        // $userlist = [
        //     ["name" => "myamya", "age" => 34, "gender" => "female"],
        //     ["name" => "susu", "age" => 24, "gender" => "female"],
        //     ["name" => "aungaung", "age" => 37, "gender" => "male"]
        // ];
        $userlists = User::all();
        // return $userlists;
        return view("users.index", ['users' => $userlists]);
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
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        // return $user;
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // return   $request;
        $request->validate([
            'name' => 'required | max:55',
            'email' => 'required | max:55 ',

        ]);
        $res = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password
        ]);
        dd($res);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
