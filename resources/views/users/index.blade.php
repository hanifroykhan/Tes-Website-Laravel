@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Index</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <div class="card-body">
              <a href =" {{ route('createUser') }} " type="button" class="btn btn-block btn-success" style="width: 90px; height: 45px;">Tambah</a>
                <br>  
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $number = 1;
                    @endphp

                  @foreach ($index as $user)
                    <tr>
                      <td>{{ $number }}</td>
                      <td>{{ $user->name}}</td>
                      <td>{{ $user->email}}</td>
                      <td>{{ $user->password}}</td>
                      <td style="display: flex;">
                          <a href="{{ route('editUser', $user->id) }}" class="btn btn-primary" >Edit</a>
                          @if (auth()->guest() || auth()->user()->id != $user->id)
                          <form action="{{ route('deleteUser', $user->id) }}" method="POST"  >
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger" style="margin-left: 10px;" onclick="return confirm('are you sure');">Delete</button>
                          </form>
                          @else
                          <button type="submit" class="btn btn-danger" onclick="return confirm('kamu tidak bisa menghapus selagi kamu login?');" style="margin-left: 10px;">Delete</button>
                          @endif
                      </td>
                    </tr>
                    @endforeach
                    @php
                      $number++
                    @endphp
                    
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
   
    
      
@endsection