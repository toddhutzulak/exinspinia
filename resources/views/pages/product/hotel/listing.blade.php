@extends('main')

@section('title', 'Hotel | Listing')

@section('pageTitle', 'Hotel Listing')
@section('supplierName', 'Hotel Listing')



@section('stylesheets')

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1>@yield('supplierName')</h1>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Commission Information</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        @include('partials.content_blocks._commission-table')
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content">
                        {!! Html::image('/img/logo/supplier/ncl.png', 'Andaz Logo', array('class'=>'img-responsive')) !!}
                        <div style="text-align: center;">
                            <hr>
                            @include('partials.content_blocks._profile-sidebar')
                            <hr>
                            @include('partials.content_blocks._links')
                            <hr>
                            @include('partials.content_blocks._hours')
                            <hr>
                            @include('partials.content_blocks._billing')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection