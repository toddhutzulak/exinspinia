@extends('main')

@section('title', 'Terms of Use')

@section('pageTitle', 'Terms of Use')


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
                <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="4"></p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection