@props(['isCancel' => false])

@if ($isCancel)
    <a {{ $attributes->merge(['class' => 'text-sm/6 font-semibold text-grey']) }}>{{ $slot }}</a>
@else
    <a {{ $attributes->merge(['class' => 'border border-indigo-500 text-indigo-500 px-4 py-2 rounded hover:bg-indigo-500 hover:text-white transition']) }}>
        {{ $slot }}
    </a>
@endif