<div>

    @if($brandLogo != '')
        <x-filament::modal alignment="center"  slide-over>
            <x-slot name="trigger">
                <button
                    @class([
                        'flex rounded-full flex-shrink-0 w-8 h-8 bg-gray-100 items-center justify-center text-primary-500 hover:text-primary-900 dark:bg-gray-800 hover:bg-primary-500 dark:hover:bg-primary-500',
                    ])

                >
                    <x-filament::icon
                        icon="{{$icon}}"
                        class="w-6 h-6"
                    />
                </button>
            </x-slot>
            <x-slot name="heading">

            </x-slot>
            <x-slot name="description">
                <div class="font-bold text-lg">
                    <img src="{{$brandLogo}}" style="width: 40%" class=" mx-auto mt-4" />
                    {!! $modalHeading !!}
                </div>
                <div class="text-justify text-sm p-4">
                    {{$modalDescription}}
                </div>
                <div class="p-4 text-xs text-start">
                    @if($websiteUrl != '' || $websiteUrl != null)
                       <a href="{{$websiteUrl}}" target="_blank" class="flex mb-2 items-center align-middle gap-4">
                           <x-filament::icon
                               icon="fas-earth-asia"
                               class="w-4 h-4"
                           />
                           {{$websiteUrl}}
                       </a>
                    @endif
                    @if($addresses!=[] || $emailAddresses != [] || $phoneNumbers !=[])

                        @foreach($addresses as $address)
                            <div class="flex mb-2 items-center align-middle gap-4">
                                @if($loop->iteration == 1)
                                    <x-filament::icon
                                        icon="fas-location-dot"
                                        class="w-4 h-4"
                                    />
                                @else
                                    <div class="w-4"></div>
                                @endif
                                {{$address}}
                            </div>
                        @endforeach
                        @foreach($phoneNumbers as $phone)
                            <a href="tel:{{$phone}}" class="flex mb-2 items-center align-middle gap-4">
                                @if($loop->iteration == 1)
                                    <x-filament::icon
                                        icon="fas-phone-volume"
                                        class="w-4 h-4 color-primary"
                                    />
                                @else
                                    <div class="w-4"></div>
                                @endif

                                {{$phone}}
                            </a>
                        @endforeach
                        @foreach($emailAddresses as $email)
                            <a href="mailto:{{$email}}" class="flex mb-2 items-center align-middle gap-4">
                                @if($loop->iteration == 1)
                                    <x-filament::icon
                                        icon="fas-at"
                                        class="w-4 h-4 color-primary"
                                    />
                                @else
                                    <div class="w-4"></div>
                                @endif

                                {{$email}}
                            </a>
                        @endforeach
                    @endif
                </div>

            </x-slot>

        </x-filament::modal>
    @else
        <x-filament::modal alignment="center" :icon="$icon" slide-over>
            <x-slot name="trigger">
                <button
                    @class([
                        'flex rounded-full flex-shrink-0 w-8 h-8 bg-gray-100 items-center justify-center text-primary-500 hover:text-primary-900 dark:bg-gray-800 hover:bg-primary-500 dark:hover:bg-primary-500',
                    ])

                >
                    <x-filament::icon
                        icon="{{$icon}}"
                        class="w-6 h-6"
                    />
                </button>
            </x-slot>
            <x-slot name="heading">
                {!! $modalHeading !!}
            </x-slot>
            <x-slot name="description">

                <div class="text-justify text-sm p-4">
                    {{$modalDescription}}
                </div>
                <div class="p-4 text-xs text-start">
                    @if($websiteUrl != '' || $websiteUrl != null)
                        <a href="{{$websiteUrl}}" target="_blank" class="flex mb-2 items-center align-middle gap-4">
                            <x-filament::icon
                                icon="fas-earth-asia"
                                class="w-4 h-4"
                            />
                            {{$websiteUrl}}
                        </a>
                    @endif
                    @if($addresses!=[] || $emailAddresses != [] || $phoneNumbers !=[])

                        @foreach($addresses as $address)
                            <div class="flex mb-2 items-center align-middle gap-4">
                                @if($loop->iteration == 1)
                                    <x-filament::icon
                                        icon="fas-location-dot"
                                        class="w-4 h-4"
                                    />
                                @else
                                    <div class="w-4"></div>
                                @endif
                                {{$address}}
                            </div>
                        @endforeach
                        @foreach($phoneNumbers as $phone)
                            <a href="tel:{{$phone}}" class="flex mb-2 items-center align-middle gap-4">
                                @if($loop->iteration == 1)
                                    <x-filament::icon
                                        icon="fas-phone-volume"
                                        class="w-4 h-4 color-primary"
                                    />
                                @else
                                    <div class="w-4"></div>
                                @endif

                                {{$phone}}
                            </a>
                        @endforeach
                        @foreach($emailAddresses as $email)
                            <a href="mailto:{{$email}}" class="flex mb-2 items-center align-middle gap-4">
                                @if($loop->iteration == 1)
                                    <x-filament::icon
                                        icon="fas-at"
                                        class="w-4 h-4 color-primary"
                                    />
                                @else
                                    <div class="w-4"></div>
                                @endif

                                {{$email}}
                            </a>
                        @endforeach
                    @endif
                </div>

            </x-slot>

        </x-filament::modal>
    @endif
</div>
