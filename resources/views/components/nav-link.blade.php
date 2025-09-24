@props(['active' => false])
@php
$current = ' bg-white/20 border-b-3 border-blue-900';
$default = ' text-blue-800 hover:bg-white/10 hover:text-blue-900';

@endphp
<a class=" rounded-md px-3 py-2 text-sm font-medium{{ $active ? $current : $default }}" {{ $attributes }}>
    {{ $slot }}
</a>