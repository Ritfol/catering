@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 30px;">

        <div class="card" style="padding: 30px;" >

            <form action="{{ route('admin.addMeal') }}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}

                <legend><b>Add images for tomorrow's meals</b></legend>
                <br>
                {{--<div class="form-group">--}}
                    {{--<label for="breakfast">Breakfast</label>--}}
                    {{--<input type="text" name="breakfast_name" placeholder="Name of meal" required>--}}
                    {{--<label for="breakfast">Price</label>--}}
                    {{--<input type="text" name="breakfast_name" placeholder="Name of meal" required>--}}
                    {{--<input type="file" name="breakfast" required>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="lunch">Lunch</label>--}}
                    {{--<input type="text" name="lunch_name" placeholder="Name of meal" required>--}}
                    {{--<input type="file" name="lunch" required>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="dinner">Dinner</label>--}}
                    {{--<input type="text" name="dinner_name" placeholder="Name of meal" required>--}}
                    {{--<input type="file" name="dinner" required>--}}
                {{--</div>--}}


                {{--<div class="form-group">--}}
                    {{--<label for="drink">Drink</label>--}}
                    {{--<input type="text" name="drink_name" placeholder="Name of drink" required>--}}
                    {{--<input type="file" name="drink" required>--}}
                {{--</div>--}}

                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Meal Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><label for="breakfast">Breakfast</label></td>
                        <td><input type="text" name="breakfast_name" placeholder="" value="{{ old('breakfast_name') }}" required></td>
                        <td><input type="number" name="breakfast_price" placeholder="" value="1500" required></td>
                        <td><input type="file" name="breakfast" required></td>
                    </tr>
                    <tr>
                        <td><label for="breakfast">Lunch</label></td>
                        <td><input type="text" name="lunch_name" placeholder="" value="{{ old('lunch_name') }}" required></td>
                        <td><input type="number" name="lunch_price" placeholder="" value="3000" required></td>
                        <td><input type="file" name="lunch" required></td>
                    </tr>
                    <tr>
                        <td><label for="breakfast">Dinner</label></td>
                        <td><input type="text" name="dinner_name" placeholder="" value="{{ old('dinner_name') }}" required></td>
                        <td><input type="number" name="dinner_price" placeholder="" value="3500" required></td>
                        <td><input type="file" name="dinner" required></td>
                    </tr>
                    <tr>
                        <td><label for="breakfast">Drink</label></td>
                        <td><input type="text" name="drink_name" placeholder="" value="{{ old('drink_name') }}" required></td>
                        <td><input type="number" name="drink_price" placeholder="" value="2500" required></td>
                        <td><input type="file" name="drink" required></td>
                    </tr>
                    </tbody>
                </table>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <!--------------end of card------------------------------------------------->

    </div>

@endsection