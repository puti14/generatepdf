@section('content')
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('posts.index') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="Judul Post">
            </div>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea class="form-control" id="content" name="content" rows="5">Konten Post</textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection