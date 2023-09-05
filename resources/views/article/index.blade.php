@extends('article.layouts.main')

@push('style')
<link rel="stylesheet" href="{{ asset('css/articlestyle.css') }}" />
@endpush

@section('content')

    <h1 class="mb-3 text-center">All post</h1>

    <div class="card mb-4">
      <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
        <a href="/blog?category=test" class="text-white text-decoration-none fs-4">Website</a></div>
      <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top" 
      alt="">
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/blog/" class="text-decoration-none text-dark fs-1">Lorem ipsum dolor sit.</a></h3>
        <p>
          <small class="text-body-secondary fs-5">
              {{-- By <a href="/blog?author=" class="text-decoration-none"><span class="link">sadf</span></a> in <a href="/blog?category=" class="text-decoration-none"><span class="link">asdfsadf</span>
              </a> asdf --}}
              Last updated 3 mins ago
          </small>
        </p>
        <p class="card-text fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora amet hic reiciendis repellendus eveniet minus eum esse deleniti debitis, sapiente et accusamus dignissimos dicta ea illum accusantium quidem veritatis? Corporis!</p>
        <a href="/blog/" class="text-decoration-none btn btn-custom fs-5">Read more</a>
        {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
      </div>
    </div>

    <div class="posts">
        <div class="row">
            
            <div class="col-md-4 mb-4">
                <div class="card"">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                        <a href="/blog?category=test" class="text-white text-decoration-none fs-4">Website</a></div>
                    <img src="https://source.unsplash.com/500x400?programming" class="card-img-top" 
                    alt="programming">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/blog/" class="text-decoration-none text-dark fs-1">Lorem ipsum dolor sit.</a></h5>
                      <p>
                        <small class="text-body-secondary fs-5">
                            {{-- By <a href="/blog?author=" class="text-decoration-none"><span class="link">test</span>
                            </a>  --}} 2 mins ago
                        </small>
                      </p>
                      <p class="card-text fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugiat amet? Eos aut iste deleniti saepe ex repellat harum hic temporibus asperiores eligendi, ipsa perferendis accusantium assumenda explicabo eum a.</p>
                      <a href="/blog/" class="btn btn-custom2 fs-5">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card"">
                  <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                      <a href="/blog?category=test" class="text-white text-decoration-none fs-4">Aplikasi</a></div>
                  <img src="https://source.unsplash.com/500x400?programming" class="card-img-top" 
                  alt="programming">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/blog/" class="text-decoration-none text-dark fs-1">Lorem ipsum dolor sit.</a></h5>
                    <p>
                      <small class="text-body-secondary fs-5">
                          {{-- By <a href="/blog?author=" class="text-decoration-none"><span class="link">test</span>
                          </a>  --}} 2 mins ago
                      </small>
                    </p>
                    <p class="card-text fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugiat amet? Eos aut iste deleniti saepe ex repellat harum hic temporibus asperiores eligendi, ipsa perferendis accusantium assumenda explicabo eum a.</p>
                    <a href="/blog/" class="btn btn-custom2 fs-5">Read more</a>
                  </div>
              </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card"">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                    <a href="/blog?category=test" class="text-white text-decoration-none fs-4">Design</a></div>
                <img src="https://source.unsplash.com/500x400?programming" class="card-img-top" 
                alt="programming">
                <div class="card-body">
                  <h5 class="card-title"><a href="/blog/" class="text-decoration-none text-dark fs-1">Lorem ipsum dolor sit.</a></h5>
                  <p>
                    <small class="text-body-secondary fs-5">
                        {{-- By <a href="/blog?author=" class="text-decoration-none"><span class="link">test</span>
                        </a>  --}} 2 mins ago
                    </small>
                  </p>
                  <p class="card-text fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugiat amet? Eos aut iste deleniti saepe ex repellat harum hic temporibus asperiores eligendi, ipsa perferendis accusantium assumenda explicabo eum a.</p>
                  <a href="/blog/" class="btn btn-custom2 fs-5">Read more</a>
                </div>
            </div>
        </div>
            
        </div>
    </div>
    <div class="d-flex justify-content-end">
      test
    </div>
@endsection