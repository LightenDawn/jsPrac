@extends('template')

@section('title', 'ORM')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>
@include('prac.css.testCss')
@section('custom_head')

@endsection

@section('content')
    <div class="dropdown">
        <label class="dropdown-desc">Lorem ipsum</label>
        <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="dropdown-translate-div">
                <span data-value>Lorem text</span>
                <div class="dropdown-img">
                    <img src="{{ asset('images/arrow.png') }}" alt="arrow" class="arrow">
                </div>
            </div>
        </a>
        <label class="dropdown-helper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, labore.</label>
        <div class="error-msg">
            <p>Error message</p>
        </div>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="dropdown-item">
                <a href="#">1</a>
            </li>
            <li class="dropdown-item">
                <a href="#">2</a>
            </li>
            <li class="dropdown-item">
                <a href="#">3</a>
            </li>
            <li class="dropdown-item">
                <a href="#">4</a>
            </li>
            <li class="dropdown-item">
                <a href="#">5</a>
            </li>
        </ul>
    </div>


    <div class="dropdown">
        <label class="dropdown-desc">Lorem ipsum</label>
        <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="dropdown-translate-div">
                <span data-value>Lorem text</span>
                <div class="dropdown-img">
                    <img src="{{ asset('images/arrow.png') }}" alt="arrow" class="arrow">
                </div>
            </div>
        </a>
        <label class="dropdown-helper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, labore.</label>
        <div class="error-msg">
            <p>Error message</p>
        </div>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="dropdown-item">
                <a href="#">1</a>
            </li>
            <li class="dropdown-item">
                <a href="#">2</a>
            </li>
            <li class="dropdown-item">
                <a href="#">3</a>
            </li>
            <li class="dropdown-item">
                <a href="#">4</a>
            </li>
            <li class="dropdown-item">
                <a href="#">5</a>
            </li>
        </ul>
    </div>
    <button class="btn" id="submit">Submit</button>
    @include('prac.javascript.testJs')
@endsection
