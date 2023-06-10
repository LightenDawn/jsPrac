@extends('template')

@section('title', 'Basics')

@section('custom_head')
    @include('prac.css.basicCss')
@endsection

@section('content')
    <header>
        <h1>The Unconventional Calculator</h1>
    </header>

    <section id="calculator">
        <input type="number" id="input-number" />
        <div id="calc-actions">
            <button type="button" id="btn-add">+</button>
            <button type="button" id="btn-subtract">-</button>
            <button type="button" id="btn-multiply">*</button>
            <button type="button" id="btn-divide">/</button>
        </div>
    </section>
    <section id="results">
        <h2 id="current-calculation">0</h2>
        <h2>Result: <span id="current-result">0</span></h2>
    </section>

    @include('prac.javascript.basicJs')
    @include('prac.javascript.appJs')
@endsection
