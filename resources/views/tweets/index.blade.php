@extends('layouts.default')
@section('content')

@include('partials/_tweet_form', ['tweet' => null])


@if (count($tweets) > 0)
  @foreach ($tweets as $tweet)

  <div class="card tweetitem--card">
    <div class="card-body tweetitem--body">{{ $tweet->body }}</div>
  </div>
  {{-- <li>{{ $tweet->body }}</li>
  <li>{{ $tweet->updated_at->diffForHumans() }}</li>
  <li>
    <a href="{{ route('tweets.show', ['tweet' => $tweet]) }}">View</a>
    <a href="{{ route('tweets.edit', ['tweet' => $tweet]) }}">Edit</a>
    <form action="{{ route("tweets.destroy",  $tweet) }}" method="post">
      @method("DELETE")
      @csrf
      <button type="submit">DELETE</button>
    </form>
  </li> --}}
@endforeach
@else
  <div>Nothing to show</div>
@endif
@endsection
