@props(['color' => 'primary', 'size' => 'md'])

<button type="submit" class="btn btn-{{ $color }} btn-{{ $size }}">
    {{ $slot }}
</button>
