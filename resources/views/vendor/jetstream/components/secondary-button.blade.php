<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-dark text-uppercase']) }}>
    {{ $slot }}
</button>
