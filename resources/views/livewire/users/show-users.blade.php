<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-4">
            <h2 class="text-2xl font-semibold">Gebruikersoverzicht</h2>
            <label class="inline-flex items-center">
                <input type="checkbox" wire:model.live="showDeleted" class="form-checkbox h-4 w-4 text-blue-600">
                <span class="ml-2 text-sm text-gray-700">Toon verwijderde gebruikers</span>
            </label>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative">
                <input
                    type="text"
                    wire:model.live.debounce.300ms="search"
                    placeholder="Zoek gebruikers..."
                    class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

{{--    @if($showMessage)--}}
{{--        <div--}}
{{--            x-data="{ show: true }"--}}
{{--            x-show="show"--}}
{{--            x-init="setTimeout(() => { show = false; $wire.hideMessage() }, 5000)"--}}
{{--            x-transition:enter="transition ease-out duration-300"--}}
{{--            x-transition:enter-start="opacity-0 transform scale-90"--}}
{{--            x-transition:enter-end="opacity-100 transform scale-100"--}}
{{--            x-transition:leave="transition ease-in duration-300"--}}
{{--            x-transition:leave-start="opacity-100 transform scale-100"--}}
{{--            x-transition:leave-end="opacity-0 transform scale-90"--}}
{{--            class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded relative"--}}
{{--        >--}}
{{--            <div class="flex items-center justify-between">--}}
{{--                <div class="flex items-center">--}}
{{--                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                <button--}}
{{--                    @click="show = false; $wire.hideMessage()"--}}
{{--                    class="text-green-700 hover:text-green-900 focus:outline-none"--}}
{{--                >--}}
{{--                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mailadres</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Geregistreerd op</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acties</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse($users as $user)
                <tr class="{{ $user->trashed() ? 'bg-red-50' : '' }}">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $user->email }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $user->created_at->format('d-m-Y H:i') }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <div class="flex items-center justify-end space-x-3">
                            @if($user->trashed())
                                <button
                                    wire:click="restore({{ $user->id }})"
                                    wire:confirm="Weet je zeker dat je deze gebruiker wilt herstellen?"
                                    class="text-green-600 hover:text-green-900 group relative"
                                    title="Herstellen"
                                >
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 2a1 1 0 011-1h8a1 1 0 011 1v2h3a1 1 0 011 1v2a1 1 0 01-1 1h-1v6a1 1 0 01-1 1H6a1 1 0 01-1-1v-6H4a1 1 0 01-1-1V5a1 1 0 011-1h3V2zm2 5a1 1 0 100 2h8a1 1 0 100-2H7z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="absolute -top-8 left-1/2 transform -translate-x-1/2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">
                                            Herstellen
                                        </span>
                                </button>
                                <button
                                    wire:click="forceDelete({{ $user->id }})"
                                    wire:confirm="Weet je zeker dat je deze gebruiker permanent wilt verwijderen? Deze actie kan niet ongedaan worden gemaakt."
                                    class="text-red-600 hover:text-red-900 group relative"
                                    title="Permanent verwijderen"
                                >
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="absolute -top-8 left-1/2 transform -translate-x-1/2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">
                                            Permanent verwijderen
                                        </span>
                                </button>
                            @else
                                <button
                                    wire:click="delete({{ $user->id }})"
                                    wire:confirm="Weet je zeker dat je deze gebruiker wilt verwijderen?"
                                    class="text-red-600 hover:text-red-900 group relative"
                                    title="Verwijderen"
                                >
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="absolute -top-8 left-1/2 transform -translate-x-1/2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">
                                            Verwijderen
                                        </span>
                                </button>
                            @endif
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                        Geen gebruikers gevonden.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
