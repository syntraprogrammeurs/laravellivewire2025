<div>
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">👋</span>
            <span class="text-xl font-bold text-white">Hello World</span>
        </div>
    </div>

    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8">
        <div class="text-center">
            <input type="text" wire:model.live="name" placeholder="What's your name?"
                class="w-full px-4 py-2 rounded-lg bg-white/10 backdrop-blur-sm border-0 text-white placeholder-white/50 mb-4">
            
            <div class="text-2xl font-bold text-white">
                Hello {{ $name ?: 'World' }}!
            </div>
        </div>
    </div>
</div>
