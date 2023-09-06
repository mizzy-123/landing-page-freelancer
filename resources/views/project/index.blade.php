@extends('main.sidebar')
@section('container')
    <div class="container-div">
        <h2 style="color:white;">Data Project</h2>
        <div class="container-row">
        <div class="card-search" style="margin-left:10%"> 
          {{-- <span class="position-absolute search">
            
          </span> --}}
          <i class="fa fa-search" style="margin-bottom: 15px; margin-right:10px;"></i>
          <input class="form-control" style="height:100%; padding-inline-start: 3px;width:90%;" placeholder="Search by order#, name...">
        </div>
        <button class="button-card" style="margin-right:10%;padding-left:10px;padding-right:10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class='bx bx-plus' style="color:white" ></i>
          <p><a href="#" style="text-decoration: none;color:white;">Insert</a></p>
        </button>
</div>
     
      <div class="card-table">
            <div class="container mt-3 px-2">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div class="container-row">
                      <div class="container-column">
                        <p class="info"><b>Last Task</b></p>
                        <p><b>{{ $data->count() }} total, </b>either Done nor On Progress</p>
                      </div>
                      <div class="container-row" style="width:20%;">
                        <div class="container-column">
                          <p class="info"><b>{{ $data->where('status', 'done')->count() }}</b></p>
                          <p>Done</p>
                        </div>
                        <div class="container-column">
                          <p class="info"><b>{{ $data->whereNotIn('status', ['done'])->count() }}</b></p>
                          <p>On Progress</p>
                        </div>
                      </div>
                      
                    </div>   
                    
                </div>      
                <div class="table-responsive">
                <table class="table table-responsive table-borderless">
                    
                  <thead>
                    <tr class="bg-light">
                      <th scope="col" width="10%">Name</th>
                      <th scope="col" width="5%">Status</th>
                      <th scope="col" width="10%">Deadline</th>
                      <th scope="col" width="10%">Customer</th>
                      <th scope="col" width="20%">Biaya</th>
                      <th scope="col" width="10%">Category</th>
                      <th scope="col" width="20%">Note</th>
                      <th scope="col" class="text-end" width="20%"><span></span>Aksi</th>
                    </tr>
                  </thead>
              <tbody>
            @foreach($data_paginate as $j)
                {{-- $table->string('nama');
            $table->string('status');
            $table->BigInteger('fee');
            $table->datetime('deadline');
            $table->string('nama_client');
            $table->text('note')->nullable(true);    
            $table->UnsignedBigInteger('id_category'); --}}
                
                <tr>
                  {{-- <th scope="row"><input class="form-check-input" value="{{ $j->id }}" name="id[{{ $j->id }}]" id="checkItem" type="checkbox"></th> --}}
                  <td>{{ $j->nama }}</td>
                  
                  @if ($j->status == "done")
                    <td><div class="card-label" style="background-color:rgb(125, 242, 62) ">{{ $j->status }}</div> </td>
                  @elseif($j->status == "cancel")
                    <td><div class="card-label" style="background-color:rgb(217, 63, 63) ">{{ $j->status }}</div> </td>
                  @elseif($j->status == "testing")
                    <td><div class="card-label" style="background-color:rgb(67, 158, 227) ">{{ $j->status }}</div> </td>
                  @else
                    <td><div class="card-label" style="background-color:rgb(224, 224, 27) ">{{ $j->status }}</div> </td>
                  @endif
                  
                  @php
                    $tenggat = new DateTime($j->deadline);
                    $now = new DateTime(date("Y-m-d H:i:s", strtotime("now")));
                    $dif = $tenggat->diff($now); 
                    $jumlah = number_format($j->fee, 0 ,",", ".");  
                  @endphp

                  <td>{{ $dif->days }} Hari</td>
                  <td>{{ $j->nama_client }}</td>
                  <td>Rp {{ $jumlah }}</td>
                  <td>{{ $data2->where('id',$j->id_category)->first()->nama }}</td>
                  <td>{{ $j->note }}</td>
                  
                  <td class="div-end">
                    <div class="container-row">
                    
                    <a class="card-button-update" href="{{ route('project.edit', $j->id) }}">
                    <button class="card-button-update" data-bs-toggle="modal" data-bs-target="#updateModal"><i class="bx bx-edit"></i></button></a>
                    

                    <a onclick="return confirm('Anda yakin ingin menghapus data ini ?')" class="card-button-delete" style="text-decoration: none;color:white;" href="{{ route('project.delete', $j->id) }}">
                    <i class="bx bx-trash"></i></a>
                    
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
              {!! $data_paginate->withQueryString()->links('pagination::bootstrap-5') !!}
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
        <h5 class="modal-title" id="exampleModalLabel">New Data Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form  method="POST" action="{{ route('project.store') }}">
                @csrf
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input placeholder="project name" id="name" name="name" class="form-input">
                </div>
                
                <div class="form-group">
                <label for="tag-input">Status</label>
                    <select class="form-input" name="status" required id="category">
                    <option value="status" selected>--select status--</option>
                    @foreach($status_indikator as $i)
                        <option value="{{ $i }}" {{$i == $i  ? 'selected' : ''}}>{{ $i }}</option>
                    @endforeach
                </select>
                </div>    
                                    
                <div class="form-group">
                    <label for="name">Deadline</label>
                    {{-- <input placeholder="project category" id="name" name="category" class="form-input"> --}}
                    <input type="date" id="deadline" name="deadline" class="form-input">
                </div>

                <div class="form-group">
                    <label for="name">Nama Client</label>
                    <input type="text" placeholder="nama client" id="client" name="client" class="form-input">
                </div>

                <div class="form-group">
                    <label for="name">Biaya</label>
                      <input type="text" placeholder="Rp 0" id="biaya" name="biaya" oninput="formatCurrency(this)" class="form-input">
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
                    <label for="note">Note</label>
                    <textarea class="form-input" maxlength="80" name="note" id="note"></textarea>
                </div>

                <div class="modal-footer">
                <a href="{{ route('project.store') }}">
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