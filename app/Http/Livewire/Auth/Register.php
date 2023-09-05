<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Register extends Component
{

    public $email = '';
    public $password = '';
    public $firstName = '';
    public $lastName = '';
    public $phone = '';
    public $country = '';
    public $profile = '';
    public $passwordConfirmation = '';

    public function mount()
    {
        if (auth()->user()) {
            return redirect()->intended('/dashboard');
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email:rfc,dns|unique:users']);
    }

    public function register()
    {
        $data = $this->validate([
            'email' => 'required',
            'firstName' => 'required',
            'phone' => 'required',
            'profile' => 'required',
            'password' => 'required|same:passwordConfirmation|min:6',
        ]);

        $user = User::create([
            'nome' => $this->firstName,
            'email' =>$this->email,
            'password' => Hash::make($this->password),
            'remember_token' => Str::random(10),
            'phone' => $this->phone,
            'profile' => $this->profile
        ]);

        auth()->login($user);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
