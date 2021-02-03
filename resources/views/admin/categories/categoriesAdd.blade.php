@extends('admin.layout.master')
@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('admin/dashboard')}}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Add New Category</li>
    </ol>
    <div class="row">
      <div class="col-12">
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Category Name:</label>
                <input type="text" class="form-control"  name="cat_name" aria-describedby="emailHelp"  >
                <small id="emailHelp" class="form-text text-muted">You can not leave it null.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Parent Category</label>
                    <select class="form-control" name="cat_parent" id="exampleFormControlSelect1">
                      <option value="0">Main Category</option>
                       @foreach ($parent_cat as $rows)
                       <option value="{{$rows->id}}">{{$rows->name}}</option>
                       @endforeach
                    </select>
                  </div>
                
                <div class="form-check px-5">
                <input type="checkbox" class="form-check-input" name="cat_active" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Is Active</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>

@endsection