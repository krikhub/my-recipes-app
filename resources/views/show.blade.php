<x-layouts.base>

    <h1>{{ $recipe->title }}</h1>

    <p>{{ $recipe->description }}</p>

    <h2>Ingredients:</h2>
<ul>
    @if(!empty($recipe->ingredients))
        @foreach(explode("\n", $recipe->ingredients) as $ingredient)
            <li>{{ trim($ingredient) }}</li>
        @endforeach
    @else
        <li>No ingredients found.</li>
    @endif
</ul>


    <h2>Nutrition Information:</h2>
<ul>
    <li>Calories: {{ $recipe->calories ?? 'N/A' }} {{ $recipe->unit ?? '' }}</li>
    <li>Fat: {{ $recipe->fat ?? 'N/A' }}g</li>
    <li>Carbohydrates: {{ $recipe->carbohydrates ?? 'N/A' }}g</li>
    <li>Protein: {{ $recipe->protein ?? 'N/A' }}g</li>
</ul>


    <h2>Instructions:</h2>
    <p>{{ $recipe->instructions }}</p>

    <h2>Image:</h2>
    <div>
      @if($recipe->image)
            <img src="{{ asset($recipe->image) }}" alt="Recipe image">
        @endif




    </div>

</x-layouts.base>