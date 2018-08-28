@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 30px;">

        <div class="card" style="padding: 30px;" >

            <form action="{{ route('admin.addMeal') }}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}

                <legend><b>Add images for tomorrow's meals</b></legend>
                <br>
                <div class="form-group">
                    <label for="breakfast">Breakfast</label>
                    <input type="text" name="breakfast_name" placeholder="Name of meal" required>
                    <input type="file" name="breakfast" required>
                </div>

                <div class="form-group">
                    <label for="lunch">Lunch</label>
                    <input type="text" name="lunch_name" placeholder="Name of meal" required>
                    <input type="file" name="lunch" required>
                </div>

                <div class="form-group">
                    <label for="dinner">Dinner</label>
                    <input type="text" name="dinner_name" placeholder="Name of meal" required>
                    <input type="file" name="dinner" required>
                </div>


                <div class="form-group">
                    <label for="drink">Drink</label>
                    <input type="text" name="drink_name" placeholder="Name of drink" required>
                    <input type="file" name="drink" required>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <!--------------end of card------------------------------------------------->

    </div>

@endsection