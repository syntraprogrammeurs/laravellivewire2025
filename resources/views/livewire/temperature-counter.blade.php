<flux:container class="max-w-md mx-auto mt-6">
    <div class="bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-6">
            <div class="text-xl font-bold text-white flex items-center gap-2">
                <span class="text-2xl">🌡️</span>
                Temperature Control
            </div>
        </div>

        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
            <div class="flex items-center justify-center gap-6">
                <button 
                    wire:click="decrement"
                    class="px-4 py-2 text-2xl font-bold rounded-lg bg-white/20 hover:bg-white/30 text-white transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                    @if($temperature <= $minTemp) disabled @endif
                >
                    -
                </button>

                <div class="text-6xl font-mono font-bold text-white tracking-wider">
                    {{ $temperature }}°C
                </div>

                <button 
                    wire:click="increment"
                    class="px-4 py-2 text-2xl font-bold rounded-lg bg-white/20 hover:bg-white/30 text-white transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                    @if($temperature >= $maxTemp) disabled @endif
                >
                    +
                </button>
            </div>
        </div>

        <div class="mt-6 text-center text-sm text-white/80 font-medium">
            Temperature range: {{ $minTemp }}°C - {{ $maxTemp }}°C
        </div>
    </div>
</flux:container> 