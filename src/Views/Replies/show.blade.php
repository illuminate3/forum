@include('Forum::Partials.avatar', ['user' => $reply->user])
{{ $reply->user->email }}
<br/>
{{ $reply->message }}