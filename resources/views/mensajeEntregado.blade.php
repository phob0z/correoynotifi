@extends('layouts.app')

@section('content')
    @notifyCss
    <div class="container mt-5 col-12 col-sm-6">
        <br><br>
        <p class="text text-center h2">Mail entregado satisfactoriamente</p>
        <br>
    </div>
    <br>
    <hr class="featurette-divider">
    <br>
    <div class="image-container">
        <img src="https://www.megaidea.net/wp-content/uploads/2018/07/DORAEMON-20.png" width="50%" height="350px" />
    </div>
    @notifyJs
@endsection
