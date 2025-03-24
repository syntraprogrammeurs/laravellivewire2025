<div>
    <!-- Title -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">📝</span>
            <h2 class="text-xl font-semibold text-white">Registratieformulier</h2>
        </div>
    </div>

    <!-- Card -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
        <form wire:submit="save" class="space-y-6">
            <!-- Voornaam -->
            <div>
                <label class="block text-sm font-medium text-white">
                    Voornaam
                </label>
                <input type="text" wire:model="firstName"
                    class="mt-1 w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50"
                    placeholder="Typ je voornaam...">
                @error('firstName')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Achternaam -->
            <div>
                <label class="block text-sm font-medium text-white">
                    Achternaam
                </label>
                <input type="text" wire:model="lastName"
                    class="mt-1 w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50"
                    placeholder="Typ je achternaam...">
                @error('lastName')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-white">
                    E-mailadres
                </label>
                <input type="email" wire:model="email"
                    class="mt-1 w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50"
                    placeholder="Typ je e-mailadres...">
                @error('email')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit" 
                    class="flex-1 px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    Verzenden
                </button>
                
                <button type="button" wire:click="resetForm"
                    class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    Reset
                </button>
            </div>

            @if(session()->has('success'))
            <div class="p-4 bg-green-500/10 rounded-lg">
                <p class="text-green-400 text-center">{{ session('success') }}</p>
            </div>
            @endif
        </form>
    </div>
</div> 