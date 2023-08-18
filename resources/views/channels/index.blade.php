<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách kênh yêu thích</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>Danh sách kênh yêu thích</h1>

{{-- <ul>
    @foreach ($channels as $channel)
        <li>
            <strong>{{ $channel->channelName }}</strong>
            <p>{{ $channel->description }}</p>
            <p>Subscribers: {{ $channel->subscribersCount }}</p>
            <a href="{{ $channel->URL }}" target="_blank">Xem kênh</a>
        </li>
    @endforeach
</ul>



<li>
    <a href="{{ route('channels.edit', $channel->id) }}">Sửa</a>
    <form action="{{ route('channels.edit', $channel->id) }}" method="get">
        @csrf
        <input type="hidden" name="id" value="{{ $channel->id }}">
        <button type="submit">Sửa</button>
    </form>

    <form action="{{ route('channels.destroy', $channel->id) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa kênh này không?')">Xóa</button>
    </form>
</li> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>