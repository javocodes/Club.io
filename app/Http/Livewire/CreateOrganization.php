<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membership;
use App\Models\Organization;

class CreateOrganization extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $organizationName;
    public $email;
    public $password;
    public $organizationCategory;
    public $memberName;
    public $studentCard;
    public $memberPosition;
    public $memberDob;
    // public $status;

    public $pages = [
        1 => [
            'heading' => 'Organization Information',
            'subheading' => 'Enter the organization name and the organization category to get started.',
        ],
        2 => [
            'heading' => 'Personal Information',
            'subheading' => 'Add the student name and their date of birth.',
        ],
        3 => [
            'heading' => 'Membership Information',
            'subheading' => 'Add the student card and their position in the club to finish.',
        ],
    ];

    private $validationRules = [
        1 => [
            'organizationName' => ['required', 'string', 'min:3'],
            'organizationCategory' => ['required', 'string', 'min:3'],
        ],

        2 => [
            'memberName' => ['required', 'string', 'min:3'],
            'memberDob' => ['required'],
        ],
        3 => [
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

        Organization::create([
            'name' => $this->organizationName,

        ]);

        Membership::create([
            'memberName' => $this->memberName,
            'memberPosition' => $this->memberPosition,
            'memberDob' => $this->memberDob,
            'studentCard' => $this->studentCard,
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
