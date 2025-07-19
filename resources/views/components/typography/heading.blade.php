@props([
    
    'as' => 'h2',
    'style' => 'lg'

])

@php 
    $styles = [
        'xl' => 'text-5xl lg:text-[120px] font-black leading-[110%]', // 120px
        'lg' => 'text-4xl lg:text-[63px] font-black leading-[120%] ', // 63px
        'md' => 'text-4xl lg:text-[63px] font-bold leading-[110%] lg:leading-[120%] text-berufen-dark-green', // 63px
        'sm' => 'text-3xl lg:text-5xl font-black leading-[120%] tracking-[-0.32px] lg:tracking-[0px]', // 48px
        'xs' => 'text-[27px] lg:text-4xl font-bold leading-[120%] tracking-[-0.27px] lg:tracking-[-0.36px]' // 36px
    ];
@endphp


<{{ $as }}
        {{ $attributes->merge(['class' => 'font-cinzel '. $styles[$style]])}}
>

 {{$slot}}
</{{ $as }}