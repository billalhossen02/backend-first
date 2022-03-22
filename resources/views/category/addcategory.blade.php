@extends('welcome')


@section('content')

<form action="{{route('add/category')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Name">
      </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Image">
    </div>
  
    <div class="form-group">
        <label for="price">Description</label>
        <input type="integer" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Add Category</button>
  </form>

@endsection