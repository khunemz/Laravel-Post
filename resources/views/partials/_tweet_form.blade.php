

<form method="POST" 
action="{{ $tweet ? route('tweets.update', ['tweet' => $tweet]) : route('tweets.store') }}"
>
  @csrf
 <input type="hidden" name="_method" value="{{ $tweet ? 'put' : 'post'}}">
 <textarea name="body">{{ $tweet ? $tweet->body : "" }}</textarea> 
 <input type="number" name="like_count" value="{{ $tweet ? $tweet->like_count : 0 }}" placeholder="Likes icon" />
 <input type="number" name="rt_count" value="{{ $tweet ? $tweet->rt_count : 0 }}" placeholder="RT icon"  />
 <input type="number" name="quote_count" value="{{ $tweet ? $tweet->rt_count : 0 }}" placeholder="Quote icon"  />

 <button type="submit">{{ $tweet ? 'Update' : 'Create' }}</button>
</form>