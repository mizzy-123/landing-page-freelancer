@extends('article.layouts.main')

@push('style')
<link rel="stylesheet" href="{{ asset('css/articlestyle.css') }}" />
@endpush

@section('content')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    @if ($article->count())
    <div class="card mb-4">
      <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
        <a href="/article?category={{ $article[0]->category->first()->slug }}" class="text-white text-decoration-none fs-4">{{ $article[0]->category->first()->nama }}</a></div>
      <img src="{{ asset('storage/'.$article[0]->gambar) }}" class="card-img-top" 
      alt="">
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/blog/" class="text-decoration-none text-dark fs-1">{{ $article[0]->judul }}</a></h3>
        <p>
          <small class="text-body-secondary fs-5">
              {{-- By <a href="/blog?author=" class="text-decoration-none"><span class="link">sadf</span></a> in <a href="/blog?category=" class="text-decoration-none"><span class="link">asdfsadf</span>
              </a> asdf --}}
              Last updated {{ $article[0]->updated_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text fs-3">{{ $article[0]->excerpt }}</p>
        <a href="/show/{{ $article[0]->slug }}" class="text-decoration-none btn btn-custom fs-5">Read more</a>
        {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
      </div>
    </div>

    <div class="posts">
        <div class="row">
            @foreach ($article->skip(1) as $a)
            <div class="col-md-4 mb-4">
                <div class="card"">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                        <a href="/article?category={{ $a->category->first()->slug }}" class="text-white text-decoration-none fs-4">{{ $a->category->first()->nama }}</a></div>
                    <img src="{{ asset('storage/'.$a->gambar) }}" class="card-img-top" 
                    alt="programming">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/show" class="text-decoration-none text-dark fs-1">{{ $a->judul }}</a></h5>
                      <p>
                        <small class="text-body-secondary fs-5">
                            {{-- By <a href="/blog?author=" class="text-decoration-none"><span class="link">test</span>
                            </a>  --}} {{ $a->updated_at->diffForHumans() }}
                        </small>
                      </p>
                      <p class="card-text fs-4">{{ $a->excerpt }}</p>
                      <a href="/show/{{ $a->slug }}" class="btn btn-custom2 fs-5">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Article Found</p>
    @endif
    
    <div class="d-flex justify-content-end" id="pagination">
      {{ $article->links() }}
    </div>

    @push('js')
        <script src="{{ asset('js/pagination.js') }}"></script>
    @endpush
    
@endsection