<h1>Your Ratings</h1>
@if ($ratings->isEmpty())
    <p>No ratings available.</p>
@else
    <ul>
        @foreach ($ratings as $rating)
            <li>
                <p>Rating: {{ $rating->rating }}</p>
                <p>Review: {{ $rating->review }}</p>
            </li>
        @endforeach
    </ul>
@endif