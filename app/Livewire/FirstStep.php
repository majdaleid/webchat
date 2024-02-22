<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\WebchatSetting;
use Illuminate\Support\Facades\Auth;


class FirstStep extends Component
{

    public $goal;
    public $collect = [
        'phone_number' => false,
        'name' => false,
        'email' => false,
    ];

    protected $rules = [
        'goal' => 'required|string|max:255',
        'collect.phone_number' => 'boolean',
        'collect.name' => 'boolean',
        'collect.email' => 'boolean',
    ];

    public function submit()
    {
        $this->validate();

        // Check if the user already has a WebchatSetting
        $webchatSetting = Auth::user()->webchatSetting()->first();

        if ($webchatSetting) {
            // Update the existing WebchatSetting
            $webchatSetting->update([
                'goal' => $this->goal,
                'data_collect' => json_encode(array_filter($this->collect, function ($value) {
                    return $value;
                })),
            ]);
        } else {
            // Create a new WebchatSetting if one doesn't exist
            $webchatSetting = new WebchatSetting([
                'goal' => $this->goal,
                'data_collect' => json_encode(array_filter($this->collect, function ($value) {
                    return $value;
                })),
            ]);
            Auth::user()->webchatSetting()->save($webchatSetting);
        }

        return $this->redirect(route('secondstep'), navigate: true);
    }

    public function render()
    {
        return view('livewire.first-step')->layout('layouts.app');
    }
    /*public function submit()
    {
        $this->validate();

        $webchatSetting = new WebchatSetting([
            'goal' => $this->goal,
            'data_collect' => json_encode(array_filter($this->collect, function ($value) {
                return $value;
            })),
        ]);
        Auth::user()->webchatSetting()->save($webchatSetting);

        return $this->redirect(route('secondstep'), navigate: true);
    }

    public function render()
    {
        return view('livewire.first-step')->layout('layouts.app');
    }*/
}
