<?php

/* @var $reviews App\Reviews[] */

?>
@extends('layout')

@section('content')
    @include('reviews_include/add_reviews_modal')

    <button type="button" class="btn btn-primary add_reviews_btn border-success"><i class="fa fa-plus" aria-hidden="true"></i> Оставить отзыв</button>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col" class="hidden-xs-down">Отзыв</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($reviews as $review)
            @include('reviews_include/review_item', ['review' => $review])
        @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-lg-12">
            {{ $reviews->withQueryString()->links() }}
        </div>
    </div>
@stop


@push('scripts')
    <script src="{{ asset('js/reviews.js') }}"></script>
@endpush
