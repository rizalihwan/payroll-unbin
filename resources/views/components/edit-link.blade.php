@props(['active'])

<a {{ $attributes->merge(['class' => 'text-green-600 font-semibold mr-5']) }}>
    {{ $slot }}
</a>
