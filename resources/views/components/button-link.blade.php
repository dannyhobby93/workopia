@props(['url' => '/', 'icon' => '', 'class' => 'bg-yellow-500 hover:bg-yellow-600 text-black', 'block' => false])
<a href="{{ url($url) }}"
    class="{{ $class }} {{ $block ? 'block' : '' }} px-4 py-2 rounded hover:shadow-md transition duration-300">
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
