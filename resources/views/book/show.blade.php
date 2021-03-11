<h2>book Name: </h2>
<p>{{ $book->name }} || ${{ $book->price }}</p>

<h3>book Belongs to</h3>

<ul>
    @foreach($book->authors as $author)
    <li>{{ $author->title }}</li>
    @endforeach
</ul>
