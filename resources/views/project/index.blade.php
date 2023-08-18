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
        <button class="button-card" style="margin-right:10%;">
          <i class='bx bx-plus' style="color:white" ></i>
          <p><a href="#" style="text-decoration: none;color:white;">Tambah</a></p>
        </button>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
     
        <div class="card-table">
            <div class="container mt-3 px-2">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div class="container-row">
                      <div class="container-column">
                        <p class="info"><b>Last Task</b></p>
                        <p><b>117 total,</b> sedang dalam proses</p>
                      </div>
                      <div class="container-row" style="width:20%;">
                        <div class="container-column">
                          <p class="info"><b>90</b></p>
                          <p>Done</p>
                        </div>
                        <div class="container-column">
                          <p class="info"><b>23</b></p>
                          <p>In Progress</p>
                        </div>
                      </div>
                      
                    </div>   
                    
                    
          
                    
                </div>
                
                <div class="table-responsive">
                <table class="table table-responsive table-borderless">
                    
                  <thead>
                    <tr class="bg-light">
                      <th scope="col" width="5%"><input class="form-check-input" type="checkbox"></th>
                      <th scope="col" width="5%">Name</th>
                      <th scope="col" width="20%">Deadline</th>
                      <th scope="col" width="10%">Status</th>
                      <th scope="col" width="20%">Customer</th>
                      <th scope="col" width="20%">Category</th>
                      <th scope="col" class="text-end" width="20%"><span>Edit</span></th>
                    </tr>
                  </thead>
              <tbody>
                <tr>
                  <th scope="row"><input class="form-check-input" type="checkbox"></th>
                  <td>Whatsapp Clone</td>
                  <td>1 Oct, 21</td>
                  <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                  <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                  <td>Wirecard for figma</td>
                  <td class="div-end"><a class="card-button-update">
                    <button class="card-button-update"><i class="bx bx-edit"></i></button></a>
                  </td>
                </tr>
                
                <tr>
                  <th scope="row"><input class="form-check-input" type="checkbox"></th>
                  <td>14</td>
                  <td>12 Oct, 21</td>
                  <td><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">Failed</span></td>
                  <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Tomo arvis</td>
                  <td>Altroz furry</td>
                  <td class="div-end"><a class="card-button-update">
                    <button class="card-button-update"><i class="bx bx-edit"></i></button></a>
                  </td>
                </tr>
                
                
                <tr>
                  <th scope="row"><input class="form-check-input" type="checkbox"></th>
                  <td>17</td>
                  <td>1 Nov, 21</td>
                  <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                  <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                  <td>Apple Macbook air</td>
                  <td class="div-end"><a class="card-button-update">
                    <button class="card-button-update"><i class="bx bx-edit"></i></button></a>
                  </td>
                </tr>
                
                
                <tr>
                  <th scope="row"><input class="form-check-input" type="checkbox"></th>
                  <td>90</td>
                  <td>19 Oct, 21</td>
                  <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                  <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Travis head</td>
                  <td>Apple Macbook Pro</td>
                  <td class="div-end"><a class="card-button-update">
                    <button class="card-button-update"><i class="bx bx-edit"></i></button></a>
                  </td>
                </tr>
                
                
                <tr>
                  <th scope="row"><input class="form-check-input" type="checkbox"></th>
                  <td>Whatsapp Clone</td>
                  <td>1 Oct, 21</td>
                  <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                  <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Althan Travis</td>
                  <td>Wirecard for figma</td>
                  <td class="div-end"><a class="card-button-update">
                    <button class="card-button-update"><i class="bx bx-edit"></i></button></a>
                  </td>
                </tr>
              </tbody>
            </table>

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