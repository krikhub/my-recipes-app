<x-layouts.base>
    <x-layouts.max-width>
        <x-typography.heading style="xs">Rezepte</x-typography.heading>

            <div class="mb-4 flex flex-wrap gap-2">
        @foreach($allCategories as $cat)
            <a href="{{ route('recipes.index', ['category' => $cat]) }}"
            class="px-3 py-1 rounded {{ $category === $cat ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800' }}">
                {{ ucfirst($cat) }}
            </a>
        @endforeach
    </div>

    <p class="text-sm text-gray-400 mb-4">Anzahl: {{ $recipes->count() }}</p>

     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @if($recipes->isEmpty())
                <p>Keine Ergebnisse gefunden.</p>
            @else
                @foreach($recipes as $recipe)
                <a href="{{ route('recipes.show', $recipe->id) }}">
                    <x-utils.recipe-card :recipe="$recipe" />
                </a>
            @endforeach
            @endif
        </div>


    
    </x-layouts.max-width>
</x-layouts.base>
