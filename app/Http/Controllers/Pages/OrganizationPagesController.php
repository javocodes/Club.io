<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationPagesController extends Controller
{
    public function createMember()
    {
        return view('advisor.create-member');
    }
}
