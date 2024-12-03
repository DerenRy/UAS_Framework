@props(['href', 'color' => 'primary', 'size' => 'md'])

<a href="{{ $href }}" class="btn btn-{{ $color }} btn-{{ $size }}">
    {{ $slot }}
</a>