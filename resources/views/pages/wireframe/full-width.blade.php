@extends('main')

@section('title', 'Full Width')

@section('pageTitle', 'Full Width')


@section('stylesheets')

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">
                {!! Html::image('/img/hero/full-width.jpg', '', array('class' => 'img-responsive')) !!}
                <div class="ibox">
                    <div class="ibox-content">
                        <h2>@yield('pageTitle')</h2>
                        <p class="lead" data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        <h3>Heading 3 Subtitle</h3>
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="4"></p>
                        <hr>
                        <a class="btn btn-success">Button</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection