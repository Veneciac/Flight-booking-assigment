@extends('layout')

@section('title', 'Tiket')

@section('content')

<div>
    <div class="container mt-5 mb-5 mx-5" id="regForm" style="display: block">
        <div class="mx-auto">
            <div class="card mx-5">
                <div class="card-header text-start"><h5>E-Ticket</h5></div>
                <div class="card-body">
                    <table class="table table-sm table-borderless">
                    <tr>
                        <td>
                            <label for="nama" class="form-label" style="float: left;">Nama Lengkap </label>
                            <input type="text" class="form-control mb-3" name="nama" value="{{ $ticket->nama }}" readonly>
                        </td>
                        <td>
                            <label for="jk" class="form-label" style="float: left;">Jenis Kelamin </label>
                            <input type="text" class="form-control mb-3" name="jk" value="{{ $ticket->jk }}" readonly>
                        </td>
                        <td>
                            <label for="umur" class="form-label" style="float: left;">Umur </label>
                            <input type="text" class="form-control mb-3" name="umur" value="{{ $ticket->umur }} tahun" readonly>
                        </td>
                    </tr>
                    </table>
                    <table class="table table-sm table-borderless">
                    <tr>
                        <td>
                            <label for="asal" class="form-label" style="float: left;">Kota Asal </label>
                            <input type="text" class="form-control mb-3" name="asal" value="{{ $ticket->asal }}" readonly>
                        </td>
                        <td>
                            <label for="tujuan" class="form-label" style="float: left;">Kota Tujuan </label>
                            <input type="text" class="form-control mb-3" name="tujuan" value="{{ $ticket->tujuan }}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tanggal" class="form-label" style="float: left;">Tanggal </label>
                            <input type="text" class="form-control mb-3" name="tanggal" value="{{ $ticket->tanggal }}" readonly>
                        </td>
                        <td>
                            <label for="Waktu Penerbangan" class="form-label" style="float: left;">Waktu </label>
                            <input type="text" class="form-control mb-3" name="waktu" value="{{ $ticket->jam }}" readonly>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

@endsection