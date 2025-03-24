<div>
    <!-- Title -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">🔢</span>
            <h2 class="text-xl font-semibold text-white">Event Counter</h2>
        </div>
    </div>

    <!-- Card -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
        <div class="text-center">
            <div class="text-6xl font-bold text-white mb-8">
                {{ $count }}
            </div>

            <div class="flex justify-center gap-4">
                <button wire:click="increment" class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    Increment
                </button>
                
                <button wire:click="decrement" class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    Decrement
                </button>
            </div>
        </div>
    </div>
</div> 