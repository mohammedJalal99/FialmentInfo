<?php

namespace MohammedHamad\FilamentInfo;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Illuminate\Support\Facades\Blade;

class FilamentInfoPlugIn implements Plugin
{

    use EvaluatesClosures;
    protected static string
        $websiteUrl = 'https://awa-tech.co/',
        $icon = 'heroicon-o-information-circle',
        $modalHeading="AwaTech Company",
        $brandLogo = '',
        $darkBrandLogo = '',
        $modalDescription="Awa Tech Company is a pioneering provider of technology solutions catering to businesses of varying scales. Renowned for our innovative and cost-effective offerings, we have established a distinguished track record of empowering clients to attain their business objectives efficiently. Our dedicated team of seasoned IT professionals remains committed to forefronting technology trends, ensuring that our solutions remain cutting-edge. Leveraging the latest tools and techniques, we deliver solutions that are not only reliable and secure but also user-friendly.";
    protected static array $phoneNumbers = [
        '+964 (0) 750 129 64 29'
    ],
    $emailAddresses = [
        'info@awa-tech.co',
        'sales@awa-tech.co',
        'info@awa-soft.co'
    ],
    $addresses = [
        'Muzaffarya Street, Haji Shahab building, No:6, Erbil, Iraq'
    ];
    public function getId(): string
    {
        return 'awatech-info';
    }
    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }

    public static function make(): static
    {
        return app(static::class);
    }


    public function register(Panel $panel): void
    {
        $panel
            ->renderHook(
                name: 'panels::user-menu.before',
                hook: fn (): string => Blade::render('@livewire(\'filament-info\')')
            );
    }
    public function boot(Panel $panel): void
    {
        \Livewire::component('filament-info', Components\FilamentInfo::class);
    }


    public  function icon(string $icon):static{
        static::$icon = $icon;
        return $this;
    }
    public static function getIcon():string{
        return static::$icon;
    }




    public function brandLogo(string $brandLogoUrl):static
    {
        static::$brandLogo = $brandLogoUrl;
        return $this;
    }
    public static function getBrandLogo():string{
        return static::$brandLogo;
    }

    public  function websiteUrl(string $websiteUrl):static{
        static::$websiteUrl = $websiteUrl;
        return $this;
    }
    public static function getWebsiteUrl():string{
        return static::$websiteUrl;
    }

    public  function modalHeading(string $modalHeading):static{
        static::$modalHeading = $modalHeading;
        return $this;
    }
    public static function getModalHeading():string{
        return static::$modalHeading;
    }

    public  function modalDescription(string $modalDescription):static{
        static::$modalDescription = $modalDescription;
        return $this;
    }
    public static function getModalDescription():string{
        return static::$modalDescription;
    }


    public  function phoneNumbers(array $phoneNumbers):static{
        static::$phoneNumbers = $phoneNumbers;
        return $this;
    }
    public static function getPhoneNumbers():array{
        return static::$phoneNumbers;
    }

    public  function emails(array $emailAddresses):static{
        static::$emailAddresses = $emailAddresses;
        return $this;
    }
    public static function getEmails():array{
        return static::$emailAddresses;
    }
    public  function addresses(array $addresses):static{
        static::$addresses = $addresses;
        return $this;
    }
    public static function getAddresses():array{
        return static::$addresses;
    }


}
