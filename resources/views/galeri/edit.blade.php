<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Galeri - SMKN 1 Cijati</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 40px;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #198754;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-family: inherit;
        }
        textarea {
            resize: vertical;
            min-height: 90px;
        }
        .preview img {
            margin-top: 10px;
            max-width: 200px;
            border-radius: 8px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #198754;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #146c43;
        }
        .error {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }
        a.back {
            display: inline-block;
            margin-top: 15px;
            color: #198754;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Edit Data Galeri</h2>

        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul', $galeri->judul) }}">
            @error('judul') <div class="error">{{ $message }}</div> @enderror

            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $galeri->kategori) }}">
            @error('kategori') <div class="error">{{ $message }}</div> @enderror

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
            @error('deskripsi') <div class="error">{{ $message }}</div> @enderror

            <label for="gambar">Gambar (kosongkan jika tidak ingin mengganti)</label>
            <input type="file" name="gambar" id="gambar">
            @error('gambar') <div class="error">{{ $message }}</div> @enderror

            @if ($galeri->gambar)
                <div class="preview">
                    <img src="{{asset('uploads/galeri/'. $galeri->gambar) }}" alt="{{ $galeri->judul }}">
                </div>
            @endif

            <button type="submit">Update</button>
        </form>

        <a class="back" href="{{ route('galeri.index') }}">← Kembali ke Galeri</a>
    </div>

</body>
</html>