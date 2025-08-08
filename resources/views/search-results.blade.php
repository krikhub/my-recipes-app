<h1>Search Results</h1>
<ul>
    @foreach($recipes as $recipe)
        <li>
            <a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->title }}</a>
        </li>
    @endforeach
</ul>