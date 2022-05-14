<?php

use App\Models\Advisor;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Organization;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('guest')->group(function () {
    Route::post('create/student', function () {
        request()->validate([
            'student_card' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => '3'
        ]);
        Student::create([
            'student_card' => request('student_card'),
            'user_id' => $user->id,
            'gender' => request('gender'),
            'dob' => request('dob'),
            'address' => request('address'),
            'phone_no' => request('phone_no')
        ]);

        // event(new Registered($student));

        return Auth::login($user);
    })->name('create.student');

    Route::post('create/advisor', function () {
        request()->validate([
            'advisor_card' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => '2'
        ]);
        Advisor::create([
            'advisor_card' => request('advisor_card'),
            'user_id' => $user->id,
            'gender' => request('gender'),
            'dob' => request('dob'),
            'address' => request('address'),
            'phone_no' => request('phone_no')
        ]);
        return Auth::login($user);
    });
});
// Route::group(
//     ['prefix' => 'advisor', 'middleware' => ['auth', 'role:advisor']],
//     function () {
Route::post('/create/organization', function () {
    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'category' => 'required',
        'description' => 'required',
        'member_position' => 'required',
        'student_card' => 'required'
    ]);
    $newOrg = Organization::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => Hash::make(request('password')),
        'category' => request('category'),
        'description' => request('description')
    ]);

    $student = Student::where('student_card', request('student_card'))->first()->pluck('id');
    $student_id = $student->implode("", $student);

    Membership::create([
        'student_id' => $student_id,
        'organization_id' => $newOrg->id,
        'memberName' => $student->name,
        'memberDob' => $student->dob,
        'studentCard' => $student->student_card,
        'memberPosition' => request('member_position'),
    ]);

    $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => Hash::make(request('password')),
        'role_id' => 4,
    ]);
})->name('advisor.create.organization');
//     }
// );
