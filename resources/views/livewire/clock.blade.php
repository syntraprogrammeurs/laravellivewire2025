<div>
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">⏰</span>
            <span class="text-xl font-bold text-white">Live Clock</span>
        </div>
    </div>

    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8">
        <div class="text-center">
            <div class="text-6xl font-bold text-white mb-4" wire:poll.1000ms>
                {{ $now }}
            </div>
            
            <div class="text-sm text-white/70 font-medium">
                Updates every second
            </div>
        </div>
    </div>
</div>
