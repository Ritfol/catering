@extends('layouts.customer')

@section('content')


    <div class="container">

        <br>
        <h2 style="font-weight: bold;text-align: center;">Tomorrow's food</h2><br>

        <div class="d-flex justify-content-around row">
            <div class="p-1">
                <img src="http://via.placeholder.com/200x200">
            </div>
            <div class="p-1">
                <img src="http://via.placeholder.com/200x200">
            </div>
            <div class="p-1">
                <img src="http://via.placeholder.com/200x200">
            </div>
            <div class="p-1">
                <img src="http://via.placeholder.com/200x200">
            </div>
        </div>
        <!------//row---------------->
        <br>

        <div class="row">

            <div class="card" style="width: 800px;">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th>ID</th>
                            <th>Item</th>
                            <th>Amount</th>
                            <th>Price</th>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Breakfast</td>
                                <td>1</td>
                                <td>4000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Lunch</td>
                                <td>1</td>
                                <td>4000</td>
                            </tr>
                            <p><b>Total:</b> 8000/=</p>
                            </tbody>

                        </table>
                    </div>

                    <a href="#" class="btn btn-primary">Submit</a> <a href="#" class="btn btn-primary">Clear</a>
                </div>
            </div>

        </div>
        <!------//row---------------->
        <br><br>
    </div>


@endsection