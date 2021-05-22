<h2>Twitter index</h2>

@if (count($tweets) > 0)
<ul>
  @foreach ($tweets as $tweet)
    <li>{{$tweet->body}}</li>
  @endforeach
</ul>
@else
  <div>Nothing to show</div>
@endif