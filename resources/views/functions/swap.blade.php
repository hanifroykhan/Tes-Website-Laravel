@extends('layouts.app')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Swapping Variable</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Data User</a></li>
              <li class="breadcrumb-item active">Swapping Variable</li>
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
                <h3 class="card-title">Swapping Variable</h3>
              </div>
              
              <div class="card-body">
	              <h1>Before Swapping:</h1>
	              <h3>A = 5</h3>
	              <h3>B = 3</h3>
	            <br>
	              <h1>After Swapping:</h2>
	              <h3>A = {{ $a }}</h3>
	              <h3>B = {{ $b }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    


@endsection