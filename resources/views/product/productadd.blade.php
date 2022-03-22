
@extends('welcome')


@section('content')

<form action="{{route('add/product')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Name">
      </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Image">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price">
    </div>

    <div class="form-group">
        <label for="category">Choose a Category:</label>
            @foreach ($categories as $category)
            <select name="category">
              <option value="">.....</option>
            <option value="{{$category->name}}">{{$category->name}}</option>
            </select>
            @endforeach
      </div>

      <div class="form-group">
        <label for="price">Description</label>
        <input type="integer" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Add Product</button>
  </form>

@endsection