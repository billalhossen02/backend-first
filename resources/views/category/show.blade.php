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
                            <td>Description</td>
                        </tr>
                    </thead>
    
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td><img src="{{asset('CategoryImage/'.$category->image)}}" alt="No Image"></td>
                            <td>{{ $category->description}}</td>
                            <td>
                                <td><a href="{{url('edit/category/'.$category->id)}}" class="btn btn-warning"><i class="la la-pencil"></i></a></td>
                                <td><a href="{{url('delete/category/'.$category->id)}}" class="btn btn-danger"><i class="las la-trash"></i></a></td>
    
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
    
                
            </table>
    
    
    @endsection
    