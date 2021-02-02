@extends('admin.layout.master')
@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('admin/dashboard')}}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Add New Articles</li>
    </ol>
    <div class="row">
      <div class="col-12">
            <form action="{{route('article.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Article Title:</label>
                    <input type="text" class="form-control"  name="art_title" aria-describedby="emailHelp"  >
                    <small id="emailHelp" class="form-text text-muted">You can not leave it null.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Content:</label>
                    <textarea id="textarea" class="form-control"  name="art_content" rows="3" cols='50'></textarea>
                    <small id="emailHelp" class="form-text text-muted">You can not leave it null.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control" name="art_cat" id="exampleFormControlSelect1">
                      <option value="0">Main Category</option>
                       @foreach ($parent_cat as $rows)
                       <option value="{{$rows->id}}">{{$rows->name}}</option>
                       @endforeach
                    </select>
                  </div>
                
                <div class="form-check px-5">
                <input type="checkbox" class="form-check-input" name="art_active" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Is Active</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>

@endsection