<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);
        return view('admin.post.index', compact('posts'));
    }

    public function create(): View 
    { 
        return view('admin.post.create'); 
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $image = $request->file('image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img'), $imageName);

        Post::create([
            'image'   => $imageName,
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post')); // ✅ Perbaikan dari 'posts'
    }

    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post')); // ✅ Perbaikan dari 'posts'
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'image'   => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $oldImagePath = public_path('assets/img/' . $post->image);
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }

            $post->update([
                'image'   => $imageName,
                'title'   => $request->title,
                'content' => $request->content,
            ]);
        } else {
            $post->update([
                'title'   => $request->title,
                'content' => $request->content,
            ]);
        }

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        $oldImagePath = public_path('assets/img/' . $post->image);
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }

        $post->delete();

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function about(): View
    {
        $aboutPost = Post::whereRaw('LOWER(title) = ?', ['about us'])->first();
        return view('front-end.about', compact('aboutPost'));
    }

    public function homepage(): \Illuminate\View\View
{
    // Ambil 1 post terbaru untuk slider (misal dengan judul "homepage")
    $sliderPost = Post::whereRaw('LOWER(title) = ?', ['homepage'])->latest()->first();

    // Pastikan default jika tidak ada post
    return view('front-end.master', compact('sliderPost'));
}

}
