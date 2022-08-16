@extends('layout')

@section('title', 'Daftar Penerbangan')

@section('content')
<div>
    <div class="container mt-5 mb-5" style="display: block">
        <div class="mx-auto">
            
                <div>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

                <table class="table table-hover table-bordered text-center">
        <thead>
          <tr>
            <th scope="col"> Kota Asal </th>
            <th scope="col"> Kota Tujuan </th>
            <th scope="col"> Tanggal Penerbangan </th>
            <th scope="col"> Waktu Penerbangan </th>
            <th scope="col"> Harga </th>
            <th> </th>
          </tr>
        </thead>
         <tbody>
          @foreach ( $flight as $fl )
          <tr>
            <td>{{$fl->asal}}</td>
            <td>{{$fl->tujuan}}</td>
            <td>{{$fl->tanggal}}</td>
            <td>{{$fl->jam}}</td>
            <td>{{$fl->harga}}</td>
            <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="/flight/{{ $fl->id }}/book" class="btn btn-primary btn-sm">Booking</a>
            </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
        </div>
        {{ $flight->links() }}
    </div>
</div>
</body>
</html>

@endsection

<!-- @if(session('userID'))
    <div> <h2> {{ session('userID') }} </h2> </div>
@endif -->