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
                            @if(array_key_exists('breakfast_checkbox' , $order))
                                <tr>
                                    <td>Breakfast</td>
                                    <td>{{ $meal->breakfast_name }}</td>
                                    <td>{{ $meal->breakfast_price }}</td>
                                </tr>
                            @endif
                            @if(array_key_exists('lunch_checkbox' , $order))
                                <tr>
                                    <td>Lunch</td>
                                    <td>{{ $meal->lunch_name }}</td>
                                    <td>{{ $meal->lunch_price }}</td>
                                </tr>
                            @endif
                            @if(array_key_exists('dinner_checkbox' , $order))
                                <tr>
                                    <td>Dinner</td>
                                    <td>{{ $meal->dinner_name }}</td>
                                    <td>{{ $meal->dinner_price }}</td>
                                </tr>
                            @endif
                            @if(array_key_exists('drink_checkbox' , $order))
                                <tr>
                                    <td>Drink</td>
                                    <td>{{ $meal->drink_name }}</td>
                                    <td>{{ $meal->drink_price }}</td>
                                </tr>
                            @endif
                            <p><b>Total:</b> {{ $price }}/=</p>
                            </tbody>

                        </table>
                    </div>

                    <a href="{{ route('customer.order' , [ 'order' => $order , 'price' => $price]) }}"><button type="submit" class="btn btn-primary btn-block">Submit</button></a>
                </div>
            </div>

        </div>

    <!------//row---------------->

@endsection