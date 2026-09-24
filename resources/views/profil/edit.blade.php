<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil Sekolah - SMKN 1 Cijati</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 40px;
        }
        .form-container {
            max-width: 700px;
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
        input[type="number"],
        input[type="email"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-family: Arial, sans-serif;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
        }
        .preview img {
            margin-top: 10px;
            max-width: 150px;
            border-radius: 8px;
        }
        .row {
            display: flex;
            gap: 20px;
        }
        .row > div {
            flex: 1;
        }
        button {
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #198754;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
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
        <h2>Edit Profil Sekolah</h2>

        <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" value="{{ old('nama_sekolah', $profil->nama_sekolah) }}">
            @error('nama_sekolah') <div class="error">{{ $message }}</div> @enderror

            <div class="row">
                <div>
                    <label for="npsn">NPSN</label>
                    <input type="text" name="npsn" id="npsn" value="{{ old('npsn', $profil->npsn) }}">
                    @error('npsn') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label for="akreditasi">Akreditasi</label>
                    <input type="text" name="akreditasi" id="akreditasi" value="{{ old('akreditasi', $profil->akreditasi) }}">
                    @error('akreditasi') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row">
                <div>
                    <label for="tahun_berdiri">Tahun Berdiri</label>
                    <input type="text" name="tahun_berdiri" id="tahun_berdiri" value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}">
                    @error('tahun_berdiri') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label for="kepala_sekolah">Kepala Sekolah</label>
                    <input type="text" name="kepala_sekolah" id="kepala_sekolah" value="{{ old('kepala_sekolah', $profil->kepala_sekolah) }}">
                    @error('kepala_sekolah') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat">{{ old('alamat', $profil->alamat) }}</textarea>
            @error('alamat') <div class="error">{{ $message }}</div> @enderror

            <div class="row">
                <div>
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $profil->telepon) }}">
                    @error('telepon') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $profil->email) }}">
                    @error('email') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <label for="visi">Visi</label>
            <textarea name="visi" id="visi">{{ old('visi', $profil->visi) }}</textarea>
            @error('visi') <div class="error">{{ $message }}</div> @enderror

            <label for="sejarah">Sejarah</label>
            <textarea name="sejarah" id="sejarah" rows="5">{{ old('sejarah', $profil->sejarah) }}</textarea>
            @error('sejarah') <div class="error">{{ $message }}</div> @enderror

            <label for="logo">Logo Sekolah (kosongkan jika tidak ingin mengganti)</label>
            <input type="file" name="logo" id="logo">
            @error('logo') <div class="error">{{ $message }}</div> @enderror

            @if ($profil->logo)
                <div class="preview">
                    <img src="{{ asset('storage/' . $profil->logo) }}" alt="Logo Sekolah">
                </div>
            @endif

            <div class="row">
                <div>
                    <label for="jumlah_siswa">Jumlah Siswa</label>
                    <input type="number" name="jumlah_siswa" id="jumlah_siswa" value="{{ old('jumlah_siswa', $profil->jumlah_siswa) }}">
                    @error('jumlah_siswa') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label for="jumlah_guru">Jumlah Guru</label>
                    <input type="number" name="jumlah_guru" id="jumlah_guru" value="{{ old('jumlah_guru', $profil->jumlah_guru) }}">
                    @error('jumlah_guru') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <button type="submit">Update Profil</button>
        </form>

        <a class="back" href="{{ route('profil.index') }}">← Kembali ke Profil</a>
    </div>

</body>
</html>