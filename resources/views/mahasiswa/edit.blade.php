@extends('mahasiswa.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                 @endif
                <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="nim" value="{{ $mahasiswa->nim }}" aria-describedby="nim" >
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $mahasiswa->nama }}" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <select class="form-control" name="Kelas" id="Kelas">
                        @foreach($kelas as $kls)
                            <option value="{{ $kls->id }}" {{ $mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{ $kls->nama_kelas }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $mahasiswa->jurusan }}" aria-describedby="Jurusan" >
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" name="Email" class="form-control" id="Email" value="{{ $mahasiswa->email }}" aria-describedby="Email" >
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $mahasiswa->alamat }}" aria-describedby="Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                        <input type="Tanggal_Lahir" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir" value="{{ $mahasiswa->tanggal_lahir }}" aria-describedby="Tanggal_Lahir" >
                    </div>
                    <div class="form-group">
                        <label for="Image">Profile</label>
                        <input type="file" class="form-control" required="required" name="Image" value="{{ asset('storage/' . $mahasiswa->image) }}">
                        <br>
                        <img width="150px" src="{{ asset('storage/' . $mahasiswa->image) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
      
@endsection