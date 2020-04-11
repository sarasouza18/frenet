@extends('layout')

@section('content')
    <div class="row">
        <div id="chart_frenet" class="col-lg-12">

        </div>
        <div class="col-lg-6">
            <form method="POST" action="/frenet" enctype="multipart/form-data" class="col-lg-9">
                <h4>Convert axis to Frenet</h4>
                {{ csrf_field() }}
                <label for="name">X axis</label>
                <input type="number" class="form-control " name="x" required>
                <br>
                <label for="email">Y axis</label>
                <input type="number" class="form-control" name="y" required>
                <br>
                <label for="number">Theta</label>
                <input type="number" class="form-control" name="theta" required>
                <br>
                <label for="name">RX</label>
                <input type="number" class="form-control" name="rx" required>
                <br>
                <label for="email">RY</label>
                <input type="number" class="form-control" name="ry" required>
                <br>
                <div class="pt-3 py-4 col-md-6 justify-content-center">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h4> Frenet Coordinates</h4>
            <h6> d = {{ $axisD ?? '' }}</h6>
            <h6> r = ?</h6>
        </div>
    </div>

@endsection
