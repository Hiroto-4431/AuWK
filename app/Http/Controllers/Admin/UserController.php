<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;
use App\Models\User;

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
        $universities = University::all();
        return view('admin.user.index', ['users' => $users, 'universities' => $universities]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        // $university = University::findOrFail();
        // return view('admin.user.show', ['user' => $user, 'university' => $university]);
        return view('admin.user.show', ['user' => $user]);
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
        User::findOrFail($id)->delete();

        return redirect()
        ->route('admin.user.index')
        ->with(['message' => 'ユーザーを削除しました。', 'status' => 'alert']);
    }

    public function expiredUserIndex()
    {
        $expiredUsers = User::onlyTrashed()->get();
        $universities = University::all();

        return view('admin.expired-user.index', ['expiredUsers' => $expiredUsers, 'universities' => $universities]);
    }

    public function expiredUserDestroy($id)
    {
        User::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('admin.expired-user.index');
    }
}
