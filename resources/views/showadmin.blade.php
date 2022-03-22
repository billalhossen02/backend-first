@extends('welcome')


@section('content')


        <table class="table">
                <thead class="thead" style="color:black; border:3px solid black">
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Password</td>
                    </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach
                </tbody>

            
        </table>


@endsection
