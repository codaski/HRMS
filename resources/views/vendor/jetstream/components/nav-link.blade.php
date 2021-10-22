@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex ml-1.5 text-yellow-400'
            : 'inline-flex ml-1.5 hover:text-yellow-400';
@endphp

<li>
    <div>
        <div class="flex items-center text-sm text-gray-50 pb-1 mr-6">
            <a {{ $attributes->merge(['class' => $classes]) }}>
                {{ $slot }}
            </a>
        </div>
    </div>
</li>
