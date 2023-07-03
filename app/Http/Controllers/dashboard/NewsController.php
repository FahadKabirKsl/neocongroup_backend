<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('layouts.dashboard.news.index', compact('news'));
    }
    public function create()
    {
        $news = News::all();
        return view('layouts.dashboard.news.create', compact('news'));
    }
    public function store(Request $request)
    {
        $news = $request->validate(
            [
                'type' => 'required|in:all,innovation,technologies,gateway',
                'name' => 'required|string',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]
        );
        $image_path = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_path = $file->storeAs('Created_News_Images', $file->getClientOriginalName(), 'public');
        }
        $news = News::create(
            [
                'type' => $request->type,
                'image' => $image_path,
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description
            ]
        );
        session()->flash('create', 'News Created Successfully');
        return redirect()->route('news.index');
    }
    public function edit(Request $request, $id)
    {
        $news = News::findOrFail($id);
        return view('layouts.dashboard.news.update', compact('news'));
    }
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->type = $request->input('type');
        $news->name = $request->input('name');
        $news->title = $request->input('title');
        $news->description = $request->input('description');

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::delete($news->image);
            }
            $file = $request->file('image');
            $image_path = $file->storeAs('Updated_News_Images', $file->getClientOriginalName(), 'public');
            $news->image = str_replace('public/', '', $image_path);
        }
        $news->save();
        session()->flash('update', 'News Updated Successfully');
        return redirect()->route('news.index');
    }
    public function destroy(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        session()->flash('delete', 'News Deleted Successfully');
        return redirect()->route('news.index');
    }
}
