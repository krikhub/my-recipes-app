<x-layouts.base>
    <x-layouts.max-width>
        <x-typography.heading style="xs">Rezepte</x-typography.heading>

        <p class="text-sm text-gray-400 mb-4">Anzahl: {{ $recipes->count() }}</p>

       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @if($recipes->isEmpty())
                <p>Keine Ergebnisse gefunden.</p>
            @else
                @foreach($recipes as $recipe)
                    <x-utils.recipe-card :recipe="$recipe" />
                @endforeach
            @endif
        </div>
    </x-layouts.max-width>
</x-layouts.base>
