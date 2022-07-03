<?php

namespace App\Http\Livewire\Admin;


use App\Models\User;
use App\Models\Vaccines;
use App\Models\UserVaccineHospital;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAdministerVaccineComponent extends Component
{
    public $user_id;
    public $vaccine_id;
    public $hospital_id;

    public function store()
    {
        $userVaccineHospital = new UserVaccineHospital();
        $userVaccineHospital->user_id = $this->user_id;
        $userVaccineHospital->vaccine_id = $this->vaccine_id;
        $userVaccineHospital->hospital_id = Auth::user()->id;
        $userVaccineHospital->save();
    }

    public function render()
    {
        $users = User::where('user_type', 'user')->get();
        $vaccines = Vaccines::all();
        return view('livewire.admin.create-administer-vaccine-component', ['vaccines' => $vaccines, 'users' => $users])->layout('layouts.base');
    }
}
