@extends('layouts.default')
@section('content')

@include('partials/_tweet_form', ['tweet' => null])

<div class="tweet--list" id="tweet--list">
  <div class="tweet--item"></div>
</div>

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
