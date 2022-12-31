<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use App\Models\University;
use App\Models\Gender;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $universities = University::all();
        $departments = Department::all();

        return view('user.auth.register', ['universities' => $universities, 'departments' => $departments,]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // 誕生日[月][日]が一桁だった場合に0をつけて2桁にする
        $request->birthday_month = sprintf("%02d", $request->birthday_month);
        $request->birthday_date = sprintf("%02d", $request->birthday_date);
        // 誕生日のデータの形を YYYY-mm-dd に整形
        $request->birthday = $request->birthday_year . '-' . $request->birthday_month . '-' . $request->birthday_date;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'university' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'birthday_year' => ['required'],
            'birthday_month' => ['required'],
            'birthday_date' => ['required'],
            'gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'university_id' => $request->university,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('users')->login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
