@extends('layouts.app')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Data User</a></li>
              <li class="breadcrumb-item active">Edit Data User</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data User</h3>
              </div>

              <form action="{{ route('updateUser', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" placeholder="Full Name" required autocomplete="name" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" placeholder="Email" required autocomplete="email">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>This Email is Already Exist</strong>
                          </span>
                        @enderror
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>

@endsection