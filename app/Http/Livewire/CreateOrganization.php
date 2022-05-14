<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membership;
use App\Models\Organization;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateOrganization extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $organizationName;
    public $orgEmail;
    public $organizationDescription;
    public $orgPassword;
    public $organizationCategory;
    public $memberName;
    public $memberDob;
    public $studentCard;
    public $memberPosition;
    // public $status;

    public $pages = [
        1 => [
            'heading' => 'Organization Information',
            'subheading' => 'Enter the organization name and the organization category to get started.',
        ],
        2 => [
            'heading' => 'Account Information',
            'subheading' => 'Enter the email and password for this organization.',
        ],
        3 => [
            'heading' => 'Personal Information',
            'subheading' => 'Add the student name and their date of birth.',
        ],
        4 => [
            'heading' => 'Membership Information',
            'subheading' => 'Add the student card and their position in the club to finish.',
        ],
    ];

    private $validationRules = [
        1 => [
            'organizationName' => ['required', 'string', 'min:3'],
            'organizationCategory' => ['required', 'string', 'min:3'],
            'organizationDescription' => ['required', 'string', 'min:3'],
        ],

        2 => [
            'orgEmail' => ['required', 'email'],
            'orgPassword' => ['required'],
        ],
        3 => [
            'memberName' => ['required', 'string', 'min:3'],
            'memberDob' => ['required', 'date'],
        ],
        4 => [
            'studentCard' => ['required', 'string', 'min:20', 'max:22'],
            'memberPosition' => ['required', 'string', 'min:3'],
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        $newOrg = Organization::create([
            'name' => $this->organizationName,
            'email' => $this->orgEmail,
            'password' => Hash::make($this->orgPassword),
            'category' => $this->organizationCategory,
            'description' => $this->organizationDescription
        ]);

        $student = Student::where('student_card', $this->studentCard)->first()->pluck('id');
        $student_id = $student->implode("", $student);

        Membership::create([
            'student_id' => $student_id,
            'organization_id' => $newOrg->id,
            'memberName' => $this->memberName,
            'memberDob' => $this->memberDob,
            'studentCard' => $this->studentCard,
            'memberPosition' => $this->memberPosition,
        ]);

        $user = User::create([
            'name' => $this->organizationName,
            'email' => $this->orgEmail,
            'password' => Hash::make($this->orgPassword),
            'role_id' => 4,
        ]);

        $this->reset();
        $this->resetValidation();
        $this->success = 'Organization created successfully!';
    }
    public function render()
    {
        return view('livewire.create-organization');
    }
}
