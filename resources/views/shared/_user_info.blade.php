<a href="{{route('users.show', $user->id)}}">
    <img src="{{$user->gravatarName()}}" class="gravatar" alt="{{$user->name}}">
</a>
<h1>{{$user->name}}</h1>
