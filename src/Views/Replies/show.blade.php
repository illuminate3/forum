@include('Forum::Partials.avatar', ['user' => $reply->user])

{{ $reply->user->email }}

<br/>

<div class="markdown">
{!! $reply->message !!}
</div>
