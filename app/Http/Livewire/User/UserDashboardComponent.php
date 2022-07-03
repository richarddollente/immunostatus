<?php

namespace App\Http\Livewire\User;
use Illuminate\Support\Facades\Auth;
use App\Models\UserVaccineHospital;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public $user_id;

    public function render()
    {
        $vaccines = UserVaccineHospital::where('user_id', Auth::user()->id)->orderBy('updated_at','desc')->get();
        return view('livewire.user.user-dashboard-component',['vaccines' => $vaccines])->layout('layouts.base');
    }
}
