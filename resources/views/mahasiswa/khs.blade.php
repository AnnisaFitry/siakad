<!DOCTYPE html>
<html>
    <head>
        <title>KHS</title>
    </head>
    <body> 
        <style type="text/css">
            body {
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
            }
            div {
                display: block;
            }
            .container {
                max-width: 960px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            .col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .text-center {
                text-align: center!important;
            }
            .mt-2, .my-2 {
                margin-top: 0.5rem!important;
            }
            .table-bordered {
                border: 1px solid #dee2e6;
            }
            .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
            }

            table {
                border-collapse: collapse;
            }
            tbody {
                display: table-row-group;
                vertical-align: middle;
                border-color: inherit;
            }
            tr {
                display: table-row;
                vertical-align: inherit;
                border-color: inherit;
            }
            .table-bordered td, .table-bordered th {
                border: 1px solid #dee2e6;
            }

            .table td, .table th {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
            }
            th {
                text-align: inherit;
            }
            td {
                display: table-cell;
            }
        </style> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center mt-2">
                        <h4>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h4>
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center">
                <h3>Kartu Hasil Studi (KHS)</h3>
            </div>
            <br>
            <div><b>Nama : </b>{{ $mahasiswa_matakuliah->mahasiswa->nama }}</div>
            <div><b>NIM : </b>{{ $mahasiswa_matakuliah->mahasiswa->nim }}</div>
            <div><b>Kelas: </b>{{ $mahasiswa_matakuliah->mahasiswa->kelas->nama_kelas }}</div>
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
        </div>
    </body>
</html>