@props([
    'active' => false,
    'type' => 'a'
    ])

<a 
class=" {{ 
$active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' 
}} rounded-md px-3 py-2 text-sm font-medium {{ $type === 'a'?'text-gray-300 hover:bg-gray-700 hover:text-white' : 'h-9 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-red-700 cursor-pointer' }} "    
aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }} >{{ $slot }}
</a>