<?php

namespace App\Http\Livewire;

use App\models\doctor;
use App\Models\requestedappointment;
use Livewire\Component;

class Appointmentform extends Component
{
    public $name;
    public $email;
    public $phone;
    public $doctor;
    public $stime;
    public $address;
    public $message;

    public function store_requested_appointment()
    {
        $this->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'stime' => 'required',
            'phone' => 'required|numeric|max:10000000000000',
            'doctor' => 'required',
            'address' => 'required',
            'message' => 'required|max:550',
            ]);

        requestedappointment::create([
            'name'          => $this->name,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'stime'       => $this->stime,
            'doctor_id'     => $this->doctor,
            'address'       => $this->address,
            'message' => $this->message,
        ]);

           //unset variables
           $this->name="";
           $this->email="";
           $this->stime="";
           $this->phone="";
           $this->doctor="";
           $this->address="";
           $this->message="";

           session()->flash('message', 'Your Appointment Added successfully.');
    }
    public function render()
    {
        $doctors = Doctor::with('employ')->get();
        return view('livewire.appointmentform',compact('doctors'));
    }
}
