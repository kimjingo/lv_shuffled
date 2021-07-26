<ul>
    @foreach($shuffled as $user)
    <li>{{ $user->id }} </li>
        @if(($loop->iteration%10) === 0) <hr> @endif
    @endforeach
</ul>