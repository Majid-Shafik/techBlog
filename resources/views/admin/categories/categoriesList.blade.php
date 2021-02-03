@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('admin/dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Categories List Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Categories</h1>
          <div class="col-12">
            {{ session('meesage') }}
              @if ( session()->has('meesage'))
                  <div class="alert-success">
                      {{ session()->get('message')}}
                  </div>
              @else
              <div class="alert-dander">
                {{ Session::get('error')}}
            </div>
              @endif
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Categories Table </div>
            <div class="card-body">
              <div class="pull-right">
                <a  href="{{route('category.create')}}" class="btn btn-info">Add New</a>
                </div>
              <div class="table-responsive">
                
                <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                   
                    <div class="row">
                      <div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                  
                    <tr>
                      <th rowspan="1" colspan="1">Id</th>
                      <th rowspan="1" colspan="1">Name</th>
                      <th rowspan="1" colspan="1">Is Active</th>
                      <th rowspan="1" colspan="1">Parent</th>
                      <th rowspan="1" colspan="1">created at</th>
                   
                      <th rowspan="1" colspan="1"> </th>
                    </tr>
                  
                  <tbody>
                   @foreach ($catlist as $catrow)
                   <tr role="row" class="odd">
                    <td class="sorting_1">{{$catrow->id}}</td>
                    <td>{{$catrow->name}}</td>
                    <td>@if ($catrow->is_active==1) Active @else Not Active @endif
                    <td>{{$catrow->parent}}</td>
                    <td>{{$catrow->created_at}}</td>
                   
                    <td> 

                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </div>

                    </td>

                  </tr>
                   @endforeach   
                  
                  </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 41 to 50 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
