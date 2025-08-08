<>
    <form method="GET" action="{{ route('home') }}">
    @csrf
    <input type="text" name="query" placeholder="Search recipes...">
    <button type="submit">Search</button>
</form>
</>