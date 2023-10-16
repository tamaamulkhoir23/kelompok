@extends('layout')

@section('title', 'Data Periodik')
@section('header', 'Data Pemantauan Periodik')
@section('content')
<div class="container">
    <button class="btn btn-primary" onclick="location.href='/tambah-data'">Tambah Data</button>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pengukuran</th>
                <th>ID Buah</th>
                <th>ID Suhu</th>
                <th>ID Gas</th>
                <th>Nilai Suhu</th>
                <th>Nilai Gas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>101</td>
                <td>201</td>
                <td>301</td>
                <td>25°C</td>
                <td>350 ppm</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>102</td>
                <td>202</td>
                <td>302</td>
                <td>26°C</td>
                <td>400 ppm</td>
            </tr>
            <!-- Tambahkan baris-baris data lainnya di sini -->
        </tbody>
    </table>
</div>
@endsection

