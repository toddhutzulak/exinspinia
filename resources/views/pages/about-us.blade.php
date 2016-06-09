@extends('main')

@section('title', 'About Us')

@section('pageTitle', 'About Us')


@section('stylesheets')

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">
                <h1>@yield('pageTitle')</h1>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-content">
                <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="2"></p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection