@extends('layouts.app')

<style>
    .row {
        margin:0;
        justify-content:space-around;
    }
</style>

@section('content')
<div class="container">
    <div class="row">

        @foreach($cards as $card)
            <div class="card" style="width: 18rem;">
                <a href="{{ $card->href }}" target="_blank"><img src="{{ asset('images/') . $card->img }}" class="card-img-top" alt="{{ $card->alt }}"></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $card->title }}</h5>
                    <p class="card-text">{{ $card->text }}</p>
                    <a href="{{ $card->href }}" target="_blank" class="btn btn-primary">Go to...</a>
                </div>
            </div>
        @endforeach
    </div>
    <pre>{{ $cards[0]->alt }}</pre>
</div>

    <hr>

<?php
function getcards() {
    $values = DB::table('cards')->where('id', '>=', 1)
        ->get();


    echo "<pre>";
    print_r($values);

    echo $values[0]->title . '<br>';

    foreach ($values as $value)
        echo $value->title . '<br>';
}

getcards();

?>
@endsection

