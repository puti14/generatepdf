@extends('layouts.app')

@section('title', 'Data Posts')

@section('header-title', 'Data Posts')

@section('content')
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title text-primary">Data Posts</h5>
            <a href="{{ route('posts.add') }}" class="btn btn-success">TAMBAH POST</a>
        </div>
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td class="text-center">
                        @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="rounded" style="width: 150px" alt="Post Image">
                        @else
                        <img src="{{ asset('images/254721151_utb_kotak.png') }}" class="rounded" style="width: 150px" alt="Post Image">
                        @endif
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            <a href="{{ route('posts.view', $post->id)}}" class="btn btn-dark btn-sm">SHOW</a>
                            <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <!-- Jika tidak ada data -->
                <tr>
                    <td colspan="4" class="text-center">
                        <div class="alert alert-danger">
                            Data Post belum Tersedia.
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            {{ $posts->links() }}
        </nav>
    </div>
</div>
@endsection