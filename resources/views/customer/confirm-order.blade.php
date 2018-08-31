@extends('layouts.customer')

@section('content')

    <!------//row---------------->
        <div class="row">

            <div class="card" style="width: 800px;">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th>Item</th>
                            <th>Name</th>
                            <th>Price</th>
                            </thead>

                            <tbody>
                            @if($order->breakfast)
                                <tr>
                                    <td>Breakfast</td>
                                    <td>{{ $meal->breakfast_name }}</td>
                                    <td>{{ $meal->breakfast_price }}</td>
                                </tr>
                            @endif
                            @if($order->lunch)
                                <tr>
                                    <td>Lunch</td>
                                    <td>{{ $meal->lunch_name }}</td>
                                    <td>{{ $meal->lunch_price }}</td>
                                </tr>
                            @endif
                            @if($order->dinner)
                                <tr>
                                    <td>Dinner</td>
                                    <td>{{ $meal->dinner_name }}</td>
                                    <td>{{ $meal->dinner_price }}</td>
                                </tr>
                            @endif
                            @if($order->drink)
                                <tr>
                                    <td>Drink</td>
                                    <td>{{ $meal->drink_name }}</td>
                                    <td>{{ $meal->drink_price }}</td>
                                </tr>
                            <p><b>Total:</b> {{ $order->price }}/=</p>
                            @endif
                            </tbody>

                        </table>
                    </div>

                    <a href="{{ route('customer.dashboard')}}"><button type="submit" class="btn btn-primary btn-block">Submit</button></a>
                </div>
            </div>

        </div>

    <!------//row---------------->

@endsection