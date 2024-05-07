<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class UpdateUser extends ModalComponent{
    public $user;
    public $roles;
    
    public function mount(User $user)
    {
        $this->user = $user;
        $this->roles = Role::all();
    }
    
    public function render()
    {
        return view('livewire.update-user');
    }
    
    public function update()
    {
        $this->validate([
            'user.name' => 'required',
            'user.email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user->id)],
            'user.role_id' => 'required|exists:roles,id',
        ]);
        
        $this->user->save();
        
        session()->flash('message', 'User updated successfully.');
        
        $this->emit('userUpdated');
    }
    
    
}