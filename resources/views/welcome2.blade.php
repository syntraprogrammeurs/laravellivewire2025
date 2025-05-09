<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{
        darkMode: localStorage.getItem('darkMode') === 'true',
        toggleDarkMode() {
            this.darkMode = !this.darkMode;
{{--            localStorage.setItem('darkMode', this.darkMode);--}}
        }
    }"
    :class="{ 'dark': darkMode }"
    x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value))"
    xmlns:livewire="http://www.w3.org/1999/html"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Livewire</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body
        class="bg-gradient-to-br from-white via-gray-50 to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen p-8 transition-colors duration-200"
        x-on:dark-mode-changed.window="toggleDarkMode()"
    >
        <div class="max-w-[1920px] mx-auto">
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 flex items-center gap-3">
                        <span class="text-3xl">👨‍🏫</span>
                        Klassikale Oefeningen
                    </h2>
                    <livewire:theme-switch />
                </div>
                <div class="grid grid-cols-12 gap-8">
                    <!-- Hello World -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl shadow-lg p-8 h-full">
        <livewire:hello-world/>
                        </div>
                    </div>

                    <!-- Counter -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-2xl shadow-lg p-8 h-full">
        <livewire:counter/>
                        </div>
                    </div>

                    <!-- Clock -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gradient-to-br from-violet-400 to-violet-600 rounded-2xl shadow-lg p-8 h-full">
        <livewire:clock/>
                        </div>
                    </div>

                    <!-- Name Form -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gradient-to-br from-pink-400 to-pink-600 rounded-2xl shadow-lg p-8 h-full">
                            <livewire:registration-form/>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-span-12">
                        <div class="bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl shadow-lg p-8">
                            <div class="flex items-center justify-between mb-6">
                                <div class="text-xl font-bold text-white flex items-center gap-2">
                                    <span class="text-2xl">🔍</span>
                                    Zoeken
                                </div>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div><livewire:search-input/></div>
                                <div><livewire:search-results/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Individuele Oefeningen -->
            <div>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 flex items-center gap-3">
                        <span class="text-3xl">👨‍💻</span>
                        Individuele Oefeningen
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-8">
                    <!-- Live Polling Clock -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gray-900/20 dark:bg-gray-900/40 backdrop-blur-lg rounded-2xl shadow-lg p-8 h-full border border-white/20">
                            <livewire:polling-clock/>
                        </div>
                    </div>

                    <!-- Temperature Control -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gray-900/20 dark:bg-gray-900/40 backdrop-blur-lg rounded-2xl shadow-lg p-8 h-full border border-white/20">
                            <livewire:temperature-control/>
                        </div>
                    </div>

                    <!-- Live Search -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gray-900/20 dark:bg-gray-900/40 backdrop-blur-lg rounded-2xl shadow-lg p-8 h-full border border-white/20">
                            <livewire:search-box/>
                        </div>
                    </div>

                    <!-- Registration Form -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                        <div class="bg-gray-900/20 dark:bg-gray-900/40 backdrop-blur-lg rounded-2xl shadow-lg p-8 h-full border border-white/20">
                            <livewire:advanced-registration/>
                        </div>
                    </div>

                    <!-- Event Counter -->
                    <div class="col-span-12">
                        <div class="bg-gray-900/20 dark:bg-gray-900/40 backdrop-blur-lg rounded-2xl shadow-lg p-8 border border-white/20">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div class="bg-gray-900/10 dark:bg-gray-900/20 backdrop-blur-md rounded-xl p-6 border border-white/10">
                                    <livewire:event-counter/>
                                </div>
                                <div class="bg-gray-900/10 dark:bg-gray-900/20 backdrop-blur-md rounded-xl p-6 border border-white/10">
                                    <livewire:reset-control/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
