<!DOCTYPE html>


<html>


<head>


    <meta charset="UTF-8">
    <!-- Menentukan karakter set sebagai UTF-8 untuk mendukung berbagai karakter -->

    <title>Data Posts</title>
    <!-- Menentukan judul halaman yang akan ditampilkan di tab browser -->

    <style>
        /* Gaya CSS untuk elemen-elemen di halaman ini */

        body {
            font-family: DejaVu Sans, sans-serif;
            /* Menentukan font untuk seluruh badan dokumen */
        }

        table {
            width: 100%;
            /* Melebarkan tabel agar menempati 100% lebar container */
            border-collapse: collapse;
            /* Menghilangkan jarak antara border sel tabel */
        }

        th,
        td {
            padding: 8px 12px;
            /* Menambahkan padding di dalam sel tabel */
            border: 1px solid #000;
            /* Menambahkan border hitam pada sel tabel */
            text-align: center;
            /* Mengatur teks di dalam sel tabel agar berada di tengah */
        }

        th {
            background-color: #f4f4f4;
            /* Memberikan warna latar belakang abu-abu muda pada header tabel */
        }

        .no-image {
            color: #ff0000;
            /* Memberikan warna merah pada teks jika gambar tidak tersedia */
        }
    </style>

</head>


<body>


    <h2>Data Posts</h2>
    <!-- Judul utama halaman -->

    <table>


        <thead>


            <tr>
                <!-- Awal baris header tabel -->
                <th>GAMBAR</th>
                <!-- Kolom header untuk gambar -->
                <th>JUDUL</th>
                <!-- Kolom header untuk judul -->
                <th>CONTENT</th>
                <!-- Kolom header untuk konten -->
            </tr>


        </thead>


        <tbody>


            @forelse ($posts as $post)
            <!-- Looping melalui koleksi $posts; jika kosong, lanjutkan ke @empty -->

            <tr>


                <td>


                    @if($post->image)
                    <!-- Jika post memiliki gambar -->

                    <img src="{{ public_path('storage/' . $post->image) }}" style="width: 100px;" alt="Post Image">
                    <!-- Tampilkan gambar dengan lebar 100px dari direktori public path -->

                    @else
                    <!-- Jika post tidak memiliki gambar -->

                    <span class="no-image">No Image</span>
                    <!-- Tampilkan teks "No Image" dengan warna merah -->

                    @endif
                </td>


                <td>{{ $post->title }}</td>
                <!-- Tampilkan judul post -->
                <td>{{ $post->content }}</td>
                <!-- Tampilkan konten post -->

            </tr>
            <tr>


                <td colspan="3">Data Post belum Tersedia.</td>
                <!-- Tampilkan pesan di satu sel yang merentang 3 kolom -->

            </tr>


            @endforelse
            <!-- Akhir looping koleksi $posts -->

        </tbody>


    </table>


</body>

</html>