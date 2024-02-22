<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\WebchatSetting;
use Illuminate\Support\Facades\Auth;

class SecondStep extends Component
{
    public $webchatSettingId;
    public $answersSettings = [];

    public function submit()
    {

        $webchatSetting = Auth::user()->webchatSetting;

        if ($webchatSetting) {
            $webchatSetting->update([
                'answers_settings' => json_encode($this->answersSettings),
            ]);
        } else {
            dd('no webchat setting');
        }
        return $this->redirect(route('thirdstep'), navigate: true);
    }
    public function render()
    {
        return view('livewire.second-step')->layout('layouts.app');
    }
}
