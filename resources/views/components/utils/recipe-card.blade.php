<div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
    @if($recipe->image)
        <img src="{{ asset($recipe->image) }}" alt="Recipe image">
    @endif



    <h2 class="text-xl font-semibold mb-1">{{ $recipe->title }}</h2>

    <p class="text-gray-600 text-sm mb-2">{{ $recipe->description }}</p>

    {{-- Kategorien --}}
    @if($recipe->categories)
        <div class="mb-2">
            @foreach(explode(',', $recipe->categories) as $category)
                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mr-1">{{ trim($category) }}</span>
            @endforeach
        </div>
    @endif


    {{-- Tags --}}
   @if($recipe->tags && $recipe->tags->isNotEmpty())
    <div>
        @foreach($recipe->tags as $tag)
            <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded mr-1">{{ $tag->name }}</span>
        @endforeach
    </div>
@endif
</div>
