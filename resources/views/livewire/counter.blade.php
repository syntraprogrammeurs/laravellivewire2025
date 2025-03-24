<div>
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">🔢</span>
            <span class="text-xl font-bold text-white">Counter</span>
        </div>
    </div>

    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8">
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
