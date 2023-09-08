@extends('main.sidebar')
@section('container')
    <div class="container-div">
        <h2 style="color:white;">Data Portofolio</h2>
        <div class="container-row">
        <div class="card-search" style="margin-left:10%"> 
          {{-- <span class="position-absolute search">
            
          </span> --}}
          <i class="fa fa-search" style="margin-bottom: 15px; margin-right:10px;"></i>
          <input class="form-control" style="height:100%; padding-inline-start: 3px;width:90%;" placeholder="Search by order#, name...">
        </div>
        <button class="button-card" style="margin-right:10%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class='bx bx-plus' style="color:white" ></i>
          <p><a href="#" style="text-decoration: none;color:white;">Insert</a></p>
        </button>

{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> --}}

</div>
      <div class="card-table">
            <div class="container mt-3 px-2">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div class="container-row">
                      <div class="container-column">
                        <p class="info"><b>Portfolio</b></p>
                        <p><b>{{ $data_to_update->count() }} total,</b> project have done</p>
                      </div>
                      
                     
                      {{-- <div class="container-row" style="width:30%;">
                        <div class="container-column">
                          <p class="info"><b>{{  ($data2->count() != 0)? $data_to_update->where('id_category', $data2->where('id',1)->first()->id)->count() : '' }}</b></p>
                          <p>{{ ($data2->count() != 0)? $data2->where('id',1)->first()->nama : '' }}</p>
                        </div>
                        <div class="container-column">
                          <p class="info"><b>{{ ($data2->count() != 0)? $data_to_update->where('id_category', $data2->where('id',2)->first()->id)->count():'' }}</b></p>
                          <p>{{ ($data2->count() != 0)? $data2->where('id',2)->first()->nama : '' }}</p>
                        </div>
                        <div class="container-column">
                          <p class="info"><b>{{ ($data2->count() != 0)? $data_to_update->whereNotIn('id_category', [1,2])->count() : '' }}</b></p>
                          <p>{{ ($data2->count() != 0)? 'Other' : '' }} </p>
                        </div>
                      </div> --}}
                        
                    </div>   
                    
                </div>
                {{-- <form name="form_delete" method="POST" @disabled(true) action="{{ route('portofolio.delete') }}"> --}}
                  {{-- @csrf --}}
                <div class="table-responsive">
                <table class="table table-responsive table-borderless mb-4">
                    
                  <thead>
                    <tr class="bg-light">
                      {{-- <th scope="col" width="5%"></th> --}}
                      <th scope="col" width="5%">Name</th>
                      <th scope="col" width="10%">Tech Stack</th>
                      <th scope="col" width="10%">Kontributor</th>
                      <th scope="col" width="20%">Link</th>
                      <th scope="col" width="5%">Durasi (hari)</th>
                      <th scope="col" width="10%">Category</th>
                      <th scope="col" class="text-end" width="15%"><span>Aksi</span></th>
                      {{-- <th scope="col" class="text-end" width="5%"><span>Hapus</span></th> --}}
                    </tr>
                  </thead>
              <tbody>

                @foreach($data as $j)
                <tr>
                  {{-- <th scope="row"><input class="form-check-input" value="{{ $j->id }}" name="id[{{ $j->id }}]" id="checkItem" type="checkbox"></th> --}}
                  <td>{{ $j->judul }}</td>
                  <td>{{ $j->tech_stack }}</td>
                  <td>{{ $j->contributors }}</td>
                  <td><a href="{{ $j->link }}" style="text-decoration: none;">{{ $j->link }}</a></td>
                  <td>{{ $j->durasi }} Hari</td>
                  <td>{{ $data2->where('id',$j->id_category)->first()->nama }}</td>
                  
                  <td class="div-end">
                    <div class="container-row">
                    
                    <a class="card-button-update" href="{{ route('portofolio.edit', $j->id) }}">
                    <button class="card-button-update" data-bs-toggle="modal" data-bs-target="#updateModal"><i class="bx bx-edit"></i></button></a>
                    

                    <a onclick="return confirm('Anda yakin ingin menghapus data ini ?')" class="card-button-delete" style="text-decoration: none;color:white;" href="{{ route('portofolio.delete', $j->id) }}">
                    <i class="bx bx-trash"></i></a>
                    
                    </div>
                  </td>
                  
                  <td class="div-end">
                  </td>
                  
                </tr>
                @endforeach  
              </tbody>
            </table>
            {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
            
              
            </div>
        </div>
    </div>
          
@endsection

@section('content')
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Data Portfolio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form  method="POST" action="{{ route('portofolio.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input placeholder="project name" id="name" name="name" class="form-input">
                </div>

                <div class="form-group">
                  <label for="name">gambar</label>
                  <input type="file" placeholder="gambar watermark" id="name" name="gambar" class="form-input">
                </div>
                
                <div class="form-group">
                <label for="tag-input">Tech Stack</label>
                    <span><p style="color:rgb(164, 160, 160);font-size:12px;">*pisahkan dengan (,)</p></span>
                    <input type="text" name="teknologi" class="form-input" placeholder="e.g php,laravel"  id="tag-input"/>
                </div>    
                
                <div class="form-group">
                <label for="tag-input">Kontributor</label>
                    <span><p style="color:rgb(164, 160, 160);font-size:12px;">*pisahkan dengan (,)</p></span>
                    <input type="text" name="contributor" class="form-input" placeholder="nama kontributor"  id="tag-input"/>
                </div>    
                                    
                <div class="form-group">
                    <label for="name">Category</label>
                    {{-- <input placeholder="project category" id="name" name="category" class="form-input"> --}}
                <select class="form-input" name="category" required id="category">
                    <option value="category" selected>--select category--</option>
                    @foreach($data2 as $i)
                        <option value="{{ $i->id }}" {{$i->id == $i->id  ? 'selected' : ''}}>{{ $i->nama }}</option>
                    @endforeach
                </select>
                </div>

                <div class="form-group">
                    <label for="name">Durasi Pengerjaan (hari)</label>
                    <input type="number" placeholder="e.g. 30" id="durasi" name="durasi" class="form-input">
                </div>

                <div class="form-group">
                    <label for="name">Link to Project</label>
                    <input type="text" placeholder="https://github.example.com" id="link" name="link" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="review">Review</label>
                    <!-- Create the editor container -->
                     
                        <div id="summernote" name="editor"></div>
                     
                    {{-- <input placeholder="name" id="name" name="name" class="form-input"> --}}
                </div>
                <div class="modal-footer">
                <a href="{{ route('portofolio.store') }}">
                <button type="submit" class="btn btn-primary">Save</button>    
                </a>  
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('library')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- <script src="{{ url('js/tag.js') }}"></script> --}}
{{-- <script src="{{ url('js/preview.js') }}"></script> --}}
<script src="{{ asset('js/summer.js') }}"></script>
<script src="{{ asset('js/openModal.js') }}"></script>
{{-- <script src="{{ url('js/openCategoryModal.js') }}"></script> --}}
{{-- <script src="{{ url('js/checkbox.js') }}"></script> --}}
<script src="{{ asset('js/currencyFormat.js') }}"></script>
<script src="{{ asset('summernote/summernote-lite.js') }}"></script>
@endsection