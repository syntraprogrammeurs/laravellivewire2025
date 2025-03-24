<div>
    <!-- Title -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 mb-4">
        <div class="flex items-center justify-center gap-2">
            <span class="text-2xl">📝</span>
            <h2 class="text-xl font-semibold text-white">Geavanceerde Registratie</h2>
        </div>
    </div>

    <!-- Card -->
    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
        <form wire:submit="submit" class="space-y-6">
            <!-- Gebruikersnaam -->
            <div>
                <label for="username" class="block text-sm font-medium text-white">
                    Gebruikersnaam
                </label>
                <input type="text" id="username" wire:model.live.debounce.400ms="username"
                    class="mt-1 w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50"
                    placeholder="Kies een gebruikersnaam...">
                @error('username')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-white">
                    E-mailadres
                </label>
                <input type="email" id="email" wire:model.lazy="email"
                    class="mt-1 w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50"
                    placeholder="Vul je e-mailadres in...">
                @error('email')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Wachtwoord -->
            <div>
                <label for="password" class="block text-sm font-medium text-white">
                    Wachtwoord
                </label>
                <input type="password" id="password" wire:model.defer="password"
                    class="mt-1 w-full px-4 py-2 bg-white/10 border-0 rounded-lg text-white placeholder-white/50"
                    placeholder="Kies een wachtwoord...">
                @error('password')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" 
                    class="w-full px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    Registreren
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