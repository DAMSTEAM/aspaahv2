@props(['active'])

@php
$clases = ($active ?? false)
            ? 'sidebar-item active'
            : 'sidebar-item';
@endphp

<li class="{{$clases}}">
    <a {{ $attributes->merge(['class'])}}>
        {{ $slot }}
    </a>
</li>
