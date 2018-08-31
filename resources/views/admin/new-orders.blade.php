@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 10px;">
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Order</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $orders as $order)
                    <tr>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->customer($order)->phone_number }}</td>
                        <td>{{ $order->customer($order)->location }}</td>
                        <td>{{ $order->customer($order)->description }}</td>
                        <td>{{ $order->getMealsBought($order) }}</td>
                        @if($order->status)
                            <td><a href="{{ route('admin.deliver' , $order) }}"><button type="button" class="btn btn-outline-success">Delivered</button></a></td>
                        @else
                            <td><a href="{{ route('admin.deliver' , $order) }}"><button type="button" class="btn btn-outline-warning">Not delivered</button></a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



    </div>

@endsection