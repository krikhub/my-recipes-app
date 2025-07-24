@php use Illuminate\Support\Str; @endphp


<x-layouts.base>
    <x-layouts.max-width>
        <x-typography.paragraph style="xl" as="p">
            Test
        </x-typography.paragraph>

        <h2>Rezepte:</h2>

        <ul>
            @foreach($recipes as $recipe)
                <li>
                    <strong>{{ $recipe->title }}</strong><br>
                    {{ $recipe->description }}<br>
                    <em>{{ Str::limit($recipe->instructions, 100) }}</em>
                </li>
            @endforeach
        </ul>
    </x-layouts.max-width>
</x-layouts.base>
