@extends('layouts.app')

@section('subtitle', 'Periksa')
@section('content_header_title', 'Data Periksa')
@section('content_body')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pasien.periksa.create') }}" class="btn btn-primary">Tambah Periksa</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Pasien</th>
                        <th>Dokter</th>
                        <th>Tanggal Periksa</th>
                
                    </tr>
                </thead>
                <tbody>
                    @foreach($periksas as $periksa)
                        <tr>
                            <td>{{ $periksa->pasien->name ?? '-' }}</td>
                            <td>{{ $periksa->dokter->name ?? '-' }}</td>
                            <td>{{ $periksa->tgl_periksa }}</td>          
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
