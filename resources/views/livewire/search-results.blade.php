<flux:container class="max-w-md mx-auto mt-6">
    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-6">
            <div class="text-xl font-bold text-white flex items-center gap-2">
                <span class="text-2xl">📄</span>
                Zoekresultaten
            </div>
        </div>

        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
            <div class="text-lg font-medium text-white/90">
                Zoekresultaten voor: 
                <span class="font-mono font-bold text-white">
                    "{{ $query }}"
                </span>
            </div>
        </div>
    </div>
</flux:container>
