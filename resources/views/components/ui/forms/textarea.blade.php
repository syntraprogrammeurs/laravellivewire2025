@props([
    'id' => null,
    'name' => null,
    'rows' => 4,
    'cols'=> 3,
    'error' => null,
 ])
<textarea
    {{ $attributes->merge([
        'id' => $id ?? $name,
        'name' => $name,
        'rows' => $rows,
        'cols'=> $cols,
        'class' => 'w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300 ' . ($error ? 'border-red-500' : 'border-gray-300')
    ]) }}
 ></textarea>
