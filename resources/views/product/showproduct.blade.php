<style>
img{
    height: 40;
    width: 70;
}

</style>


@extends('welcome')


@section('content')


        <table class="table">
                <thead class="thead" style="color:black; border:3px solid black">
                    <tr>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Price</td>
                        <td>Category</td>
                        <td>Description</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{asset('ProductImage/'.$product->image)}}" alt="No Image"></td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->category}}</td>
                        <td>{{ $product->description}}</td>
                        <td>
                            <td><a href="{{url('edit/product/'.$product->id)}}" class="btn btn-warning"><i class="la la-pencil"></i></a></td>
                            <td><a href="{{url('delete/product/'.$product->id)}}" class="btn btn-danger"><i class="las la-trash"></i></a></td>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            
        </table>


@endsection
