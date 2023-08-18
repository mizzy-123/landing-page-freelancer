@extends('main.sidebar')
@section('container')
    <div class="container-div">
        <h2 style="color:white;">Data Category</h2>
        <div class="container-row">
        <div class="card-search" style="margin-left:10%"> 
          {{-- <span class="position-absolute search">
            
          </span> --}}
          <i class="fa fa-search" style="margin-bottom: 15px; margin-right:10px;"></i>
          <input class="form-control" style="height:100%; padding-inline-start: 3px;width:90%;" placeholder="Search by order#, name...">
        </div>
        <button class="button-card" style="margin-right:10%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class='bx bx-plus' style="color:white" ></i>
          <p><a href="#" style="text-decoration: none;color:white;">Tambah</a></p>
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
                        <p class="info"><b>Category</b></p>
                        <p><b>20 total,</b> category services</p>
                   </div>  
                    </div>   
                </div>
                
                <div class="table-responsive">
                <table class="table table-responsive table-borderless">
                    
                  <thead>
                    <tr class="bg-light">
                      <th scope="col" width="5%">ID</th>
                      <th scope="col" width="50%">Category Name</th>
                      <th scope="col" class="text-end" width="5%"><span>Aksi</span></th>
                    </tr>
                  </thead>
              <tbody>

                  @foreach ($data_paginate as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>{{ $i->nama }}</td>
                      <td class="div-end">
                      <div class="container-row">
                      
                      <a class="card-button-update" href="{{ route('category.edit', $i->id) }}">
                      <button class="card-button-update" data-bs-toggle="modal" data-bs-target="#updateModal">
                        <i class="bx bx-edit"></i>
                      </button>
                      </a>
                      <a onclick="return confirm('Anda yakin ingin menghapus data ini ?')" class="card-button-delete" style="text-decoration: none;color:white;" href="{{ route('category.delete', $i->id) }}">
                      <i class="bx bx-trash"></i></a>
                      </div>
                    </td>
                    </tr>      
                  @endforeach
                 
              </tbody>
            </table>
                {!! $data_paginate->withQueryString()->links('pagination::bootstrap-5') !!}
              </div>
              <div class="container" style="justify-content: end; align-items:center;display:flex;">
                <button class="card-button-delete" style="margin-bottom:10px;height:8vh;">
                  <i class='bx bx-trash' style="color:white"></i>
                </button>
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
        <h5 class="modal-title" id="exampleModalLabel">New Data Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input placeholder="category name" id="name" name="name" class="form-input">
                </div>
                
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>    
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

@section('content')
    <!-- Update Modal -->
<div class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data Category</h5>
        <a href="{{ route('category.index') }}">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </a>
      </div>
      <div class="modal-body">
        <div class="container">
            <form method="POST"  action="{{ route('category.update', $category->id) }}">
                @csrf   
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input placeholder="category name" id="name" value="{{ $category->nama }}" name="name" class="form-input">
                </div>
                
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>    
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="{{ route('category.index') }}">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
