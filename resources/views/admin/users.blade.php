@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 30px;">
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Enabled/Disabled</th>
                    <th scope="col">Delete user</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $customers as $customer)
                <tr>
                    <td>{{ $customer->user->name }}</td>
                    <td>{{ $customer->user->phone_number }}</td>
                    <td>{{ $customer->user->email }}</td>
                    <td>{{ $customer->location }}</td>
                    <td>{{ $customer->description }}</td>
                    @if($customer->enabled)
                        <td><button type="button" class="btn btn-outline-success">Enabled</button></td>
                    @else
                        <td><button type="button" class="btn btn-outline-warning">Disabled</button></td>
                    @endif
                    <td><a href="{{ route('admin.delete-user' , $customer->user) }}"><button type="button" class="btn btn-outline-danger">Delete?</button></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>



    </div>

@endsection