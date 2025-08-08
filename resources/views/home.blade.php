<x-layouts.base>
    <x-layouts.max-width>
        <x-typography.heading style="xs">Rezepte</x-typography.heading>

        <p class="text-sm text-gray-400 mb-4">Anzahl: {{ $recipes->count() }}</p>

       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @if(isset($query))
                <h2>Search Results:</h2>
            @endif
            @foreach($recipes as $recipe)
                <x-utils.recipe-card :recipe="$recipe" />
            @endforeach
        </div>
    </x-layouts.max-width>
</x-layouts.base>
