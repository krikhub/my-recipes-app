@props ([

    'as' => 'h1',
    'style' => 'lg',
    'source' => null

])


@php
    $styles = [
        'xl' => 'text-4xl font-medium lg:leading-[140%] leading-[130%] lg:tracking-[-0.27px] lg:tracking-[-0.36px]', // 36px
        'lg' => 'text-xl lg:text-[27px] font-normal leading-[140%] tracking-[-0.2px] lg:tracking-[-0.27px]', // 27px
        'md' => 'text-xl lg:text-[27px] font-medium lg:leading-[140%] tracking-[-0.2px] lg:tracking-[-0.27px]', // 27px
        'sm' => 'text-xl lg:text-[27px] font-bold leading-[140%] tracking-[-0.2px] lg:tracking-[-0.27px]', // 27px
        'bullet' => 'text-xl lg:text-[27px] font-normal leading-[140%] lg:leading-[130%] tracking-[-0.2px] lg:tracking-[-0.27px]' // 27px
    ];
@endphp


<{{ $as }} 
    {{ $attributes->merge(['href' => $source, 'class' => 'font-lato ' . ($styles[$style] ?? '')]) }}>
    {{ $slot }}
</{{ $as }}>

