@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="text-center">
        <h1>Kartu Hasil Studi (KHS)</h1>
    </div>
    <br><br><br>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('cetak_khs',$mahasiswa_matakuliah->mahasiswa->id_mahasiswa) }}">Cetak KHS</a>
        </div>
    <br>
    <div><b>Nama : </b>{{ $mahasiswa_matakuliah->mahasiswa->nama }}</div>
    <div><b>NIM : </b>{{ $mahasiswa_matakuliah->mahasiswa->nim }}</div>
    <div><b>Kelas: </b>{{ $mahasiswa_matakuliah->mahasiswa->kelas->nama_kelas }}</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
     @endif
     <br>
        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mahasiswa_matakuliah as $matkul)
                <tr>
                    <td>{{ $matkul ->matakuliah->nama_matkul }}</td>
                    <td>{{ $matkul ->matakuliah->sks }}</td>
                    <td>{{ $matkul ->matakuliah->semester }}</td>
                    <td>{{ $matkul ->nilai }}</td>
                </tr>
            @endforeach
        </table>
        <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
@endsection