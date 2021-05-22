<h2>edit</h2>
@include('partials/_tweet_form',['tweet' => $tweet])

<a href="{{ route('tweets.index') }}">Back to home</a>