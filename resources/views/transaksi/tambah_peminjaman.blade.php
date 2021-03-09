@extends('partial.auth')

@section('title','Tambah Peminjaman')

@section('content')
    <main>
        <div class="container-fluid">
            @include('partial.alert')
            <div class="card mb-4">
                <div class="card-header">
                    <a href="/peminjaman"><i class="fas fa-chevron-circle-left mr-3"></i></a>
                    Tambah Peminjaman Buku
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1" for="nis">NIS</label> 
                            <input class="form-control py-3" id="nis" type="text" name="nis" placeholder="Masukkan NIS" value="{{ old('nis') }}" autofocus/>
                            <div id="error">{{ $errors->first('nis') }}</div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1" for="kode">Kode Buku</label> 
                            <input class="form-control py-3" id="kode" type="text" name="kode" placeholder="Masukkan Kode Buku" value="{{ old('kode') }}"/>
                            <div id="error">{{ $errors->first('kode') }}</div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <a class="btn btn-danger" style="float: left;" href="/peminjaman">Batal</a>
                            <button class="btn btn-success" style="float: right;" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection