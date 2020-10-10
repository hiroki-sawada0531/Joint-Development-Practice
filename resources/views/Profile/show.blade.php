<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>いいねー！！</title>
</head>
<body>
<div>
    @if($reply->is_liked_by_auth_user())
        <a href="{{ route('reply.unlike', ['id' => $reply->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $reply->likes->count() }}</span></a>
    @else
        <a href="{{ route('reply.like', ['id' => $reply->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $reply->likes->count() }}</span></a>
    @endif
    {{ $reply->likes->count() }}
</div>
</body>
</html>