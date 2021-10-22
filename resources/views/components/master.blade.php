<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <x-jet-banner />
    <div class="pt-6 md:pt-8 xl:pt-12 bg-gradient-to-r from-indigo-700 to-purple-500">
        <div class="mx-auto container px-6">
            @livewire('master-navigation')
            <div class="xl:flex items-center flex-wrap">
                <div class="xl:w-3/4"></div>
                @livewire('employee-card')
            </div>

        </div>
    </div>

    <div class="px-4 xl:px-0">
        <div class="mx-auto container">
            <div class="xl:flex">
                <div class="xl:w-3/4 -mt-8 xl:-mt-64">
                    @if (isset($header))
                    <div class="pl-4 md:pl-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg shadow">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">{{ $header }}</p>
                        <div></div>
                    </div>
                    @endif
                    <div class="bg-white shadow-lg pb-4 px-2 md:px-2 xl:px-2 h-auto">
                        {{ $slot }}
                    </div>
                </div>
                <div class="xl:w-1/4 pt-7 xl:pl-8 pb-7">

                    @livewire('employee-vacation')

                    @livewire('employee-assets')
                </div>
            </div>
        </div>
    </div>

</body>
</html>
