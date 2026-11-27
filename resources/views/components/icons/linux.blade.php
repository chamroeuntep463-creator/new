@props(['class' => 'w-6 h-6'])

<img src="{{ asset('images/icons/linux.svg') }}" alt="Linux" {{ $attributes->merge(['class' => $class]) }} loading="lazy" decoding="async" />
