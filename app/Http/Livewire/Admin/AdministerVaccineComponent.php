<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\UserVaccineHospital;
use Livewire\Component;

class AdministerVaccineComponent extends Component
{
    public function render()
    {
        $vaccines = UserVaccineHospital::where('hospital_id', Auth::user()->id)->orderBy('updated_at','desc')->get();
        return view('livewire.admin.administer-vaccine-component',['vaccines' => $vaccines])->layout('layouts.base');
    }
}
