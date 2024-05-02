<?php

namespace MohammedHamad\FilamentInfo\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use MohammedHamad\FilamentInfo\FilamentInfoPlugIn;


class FilamentInfo extends Component
{



    public  string
        $websiteUrl,
        $icon,
        $brandLogo,
        $modalHeading,
        $modalDescription;
    public array $phoneNumbers,
        $emailAddresses,
        $addresses;
    public function mount()
    {
        $this->icon = FilamentInfoPlugIn::getIcon();
        $this->websiteUrl = FilamentInfoPlugIn::getWebsiteUrl();
        $this->modalHeading = FilamentInfoPlugIn::getModalHeading();
        $this->modalDescription = FilamentInfoPlugIn::getModalDescription();
        $this->phoneNumbers = FilamentInfoPlugIn::getPhoneNumbers();
        $this->emailAddresses = FilamentInfoPlugIn::getEmails();
        $this->addresses = FilamentInfoPlugIn::getAddresses();
        $this->brandLogo = FilamentInfoPlugIn::getBrandLogo();
    }


    public function render():View{
        return view('filament-info::components.filament-info');
    }
}
