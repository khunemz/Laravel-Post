@extends('layouts.default')
@section('content')
<h2>Twitter index</h2>

@include('partials/_tweet_form', ['tweet' => null])
@if (count($tweets) > 0)
<ul>
  @foreach ($tweets as $tweet)
    <li>{{ $tweet->body }}</li>
    <li>{{ $tweet->updated_at->diffForHumans() }}</li>
    <li>
      <a href="{{ route('tweets.show', ['tweet' => $tweet]) }}">View</a>
      <a href="{{ route('tweets.edit', ['tweet' => $tweet]) }}">Edit</a>
      <form action="{{ route("tweets.destroy",  $tweet) }}" method="post">
        @method("DELETE")
        @csrf
        <button type="submit">DELETE</button>
      </form>
    </li>
  @endforeach
</ul>
@else
  <div>Nothing to show</div>
@endif
@endsection
