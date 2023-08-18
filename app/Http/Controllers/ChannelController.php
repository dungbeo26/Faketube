<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
class ChannelController extends Controller
{
    public function index()
{
    $channels = Channel::all();
    return view('channels.index', compact('channels'));
}

public function create()
{
    return view('channels.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'channelName' => 'required|string',
        'description' => 'required|string',
        'subscribersCount' => 'required|integer',
        'URL' => 'required|url',
    ]);

    Channel::create($data);

    return redirect()->route('channels.index')
        ->with('success', 'Kênh đã được thêm mới thành công.');
}




public function edit($id)
{
    $channel = Channel::findOrFail($id);
    return view('channels.edit', compact('channel'));
}


public function update(Request $request, $id)
{
    $data = $request->validate([
        'channelName' => 'required|string',
        'description' => 'required|string',
        'subscribersCount' => 'required|integer',
        'URL' => 'required|url',
    ]);

    $channel = Channel::findOrFail($id);
    $channel->update($data);

    return redirect()->route('channels.index')
        ->with('success', 'Thông tin kênh đã được cập nhật thành công.');
}





public function destroy($id)
{
    $channel = Channel::findOrFail($id);
    $channel->delete();

    return redirect()->route('channels.index')
        ->with('success', 'Thông tin kênh đã được xóa thành công.');
}

}

