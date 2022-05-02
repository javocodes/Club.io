<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvisorPagesController extends Controller
{
    public function displayDashboard()
    {
        return view('advisor.dashboard');
    }
    public function displayEventRequests()
    {
        return view('advisor.dashboard');
    }
    public function displayOrganizationMembers()
    {
        return view('advisor.dashboard');
    }
    public function createOrganization()
    {
        return view('advisor.create-organization');
    }
}
