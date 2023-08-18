
<h1>Thêm mới kênh</h1>

<form action="{{ route('channels.store') }}" method="post">
    @csrf
    <label for="channelName">Tên kênh</label>
    <input type="text" name="channelName" required>
    
    <label for="description">Mô tả</label>
    <textarea name="description" required></textarea>
    
    <label for="subscribersCount">Số lượng người đăng ký</label>
    <input type="number" name="subscribersCount" required>
    
    <label for="URL">URL</label>
    <input type="text" name="URL" required>
    
    <button type="submit">Lưu</button>
</form>
