<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\WebchatSetting;
use Illuminate\Support\Facades\Auth;

class ThirdStep extends Component
{
    public $webchatSettingId;
    public $messageHeadline;
    public $disclaimerNotice;
    public $disclaimerDescription;
    public $welcomeMessage;


    protected $rules = [
        'messageHeadline' => 'required|string|max:255',
        'disclaimerNotice' => 'required|string|max:255',
        'disclaimerDescription' => 'required|string',
        'welcomeMessage' => 'required|string',
    ];
    public function submit()
    {
        $this->validate();

        $webchatSetting = Auth::user()->webchatSetting;

        if ($webchatSetting) {
            $webchatSetting->update([
                'message_headline' => $this->messageHeadline,
                'disclaimer_notice' => $this->disclaimerNotice,
                'disclaimer_description' => $this->disclaimerDescription,
                'welcome_message' => $this->welcomeMessage,
            ]);
        }
        return $this->redirect(route('confirmation'), navigate: true);
    }


    public function render()
    {
        return view('livewire.third-step')->layout('layouts.app');
    }
}
