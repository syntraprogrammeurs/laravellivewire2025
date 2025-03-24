<flux:container class="max-w-md mx-auto mt-6">
    <div class="bg-gradient-to-br from-pink-400 to-rose-500 rounded-2xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-6">
            <div class="text-xl font-bold text-white flex items-center gap-2">
                <span class="text-2xl">📝</span>
                Registratieformulier
            </div>
        </div>

        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8">
            @if (session()->has('success'))
                <div class="bg-green-400/20 backdrop-blur-sm text-white p-4 rounded-lg mb-6 text-sm text-center">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Voornaam --}}
            <div class="mb-4">
                <label for="firstName" class="block mb-2 font-medium text-white/90">Voornaam</label>
                <input type="text"
                    id="firstName"
                    wire:model.live="firstName"
                    class="w-full bg-white/10 border-white/20 border rounded-lg px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/30 @error('firstName') border-red-400/50 focus:ring-red-400/30 @enderror"
                    placeholder="Typ je voornaam...">
                @error('firstName')
                    <p class="text-red-200 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Achternaam --}}
            <div class="mb-4">
                <label for="lastName" class="block mb-2 font-medium text-white/90">Achternaam</label>
                <input type="text"
                    id="lastName"
                    wire:model.live="lastName"
                    class="w-full bg-white/10 border-white/20 border rounded-lg px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/30 @error('lastName') border-red-400/50 focus:ring-red-400/30 @enderror"
                    placeholder="Typ je achternaam...">
                @error('lastName')
                    <p class="text-red-200 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- E-mail --}}
            <div class="mb-6">
                <label for="email" class="block mb-2 font-medium text-white/90">E-mailadres</label>
                <input type="email"
                    id="email"
                    wire:model.live="email"
                    class="w-full bg-white/10 border-white/20 border rounded-lg px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/30 @error('email') border-red-400/50 focus:ring-red-400/30 @enderror"
                    placeholder="Typ je e-mailadres...">
                @error('email')
                    <p class="text-red-200 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Actieknoppen --}}
            <div class="flex justify-between items-center">
                <button
                    wire:click="submit"
                    class="px-6 py-3 bg-white/20 hover:bg-white/30 text-white font-semibold rounded-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    Verzenden
                </button>
                <button
                    wire:click="resetForm"
                    type="button"
                    class="text-white/80 hover:text-white transition-colors duration-200">
                    Reset
                </button>
            </div>
        </div>
    </div>
</flux:container>
