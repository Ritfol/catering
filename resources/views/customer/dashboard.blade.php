@extends('layouts.customer')

@section('content')


    <div class="container">

        <br>
        <h2 style="font-weight: bold;text-align: center;">Tomorrow's food</h2><br>
        <form action="{{ route('customer.toConfirm') }}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}

            <div class="d-flex justify-content-around row">
                <div class="p-1">
                    <img src="{{ url($meal->breakfast) }}" width="200px" height="200px">
                    <div>
                        <label for="breakfast_checkbox">Breakfast</label>
                        <input type="checkbox" name="breakfast_checkbox">
                    </div>

                </div>
                <div class="p-1">
                    <img src="{{ url($meal->lunch) }}" width="200px" height="200px">
                    <div>
                        <label for="lunch_checkbox">Lunch</label>
                        <input type="checkbox" name="lunch_checkbox">
                    </div>
                </div>
                <div class="p-1">
                    <img src="{{ url($meal->dinner) }}" width="200px" height="200px">
                    <div>
                        <label for="dinner_checkbox">Dinner</label>
                        <input type="checkbox" name="dinner_checkbox">
                    </div>
                </div>
                <div class="p-1">
                    <img src="{{ url($meal->drink) }}" width="200px" height="200px">
                    <div>
                        <label for="drink_checkbox">Drink</label>
                        <input type="checkbox" name="drink_checkbox">
                    </div>

                </div>
            </div>
            {{--<!------//row---------------->--}}
            {{--<br>--}}

            {{--<div class="row">--}}

                {{--<div class="card" style="width: 800px;">--}}

                    {{--<div class="card-body">--}}
                        {{--<div class="table-responsive">--}}
                            {{--<table class="table">--}}
                                {{--<thead>--}}
                                {{--<th>ID</th>--}}
                                {{--<th>Item</th>--}}
                                {{--<th>Amount</th>--}}
                                {{--<th>Price</th>--}}
                                {{--</thead>--}}

                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td>1</td>--}}
                                    {{--<td>Breakfast</td>--}}
                                    {{--<td>1</td>--}}
                                    {{--<td>4000</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>2</td>--}}
                                    {{--<td>Lunch</td>--}}
                                    {{--<td>1</td>--}}
                                    {{--<td>4000</td>--}}
                                {{--</tr>--}}
                                {{--<p><b>Total:</b> 8000/=</p>--}}
                                {{--</tbody>--}}

                            {{--</table>--}}
                        {{--</div>--}}

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
            {{--<!------//row---------------->--}}
        </form>

        <br><br>
    </div>


@endsection