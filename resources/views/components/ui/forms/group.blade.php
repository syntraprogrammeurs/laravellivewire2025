@props([
    'label' => null,
    'id' => null,
    'for' => null,
    'error' => null,
 ])
<div class="mb-4">
    @if($label)
        <x-ui.forms.label :for="$for">{{ $label }}</x-ui.forms.label>
    @endif

    <p>{{ $slot }}</p>

    @if($error)
        <x-ui.error :error="$error" />
    @endif
</div>
