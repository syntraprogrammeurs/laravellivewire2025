<div class="space-y-4">
    <div class="text-white/80 text-center">
        Huidige waarde: <span class="font-mono font-bold text-white">{{ $lastCount }}</span>
    </div>
    
    <div class="flex justify-center">
        <button
            wire:click="resetCounter"
            class="group relative px-6 py-3 bg-white/20 hover:bg-white/30 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200"
        >
            <span class="relative z-10 flex items-center gap-2">
                <span class="text-lg">🔄</span>
                Reset naar 5
            </span>
            <div class="absolute inset-0 bg-white/10 rounded-lg transition-transform duration-200 group-hover:scale-110"></div>
        </button>
    </div>
</div> 