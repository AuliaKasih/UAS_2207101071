@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="{{ url('/mahasiswa') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="mhsw_nim" class="form-control"></td>
            </tr>
            <tr>
                <td>NAMA WARGA</td>
                <td><input type="text" name="mhsw_nama" class="form-control"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <select name="mhsw_jurusan" class="form-control">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td><input type="text" name="mhsw_alamat" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>
@endsection