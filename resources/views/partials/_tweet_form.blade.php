<form method="POST" 
  action="{{ $tweet ? route('tweets.update', ['tweet' => $tweet]) : route('tweets.store') }}"
  id="tweetbox--form"
>
  <div class="card">
    <div class="card-title"><h2>Home</h2></div>
    <div class="card-body">
      @csrf
      <input type="hidden" 
        name="_method" 
        value="{{ $tweet ? 'put' : 'post'}}"
      >
      <textarea 
        name="body"
        id="tweetbox--body"
        class="form-control"
        placeholder="What's happening?"
      >{{ $tweet ? $tweet->body : "" }}</textarea>
      @if ($tweet)
        @include('partials/_tweet_state', ['tweet' => $tweet]);
      @endif
    </div>
    <div class="card-footer">
      <button 
        id="tweetbox--submit" 
        type="submit"
        class="btn btn-primary float-right"
      >{{ $tweet ? 'Update' : 'Tweet' }}</button>
    </div>
  </div>
</form>

