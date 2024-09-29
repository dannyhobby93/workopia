@props(['url' => '/', 'icon' => '', 'mobile' => false])

@if ($mobile)
    <a href="{{ url($url) }}"
        class="block px-4 py-2 hover:bg-blue-700 {{ request()->is($url) ? 'text-yellow-500 font-bold' : '' }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }} mr-1"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <a href="{{ url($url) }}"
        class="text-white hover:underline py-2 {{ request()->is($url) ? 'text-yellow-500 font-bold' : '' }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }} mr-1"></i>
        @endif
        {{ $slot }}
    </a>
@endif
