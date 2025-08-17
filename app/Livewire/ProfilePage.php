<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfilePage extends Component
{
    public $name;
    public $email;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name ?? '';
        $this->email = $this->user->email ?? '';
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->user->id,
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', 'Profil berhasil diperbarui!');
    }

    public function render()
    {
        return view('livewire.profile-page')->layout('layouts.app');
    }
}
