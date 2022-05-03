<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Models\Advisor;
use App\Models\Organization;
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
    public function createStudent()
    {
        return view('auth.student-register');
    }
    public function createAdvisor()
    {
        return view('auth.advisor-register');
    }
    public function createOrganization()
    {
        return view('advisor.create-organization');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeStudent(Request $request)
    {
        $request->validate([
            'student_card' => ['required', 'string', 'min:20', 'max:22'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required'],
            'dob' => ['required', 'date'],
            'address' => ['required', 'string'],
            'phone_no' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '3'
        ]);
        $student = Student::create([
            'student_card' => $request->student_card,
            'user_id' => $user->id,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone_no' => $request->phone_no
        ]);

        event(new Registered($student));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function storeAdvisor(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required'],
            'dob' => ['required', 'date'],
            'address' => ['required', 'string'],
            'phone_no' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '2'
        ]);

        $advisor = Advisor::create([
            'advisor_card' => $request->advisor_card,
            'user_id' => $user->id,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone_no' => $request->phone_no
        ]);

        event(new Registered($advisor));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function storeOrganization(Request $request)
    {
        $request->validate([
            'student_card' => ['required', 'string', 'min:20', 'max:22'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required'],
            'dob' => ['required', 'date'],
            'address' => ['required', 'string'],
            'phone_no' => ['required'],
        ]);

        $organization = Organization::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($organization));
        return redirect(RouteServiceProvider::HOME);
    }
}
