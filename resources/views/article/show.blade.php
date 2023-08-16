@extends('article.layouts.main')

@push('style')
<link rel="stylesheet" href="{{ asset('css/showstyle.css') }}" />
@endpush

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="bord col-md-8">
            <h1 class="mb-3 fs-1">Lorem, ipsum dolor.</h1>

            <p>By <a href="/blog?author=">Lorem, ipsum dolor.</a> in <a href="/blog?category=">Lorem, ipsum dolor.</a></p>

            <img src="https://source.unsplash.com/1200x400?programming" alt="" class="img-fluid">

            <article class="my-3 fs-3">
                {{-- {!! $post->body !!} --}}
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta velit porro repellat facere nulla. Iusto, porro. Iusto sed laborum eaque consequatur magni non dolore alias, omnis explicabo, iste, illum molestiae.
            </article>

            <a href="/blog" class="d-block mt-3 fs-3">Back to post</a>

        </div>

        <div class="col-md-4">

            <div class="r-judul">
                <h1>Informasi</h1>
            </div>

            <ul class="r-info">
                <li>
                    <p><span>Lama pengerjaan : </span> asdfsadf</p>
                </li>
                <li><p><span>Link : </span> asdfsadf</p></li>
                <li><p><span>Contribution : </span> asdfasfsadf</p></li>
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
    
@endsection
