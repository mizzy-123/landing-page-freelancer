@extends('main.sidebar')
@section('container')
    <div class="row" style="display: block;position:absolute; justify-content:center;">
        <h1 style="color:white;">Dashboard</h1>
    <div class="card-container" style="margin-top:10px;">
        <div class="card">
            <div class="card-content">
                <h3>Today Visitor</h3>
                <p><b>10</b></p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Total Project</h3>
                <p><b>10</b></p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Income</h3>
                <p>Rp<b>43,000</b></p>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="container" style="display: block;position: absolute;">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        nikmat irama
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>   
</div>
    </div>
@endsection