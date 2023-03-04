@extends('layouts.app')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Convert Number</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Data User</a></li>
              <li class="breadcrumb-item active">Convert Number</li>
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
                <h3 class="card-title">Convert Number</h3>
              </div>
              <form action="{{ route('convert') }}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="number">Masukkan Angka</label>
                    <input id="number" name="number" type="number" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                @isset($result)
                    <p>Hasil: {{ $result }}</p>
                @endisset
            </div>
          </div>
        </div>
    </div>

@endsection