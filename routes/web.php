<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AdvisorPagesController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\OrganizationController;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\StudentPagesController;
use App\Http\Controllers\Pages\StudentPagesController;
use App\Http\Controllers\Pages\WelcomeDashboardPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(
    ['middleware' => ['guest']],
    function () {

        Route::get('/events', function () {
            return view('guest.events');
        })->name('guest.events');

        Route::get('/organizations', function () {
            return view('guest.organizations');
        })->name('guest.organizations');
        Route::get('/news', function () {
            return view('guest.news');
        })->name('guest.news');
        Route::get('/forms', function () {
            return view('guest.forms');
        })->name('guest.forms');
    }
);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth', 'role:advisor,organization,admin,student')->name('dashboard');

// Route::group(['middleware' => ['auth'], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//     Route::resource('organization', OrganizationController::class)->middleware(['auth'])->names([
//         'store' => 'orgregister'
//     ]);
// }]);

//User Routes

//Advisor Routes
Route::group(
    ['prefix' => 'advisor', 'middleware' => ['auth', 'role:advisor']],
    function () {
        Route::get('/dashboard/{user}', [AdvisorPagesController::class, 'DisplayDashboard'])->name('advisor.dashboard');
        Route::get('/event-requests/{user}', [AdvisorPagesController::class, 'DisplayEventRequests'])->name('event-requests');
        Route::get('/organization-members/{user}', [AdvisorPagesController::class, 'DisplayOrganizationMembers'])->name('organization-members');
        Route::get('/create-organization/', [AdvisorPagesController::class, 'CreateOrganization'])->name('advisor.create.organization');
    }
);


// Student Routes
Route::group(
    ['middleware' => ['auth', 'role:student']],
    function () {
        Route::get('student/dashboard', [StudentPagesController::class, 'index']);
    }
);

// });

// // Organization Routes
// Route::group(['middleware' => ['auth', 'CheckUserRole']], function () {
// Route::resource('organization', [OrganizationController::class])
// ->names(['store' => 'orgregister']);
// });

require __DIR__ . '/auth.php';
