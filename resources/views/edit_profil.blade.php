@extends('partial.auth')

@section('title','Edit Profil')

@section('content')
	<main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Profil</a></li>
                <li class="breadcrumb-item">Edit Profil</li>
            </ol>
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Edit Profil
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1" for="username">Username</label>
                            <input class="form-control py-3" id="username" type="text" name="name" value="{{ $user->name }}" autofocus required />
                        </div>
    	                <div class="form-group">
    	                    <label class="mb-1" for="email">Email</label>
    	                    <input class="form-control py-3" id="email" type="email" name="email" value="{{ $user->email }}" required/>
    	                </div>
    	                <div class="form-group">
    	                    <label class="mb-1" for="password">Password</label>
    	                    <input class="form-control py-3" id="password" type="password" name="password" />
    	                </div>
    	                <div class="form-group mt-4 mb-0">
    	                    <button class="btn btn-success" style="float: right;" value="submit">Simpan</button>
    	                </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection