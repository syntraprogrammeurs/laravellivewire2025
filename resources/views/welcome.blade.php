<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 space-y-6 py-8">

{{-- Hello World Component --}}
<x-ui.card title="Hello World">
    <livewire:hello-world />
</x-ui.card>

{{-- Counter Component --}}
<x-ui.card title="Counter">
    <livewire:counter />
</x-ui.card>

{{-- Clock Component --}}
<x-ui.card title="Klok">
    <livewire:clock />
</x-ui.card>

{{-- Naamformulier --}}
<x-ui.card title="Naamformulier">
    <livewire:name-form />
</x-ui.card>

{{-- Events: Parent Component --}}
<x-ui.card title="Event: Kind stuurt bericht naar Ouder">
    <livewire:parent-component />
</x-ui.card>

{{-- Events: Zoekcomponenten --}}
<x-ui.card title="Event: Zoekfunctie met live query update">
    <livewire:search-input />
    <livewire:search-results />
</x-ui.card>

{{-- Voorbeeld Buttons --}}
<x-ui.button wire:click="opslaan">Opslaan</x-ui.button>
<x-ui.button wire:click="annuleren" variant="success">Annuleren</x-ui.button>

{{-- input field --}}
<x-ui.forms.input type="text" name="name" wire:model="name" />
<x-ui.forms.textarea id="5" name="mytextarea"></x-ui.forms.textarea>
<x-ui.forms.select>
    <option value="1">Option 1</option>
</x-ui.forms.select>
<x-ui.forms.label for="name">Name</x-ui.forms.label>

</body>
</html>
