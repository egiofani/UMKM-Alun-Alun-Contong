<?php

namespace App\Livewire\User;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.user.about-us', [
            'title' => 'About Us'
            ])
        ->layout('components.layouts.user.app', [
            'title' => 'About Us'
        ]);
    }
}
