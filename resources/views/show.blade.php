<x-layouts.base>

    <h1>{{ $recipe->title }}</h1>

    <p>{{ $recipe->description }}</p>

    <h2>Ingredients:</h2>
    <ul>
        @foreach($recipe->ingredients as $ingredient)
            <li>{{ $ingredient->name }} ({{ $ingredient->quantity }})</li>
        @endforeach
    </ul>

    <h2>Nutrition Information:</h2>
    <ul>
        <li>Calories: {{ $recipe->nutrition->calories }} {{ $recipe->nutrition->unit }}</li>
        <li>Fat: {{ $recipe->nutrition->fat }}g</li>
        <li>Carbohydrates: {{ $recipe->nutrition->carbohydrates }}g</li>
        <li>Protein: {{ $recipe->nutrition->protein }}g</li>
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