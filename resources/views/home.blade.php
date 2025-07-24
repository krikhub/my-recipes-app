<x-layouts.base>
    <x-layouts.max-width>
        <h1 class="text-3xl font-bold mb-6">Rezepte</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($recipes as $recipe)
                <div class="bg-white shadow-lg rounded-2xl p-4">
                    @if($recipe->image && file_exists(public_path($recipe->image)))
                        <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}" class="rounded-lg mb-4 w-full h-48 object-cover">
                    @endif

                    <h2 class="text-xl font-semibold mb-2">{{ $recipe->title }}</h2>
                    <p class="text-gray-600 mb-2">{{ $recipe->description }}</p>
                    <p class="text-sm text-gray-500 mb-4">{{ Str::limit($recipe->instructions, 100) }}</p>

                    {{-- Kategorien --}}
                    @if($recipe->categories->isNotEmpty())
                        <div class="mb-2">
                            <span class="font-semibold">Kategorien:</span>
                            @foreach($recipe->categories as $category)
                                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mr-1">{{ $category->name }}</span>
                            @endforeach
                        </div>
                    @endif

                    {{-- Tags --}}
                    @if($recipe->tags && $recipe->tags->isNotEmpty())
                        <div class="mb-2">
                            <span class="font-semibold">Tags:</span>
                            @foreach($recipe->tags as $tag)
                                <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded mr-1">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    @endif

                    {{-- Zutaten --}}
                    @if($recipe->ingredients->isNotEmpty())
                        <div class="mb-2">
                            <span class="font-semibold">Zutaten:</span>
                            <ul class="list-disc list-inside text-sm text-gray-700">
                                @foreach($recipe->ingredients as $ingredient)
                                    <li>{{ $ingredient->quantity }} {{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Nährwerte --}}
                    @if($recipe->nutrition)
                        <div class="mt-4 text-sm text-gray-600">
                            <span class="font-semibold">Nährwerte ({{ $recipe->nutrition->unit }}):</span><br>
                            Kalorien: {{ $recipe->nutrition->calories }} kcal<br>
                            Fett: {{ $recipe->nutrition->fat }} g<br>
                            Kohlenhydrate: {{ $recipe->nutrition->carbohydrates }} g<br>
                            Protein: {{ $recipe->nutrition->protein }} g
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </x-layouts.max-width>
</x-layouts.base>
