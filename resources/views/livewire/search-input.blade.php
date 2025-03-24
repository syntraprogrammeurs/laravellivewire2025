<flux:container class="max-w-md mx-auto mt-6">
    <div class="bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-6">
            <div class="text-xl font-bold text-white flex items-center gap-2">
                <span class="text-2xl">🔍</span>
                Zoeken
            </div>
        </div>

        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
            <div class="relative">
                <input type="text"
                    wire:model.live="query"
                    class="w-full bg-white/10 border-white/20 border rounded-lg pl-12 pr-4 py-3 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/30"
                    placeholder="Typ iets om te zoeken...">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-white/50">
                    🔍
                </div>
            </div>
        </div>
    </div>
</flux:container>
