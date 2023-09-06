@extends('main.sidebar') 
@section('container')
<div class="container-div">
    <div class="card-table">
        <div class="container mt-3 px-2">
            <div class="mb-2 d-flex justify-content-between align-items-center">
                <div class="container-row">
                    <div class="container-column">
                        <p class="info"><b>Scan whatssapp</b></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <p>Untuk mengirim pesan,</p>
                        <p>Anda harus Scan QRCODE untuk menghubungkan server ke WhatsApp</p>
                        <br>
                        <ol>
                            <li>Buka aplikasi <strong>WhatsApp</strong> di ponsel Anda</li>
                            <li>Ketuk <strong>Menu</strong> atau <strong>Setelan</strong> dan pilih Perangkat tertaut</li>
                            <li>Scan QRCODE dan tunggu hingga terhubung</li>
                            <li>Tetap hidupkan ponsel Anda dan sambungkan ke internet</li>
                            <li>Jika kode QR tidak muncul silahkan Refresh</li>
                        </ol>
                    </div>
                    <div class="col-md-4" id="qrcode">
                        <img class="mb-4" src="{{ $status ? $qr : asset('images/ceklist.png') }}" alt="qrcode" id="qrgenerate" width="276px" height="276px">
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="{{ route('scan') }}">
                                Refresh
                            </a>
                            <a class="btn btn-danger" href="{{ route('disconnect') }}">
                                Disconnect
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
@section('library')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
{{--
<script src="{{ url('js/tag.js') }}"></script>
--}} {{--
<script src="{{ url('js/preview.js') }}"></script>
--}}
<script src="{{ asset('js/summer.js') }}"></script>
<script src="{{ asset('js/openModal.js') }}"></script>
{{--
<script src="{{ url('js/openCategoryModal.js') }}"></script>
--}} {{--
<script src="{{ url('js/checkbox.js') }}"></script>
--}}
<script src="{{ asset('js/currencyFormat.js') }}"></script>
<script src="{{ asset('summernote/summernote-lite.js') }}"></script>
<script>
    function getChange(status) {
        if (status == 1) {
            var qrImageURL = "{{ asset('images/ceklist.png') }}";
            $("#qrgenerate").attr("src", qrImageURL);
        }
    }
    
    function getWhatsAppStatus() {
        $.ajax({
            url: "/statuswa",
            type: "GET",
            success: function (response) {
                // Update tampilan dengan status WhatsApp terbaru
                getChange(response.status);
            },
        });
    }
    
    setInterval(getWhatsAppStatus, 5000); // Polling setiap 5 detik
    
    </script>
@endsection
