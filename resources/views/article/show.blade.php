@extends('article.layouts.main')

@push('style')
<link rel="stylesheet" href="{{ asset('css/showstyle.css') }}" />
@endpush

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="bord col-md-8">
            <h1 class="mb-3 fs-1 text-center">{{ $article->judul }}</h1>
            {{-- <h1 class="mb-3 fs-1">Lorem, ipsum dolor.</h1>

            <p>By <a href="/blog?author=">Lorem, ipsum dolor.</a> in <a href="/blog?category=">Lorem, ipsum dolor.</a></p>

            <img src="https://source.unsplash.com/1200x400?programming" alt="" class="img-fluid"> --}}

            <article class="my-3 fs-3" style="word-wrap: break-word;" id="article">
                {!! $article->isi !!}
            </article>

            <a href="/article" class="d-block mt-3 fs-3">Back to post</a>

        </div>

        <div class="col-md-4">

            <div class="r-judul">
                <h1>Informasi</h1>
            </div>

            <ul class="r-info">
                <li><p><span>Tech stack : </span> {{ $article->tech_stack != null? $article->tech_stack : '' }}</p></li>
                <li>
                    <p><span>Lama pengerjaan : </span> {{ $article->durasi }} hari</p>
                </li>
                <li><p><span>Link : </span> <a href="{{ $article->link != null? $article->link : '#' }}">{{ $article->link != null? $article->link : '' }}</a></p></li>
                {{-- <li><p><span>Contribution : </span> asdfasfsadf</p></li> --}}
            </ul>

            <div class="custom-box">
                <a href="#" class="btn-logo">
                    <i class="bx bxl-whatsapp"></i>
                    <p>Konsultasikan sekarang</p>
                </a>
            </div>
            

        </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/article_detail.js') }}"></script>
@endpush
    
@endsection
