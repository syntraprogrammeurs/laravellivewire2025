<div>
    <!-- Title -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">🔍</span>
            <h2 class="text-xl font-semibold text-white">Live Search</h2>
        </div>
    </div>

    <!-- Card -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
        <div class="space-y-4">
            <input type="text" 
                wire:model.live="searchTerm" 
                placeholder="Start typing to search..." 
                class="w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50">

            @if($results && count($results) > 0)
                <div class="text-sm text-white/70">
                    Found {{ count($results) }} results
                </div>
                <div class="space-y-2">
                    @foreach($results as $result)
                        <div class="p-3 bg-white/5 rounded-lg">
                            <div class="font-medium text-white">{{ $result }}</div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div> 