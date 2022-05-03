<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membership;

class AddMember extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $memberName;
    public $studentCard;
    public $memberPosition;
    public $memberDob;
    // public $status;

    public $pages = [
        1 => [
            'heading' => 'Personal Information',
            'subheading' => 'Enter the Member name and date of birth to get started.',
        ],
        2 => [
            'heading' => 'Membership Information',
            'subheading' => 'Add the student card and their position in the club to finish.',
        ],
    ];

    private $validationRules = [
        1 => [
            'memberName' => ['required', 'string', 'min:3'],
            'memberDob' => ['required', 'string', 'min:3'],
        ],

        2 => [
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

        Membership::create([
            'member_name' => $this->memberName,
            'member_position' => $this->memberPosition,
            'member_teams' => $this->memberTeams,
            'member_dob' => $this->memberDob,
        ]);

        $this->reset();
        $this->resetValidation();

        $this->success = 'Member created successfully!';
    }
    public function render()
    {
        return view('livewire.add-member');
    }
}
