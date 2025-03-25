<div {{$attributes->merge(['class'=>'p-6 mt-3 bg-white rounded-xl shadow-lg max-w-xl mx-auto'])}}>
    <h2 class="text-xl font-bold text-gray-800 text-center mb-4">{{$title}}</h2>
{{--    {{$slot}} de inhoud van die tage,dus het livewirecomponent.--}}
    {{$slot}}
</div>
