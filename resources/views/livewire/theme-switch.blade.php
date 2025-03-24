<div class="flex items-center gap-4">
    <button 
        wire:click="toggleTheme"
        class="flex items-center justify-center w-12 h-6 rounded-full {{ $darkMode ? 'bg-gray-700' : 'bg-gray-200' }} transition-colors duration-200 focus:outline-none"
        role="switch"
        aria-checked="{{ $darkMode }}"
    >
        <div class="relative w-11 h-5">
            <div class="absolute left-0.5 top-0.5 w-5 h-5 rounded-full {{ $darkMode ? 'bg-gray-800 translate-x-6' : 'bg-white translate-x-0' }} transform transition-transform duration-200 shadow-sm flex items-center justify-center">
                <span class="text-xs">{{ $darkMode ? '☀️' : '🌙' }}</span>
            </div>
        </div>
    </button>
</div>
