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
        <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="dropdown-img">
                <img src="{{ asset('images/world.png') }}" alt="world">
            </div>
            <div class="dropdown-translate-div">
                <span>繁體中文</span>
                <div class="dropdown-img">
                    <img src="{{ asset('images/arrow.png') }}" alt="arrow" class="arrow">
                </div>
            </div>
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="dropdown-memu-div">
                <li class="dropdown-item">
                    <a href="#">Some text</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Some text</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Some text</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Some text</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Some text</a>
                </li>
            </div>
        </ul>
    </div>
    @include('prac.javascript.testJs')
@endsection
