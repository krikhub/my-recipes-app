<x-layouts.base>

    <h1>{{ $recipe->title }}</h1>

    <p>{{ $recipe->description }}</p>

    <h2>Ingredients:</h2>
    <ul>
         @if(!empty($recipe->ingredients))
    @foreach($recipe->ingredients as $ingredient)
        <li>{{ $ingredient['name'] }} ({{ $ingredient['quantity'] }})</li>
    @endforeach
@else
    <p>No ingredients found.</p>
@endif


    </ul>

    <h2>Nutrition Information:</h2>

    @if($recipe->nutrition)
        <ul>
            <li>Calories: {{ $recipe->nutrition->calories ?? 'N/A' }} {{ $recipe->nutrition->unit ?? '' }}</li>
            <li>Fat: {{ $recipe->nutrition->fat ?? 'N/A' }}g</li>
            <li>Carbohydrates: {{ $recipe->nutrition->carbohydrates ?? 'N/A' }}g</li>
            <li>Protein: {{ $recipe->nutrition->protein ?? 'N/A' }}g</li>
        </ul>
    @else
        <p>Nutrition information not available.</p>
    @endif

    <h2>Instructions:</h2>
    <p>{{ $recipe->instructions }}</p>

    <h2>Image:</h2>
    <div>
        @if($recipe->image)
            <img src="{{ asset($recipe->image) }}" alt="Recipe image">
        @endif
    </div>

</x-layouts.base>