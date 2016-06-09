@extends('main')

@section('title', 'Cruise | Supplier')

@section('pageTitle', 'Norwegian Cruise Line')
@section('supplierName', 'Norwegian Cruise Line')



@section('stylesheets')
    <link href="/css/plugins/footable/footable.core.css" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1>@yield('supplierName')</h1>
                    </div>
                </div>

                <div class="ibox shadow">
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

                <div class="ibox collapsed shadow">
                    <div class="ibox-title">
                        <h5>Selling Points</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        <ul data-holder-ipsum-mode="children"
                            data-holder-ipsum-children-mode="words"
                            data-holder-ipsum-children-element="li"
                            data-holder-ipsum-children-count="10"
                            data-holder-ipsum-children-words-count="10">
                        </ul>
                    </div>
                </div>

                <div class="ibox collapsed shadow">
                    <div class="ibox-title">
                        <h5>General Information</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="2"></p>
                    </div>
                </div>

                <div class="ibox collapsed shadow">
                    <div class="ibox-title">
                        <h5>Groups</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="2"></p>
                    </div>
                </div>

                <div class="ibox collapsed shadow">
                    <div class="ibox-title">
                        <h5>Ships</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="input-group" style="margin-bottom: 40px;">
                                    <input type="text" class="form-control" id="shipFilter" placeholder="Start typing to search @yield('supplierName') ships &hellip;">
                                    <span class="input-group-btn">
                                        <button class="btn button-primary">Search</button>
                                    </span>
                                </div>

                                <table class="footable table table-stripped" data-page-size="2" data-filter=#shipFilter>
                                    <thead>
                                    <tr>
                                        <th style="width: 25%;">Image</th>
                                        <th style="width: 20%;">Ship</th>
                                        <th style="width: 55%;">Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/escape.jp', 'Ship Name', array('class' => 'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Escape</td>
                                        <td><p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/breakaway.jp', 'Ship Name', array('class' => 'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Breakaway</td>
                                        <td><p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/jade.jp', 'Ship Name', array('class' => 'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Jade</td>
                                        <td><p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/getaway.jp', 'Ship Name', array('class' => 'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Getaway</td>
                                        <td><p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/gem.jp', 'Ship Name', array('class' => 'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Gem</td>
                                        <td><p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/epic.jp', 'Ship Name', array('class' => 'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Epic</td>
                                        <td><p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content">
                        {!! Html::image('/img/logo/supplier/ncl.png', 'Supplier Logo', array('class'=>'img-responsive')) !!}
                    </div>
                </div>
                <div class="tabs-container">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation"><a href="#tabItinerary" aria-controls="tabItinerary" role="tab" data-toggle="tab">Contact</a></li>
                        <li class="" role="presentation"><a href="#tabCommission" aria-controls="tabCommission" role="tab" data-toggle="tab">Hours</a></li>
                        <li class="" role="presentation"><a href="#tabContact" aria-controls="tabContact" role="tab" data-toggle="tab">Payment</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" id="tabItinerary" class="tab-pane fade in active">
                            <div class="panel-body">
                                @include('partials.content_blocks._profile-sidebar')
                                <hr>
                                @include('partials.content_blocks._links')
                            </div>
                        </div>
                        <div role="tabpanel" id="tabCommission" class="tab-pane fade">
                            <div class="panel-body">
                                @include('partials.content_blocks._hours')
                            </div>
                        </div>
                        <div role="tabpanel" id="tabContact" class="tab-pane fade">
                            <div class="panel-body">
                                @include('partials.content_blocks._billing')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('/js/plugins/footable/footable.all.min.js') !!}
    <script>
        $(document).ready(function() {
            $('.footable').footable();
        });
    </script>
@endsection