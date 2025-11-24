<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.guest')]
#[Title('Forgot Password')]
class ForgotPassword extends Component
{
    #[Rule('required|email')]
    public $email = '';

    public $status = null;

    public function sendPasswordResetLink()
    {
        $this->validate();

        $response = Password::broker()->sendResetLink(['email' => $this->email]);

        if ($response == Password::RESET_LINK_SENT) {
            $this->status = trans($response);
        } else {
            $this->addError('email', trans($response));
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
