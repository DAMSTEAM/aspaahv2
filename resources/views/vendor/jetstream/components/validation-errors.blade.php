@if ($errors->any())
<div {!! $attributes->merge(['class' => 'text-sm p-2 rounded-top']) !!}>
    <div class="font-weight-bold text-center">{{ __('Ups! Ocurrió un problema.') }}</div>
    @foreach ($errors->all() as $error)
    <div class="d-flex justify-content-center">
        <div class="me-2">{{$slot}}</div> {{ $error }}
    </div>
    @endforeach
</div>
@endif
