@extends('layouts.app')
@section('title', 'Cards')
@section('content')

<h1 class="h3 mb-3">Cards</h1>
<div class="row">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="img/photos/unsplash-1.jpg" alt="Unsplash">
            <div class="card-header">
                <h5 class="card-title mb-0">Card with image and links</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="img/photos/unsplash-2.jpg" alt="Unsplash">
            <div class="card-header">
                <h5 class="card-title mb-0">Card with image and button</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="img/photos/unsplash-3.jpg" alt="Unsplash">
            <div class="card-header">
                <h5 class="card-title mb-0">Card with image and list</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Card with links</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Card with button</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Card with list</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
</div>

@endsection