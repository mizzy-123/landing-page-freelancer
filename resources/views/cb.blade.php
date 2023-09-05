<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 5</title>
    <!-- include libraries(jQuery, bootstrap) -->
    {{-- <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{ url('summernote/summernote-bs4.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    {{-- <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script> --}}
    <script src="{{ asset('summernote/summernote-lite.js') }}"></script>
    {{-- <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}

  </head>
  <body>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data Project</h5>
         <a href="#"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </a>
      </div>
      <div class="modal-body">
        <div class="container">
            <form  method="POST" action="{{ route('project.store') }}">
                @csrf
                {{-- <td>{{ $j->nama }}</td>
                  <td>{{ $j->status }}</td>
                  <td>{{ $j->deadline }} Hari</td>
                  <td>{{ $j->nama_client }}</td>
                  <td>Rp. {{ $j->fee }}</td>
                  <td>{{ $data2->where('id',$j->id_category)->first()->nama }}</td>
                  <td>{{ $j->note }}</td>
                   --}}
                
                <div class="form-group">
                    <label for="name">Name</label>
                    {{-- <input value="{{ $projek->nama }}" placeholder="project name" id="name" name="name" class="form-input"> --}}
                </div>
                
                <div class="form-group">
                <label for="tag-input">Status</label>
                    <select class="form-input" name="status" required id="category">
                    {{-- <option value="status" selected>--select status--</option> --}}
                    {{-- @foreach($status_indikator as $i) --}}
                        {{-- <option value="{{ $i }}" {{$i == $i  ? 'selected' : ''}}>{{ $i }}</option> --}}
                    {{-- @endforeach --}}
                </select>
                </div>    
                                    
                <div class="form-group">
                    <label for="name">Deadline</label>
                    {{-- <input placeholder="project category" id="name" name="category" class="form-input"> --}}
                    {{-- <input type="date" value="{{ $projek->deadline }}" id="deadline" name="deadline" class="form-input"> --}}
                </div>

                <div class="form-group">
                    <label for="name">Nama Client</label>
                    {{-- <input type="text" value="{{ $projek->nama_client }}" placeholder="nama client" id="client" name="client" class="form-input"> --}}
                </div>

                <div class="form-group">
                    <label for="name">Biaya</label>
                      {{-- <input type="text" value="{{ $projek->fee }}" placeholder="Rp 0" id="biaya" name="biaya" oninput="formatCurrency(this)" class="form-input"> --}}
                </div>
                
                <div class="form-group">
                    <label for="name">Category</label>
                    {{-- <input placeholder="project category" id="name" name="category" class="form-input"> --}}
                <select class="form-input" name="category" required id="category">
                    {{-- <option value="category" selected>--select category--</option> --}}
                    {{-- @foreach($data2 as $i) --}}
                        {{-- <option value="{{ $i->id }}" {{$i->id == $i->id  ? 'selected' : ''}}>{{ $i->nama }}</option> --}}
                    {{-- @endforeach --}}
                </select>
                </div>

                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-input" maxlength="80" name="note" id="note">{{ $projek->note }}</textarea>
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
        <a href="{{ route('portofolio.index') }}">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </a>  
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('js/openModal.js') }}"></script>

</html>