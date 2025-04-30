@extends('layouts.app')

<<<<<<< HEAD
@section('subtitle', 'Dokter')
@section('content_header_title', 'Obat')
@section('content_body')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
        </div>
        <div class="card-body">
            <table class="table tbale-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>Nama Obat</th>
                        <th>Kemasan</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($obats as $obat)
                        <tr>
                           
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->kemasan }}</td>
                            <td>{{ $obat->harga }}</td>

                            <td>
                                <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

=======

{{-- Customize layout sections --}}


@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content_body')
<div class="card-header">periksa</div>

                <div class="card-body">
                <table class="table">
  <thead>
    ...
  </thead>
  <tbody>
    <tr class="table-active">
    <th scope="row">1</th>
      <td>John</td>
      <td>Doe</td>
      <td class="table-active">@social</td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>John</td>
      <td>Doe</td>
      <td class="table-active">@social</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td class="table-active">@social</td>
    </tr>
  </tbody>
</table>

                </div>
            

@endsection
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
