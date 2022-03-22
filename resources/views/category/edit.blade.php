
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
    img{
        height: 200;
        width: 300;
    }

    .col-md-12{
        display: grid;
        justify-content: center;
        align-content: center;
    }
</style>

<div class="row">
    <div class="col-md-12">
<form action="{{url('update/category/'.$category->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$category->name}}">
      </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" vlaue="{{$category->image}}">
      <img src="{{asset('CategoryImage/'.$category->image)}}" alt="No Image">

    </div>
  
    <div class="form-group">
        <label for="price">Description</label>
        <input type="integer" name="description" class="form-control" id="exampleInputPassword1" value="{{$category->description}}">
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Update Category</button>
  </form>

</div>
</div>