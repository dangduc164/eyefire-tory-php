    <x-header-default></x-header-default>

    @if (isset($layoutContent))
        {{ $layoutContent }}
    @endif

    <x-footer-default></x-footer-default>


    @if (isset($attributes['back-top']))
    @endif
