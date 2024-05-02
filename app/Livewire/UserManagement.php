<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-management');
    }

    public function createUser($userData)
    {
        User::create($userData);
        $this->users = User::all();
    }

    public function updateUser($userId, $newUserData)
    {
        $user = User::findOrFail($userId);
        $user->update($newUserData);
        $this->users = User::all();
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        $this->users = User::all();
    }
    }
