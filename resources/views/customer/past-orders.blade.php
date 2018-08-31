@extends('layouts.customer')

@section('content')

    <div class="container">

        <br>
        <div class="row">

            <div class="card" style="width: 800px;">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th>Meals bought</th>
                            <th>Total</th>
                            <th>Date</th>
                            </thead>

                            <tbody>
                            @foreach( $orders as $order)
                            <tr>
                                <td>{{ $order->getNumberOfMeals($order) }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->date }}</td>
                            </tr>
                            @endforeach
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            </nav>
                            </tbody>

                        </table>
                    </div>


                </div>
            </div>

        </div>
        <!------//row---------------->

        <br><br>
    </div>

@endsection