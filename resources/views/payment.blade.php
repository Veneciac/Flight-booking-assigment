@extends('layout')

@section('title', 'Booking')

@section('content')

<div>
    <div class="container mt-5 mb-5 mx-5" id="regForm" style="display: block">
        <div class="mx-auto">
            <div class="card">
            <div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-body">
                            <form name="registerForm" method="POST" action="/ticket/create" enctype="multipart/form-data">
                                @csrf
                                <table class="table-borderless table">
                                    <tr>
                                        <td>
                                            <label for="asal" class="form-label" style="float: left;">Kota Asal </label>
                                            <input type="text" class="form-control mb-3" name="asal" value="{{ $flight->asal }}" disabled>
                                        </td>
                                        <td>
                                            <label for="tujuan" class="form-label" style="float: left;">Kota Tujuan </label>
                                            <input type="text" class="form-control mb-3" name="tujuan" value="{{ $flight->tujuan }}" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="tanggal" class="form-label" style="float: left;">Tanggal </label>
                                            <input type="text" class="form-control mb-3" name="tanggal" value="{{ $flight->tanggal }}" disabled>
                                        </td>
                                        <td>
                                            <label for="Waktu Penerbangan" class="form-label" style="float: left;">Waktu </label>
                                            <input type="text" class="form-control mb-3" name="waktu" value="{{ $flight->jam }}" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="harga" class="form-label" style="float: left;">Harga </label>
                                            <input type="text" class="form-control mb-3" name="harga" value="Rp. {{ $flight->harga }}, 00" disabled>
                                        </td>
                                        <td>
                                            <label for="method" class="form-label" style="float: left;">Metode Pembayaran </label>
                                            <select class="form-select" aria-label="Default select example" name="method">
                                                <option selected>Pilih Metode Pembayaran</option>
                                                <option value="Bank Mandiri">Bank Mandiri</option>
                                                <option value="Bank BNI">Bank BNI</option>
                                                <option value="Bank BCA">Bank BCA</option>
                                                <option value="Bank CIMB Niaga">Bank CIMB Niaga</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" value="{{$flight->id}}" name="flightID">
                                <input type="hidden" value="{{session('userID')}}" name="userID">                                
                                <a style="text-decoration: none" href="login.php">
                                <button type="submit" class="btn btn-primary mb-3 " style="float: right; ">Book</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

@endsection