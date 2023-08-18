<!-- resources/views/channels/edit.blade.php -->
<h1>Cập nhật thông tin kênh</h1>
<a href="{{ route('channels.edit', ['id' => $channel->id]) }}">Sửa</a>

<form action="{{ route('channels.update', $channel->id) }}" method="post">
    @method('put')
    @csrf
    <!-- Các trường nhập liệu hiển thị thông tin cũ -->
    <button type="submit">Cập nhật</button>
</form>
