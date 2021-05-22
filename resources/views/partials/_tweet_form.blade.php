

<form method="POST" 
  action="{{ $tweet ? route('tweets.update', ['tweet' => $tweet]) : route('tweets.store') }}"
>
  @csrf
 <input type="hidden" name="_method" value="{{ $tweet ? 'put' : 'post'}}">
 <textarea name="body">{{ $tweet ? $tweet->body : "" }}</textarea>
 
  @if ($tweet)
    @include('partials/_tweet_state', ['tweet' => $tweet]);
  @endif
 <button type="submit">{{ $tweet ? 'Update' : 'Create' }}</button>
</form>