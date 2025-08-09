<x-layouts.base>

<form id="recipe-form" action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  
  <div>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
  </div>

  <div>
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
  </div>

  <div>
    <label for="instructions">Instructions:</label>
    <textarea id="instructions" name="instructions"></textarea>
  </div>

  <div>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image">
  </div>

  <div>
    <label for="categories">Categories:</label>
    <select id="categories" name="categories[]" multiple>
      <option value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="dinner">Dinner</option>
      <option value="dessert">Dessert</option>
      <option value="snacks">Snacks</option>
      <option value="beverages">Beverages</option>
      <option value="vegetarian">Vegetarian</option>
      <option value="vegan">Vegan</option>
      <option value="gluten-free">Gluten-Free</option>
      <option value="low-carb">Low Carb</option>
      <option value="quick-easy">Quick & Easy</option>
      <option value="slow-cooker">Slow Cooker</option>
      <option value="holiday-special">Holiday Special</option>
      <option value="international">International</option>
      <option value="kids-friendly">Kids Friendly</option>
    </select>
  </div>

  <div id="ingredients-container">
    <h3>Ingredients:</h3>
    <textarea id="ingredients" name="ingredients"></textarea>
  </div>

  <div id="nutrition-container">
    <h3>Nutrition:</h3>
    <div>
      <label for="calories">Calories:</label>
      <input type="number" id="calories" name="calories">
    </div>
    <div>
      <label for="fat">Fat:</label>
      <input type="number" id="fat" name="fat">
    </div>
    <div>
      <label for="carbohydrates">Carbohydrates:</label>
      <input type="number" id="carbohydrates" name="carbohydrates">
    </div>
    <div>
      <label for="protein">Protein:</label>
      <input type="number" id="protein" name="protein">
    </div>
    <div>
      <label for="unit">Unit:</label>
      <input type="text" id="unit" name="unit">
    </div>
  </div>

  <button id="submit-recipe" type="submit">Submit Recipe</button>
</form>

</x-layouts.base>
