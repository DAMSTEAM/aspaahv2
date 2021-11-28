<div>
    <li class="{{$clases}}">
        <a {{ $attributes->merge(['class'])}}>
            {{ $slot }}
        </a>
    </li>
</div>
