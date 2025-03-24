<div>
    <!-- Title -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">🌡️</span>
            <h2 class="text-xl font-semibold text-white">Temperature Control</h2>
        </div>
    </div>

    <!-- Card -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
        <div class="text-center">
            <div class="flex items-center justify-center gap-4">
                <button wire:click="decrement" 
                        @if($temperature <= $minTemp) disabled @endif
                        class="text-2xl font-bold text-white w-12 h-12 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-xl disabled:opacity-50 disabled:cursor-not-allowed">
                    -
                </button>
                
                <div class="text-6xl font-bold text-white">
                    {{ $temperature }}°C
                </div>
                
                <button wire:click="increment"
                        @if($temperature >= $maxTemp) disabled @endif
                        class="text-2xl font-bold text-white w-12 h-12 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-xl disabled:opacity-50 disabled:cursor-not-allowed">
                    +
                </button>
            </div>

            <div class="mt-4 text-sm text-white/70">
                Temperature range: {{ $minTemp }}°C - {{ $maxTemp }}°C
            </div>
        </div>
    </div>
</div> 