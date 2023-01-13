<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\University;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $universities = University::all();

        return view('user.profile.edit', [
            'user' => $request->user(),
            'universities' => $universities,
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        // $request->validate([
        //     'name' => ['required', 'string', 'max:50'],
        //     'display_name' => [ 'required', 'string', 'max:50'],
        //     'university' => ['required'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        // ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // $user = User::findOrFail($id);
        // $user->name = $request->name;
        // $user->display_name = $request->display_name;
        // $user->university_id = $request->university;
        // $user->email = $request->email;

        // $user->save();

        $request->user()->save();

        return Redirect::route('user.profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
