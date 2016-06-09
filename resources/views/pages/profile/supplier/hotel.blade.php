@extends('main')

@section('title', 'Hotel | Supplier')

@section('pageTitle', 'Andaz Amsterdam Prinsengracht')
@section('supplierName', 'Andaz Amsterdam Prinsengracht')

@section('stylesheets')
    {!! Html::style('/css/plugins/blueimp/css/blueimp-gallery.min.css') !!}
    {!! Html::style('/css/plugins/footable/footable.core.css') !!}
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

                <div class="ibox shadow collapsed">
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

                <div class="ibox shadow collapsed">
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

                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Photos</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        <hr>

                        <div id="blueimpHotelLightBoxGallery" class="lightBoxGallery">
                            <a href="/img/supplier/hotel/andaz/living_area.png" title="Living Area Of The Andaz Suite" data-description="Enjoy the added comfort of a separate living area" data-gallery="">
                            {!! Html::image('/img/supplier/hotel/andaz/living_area.png', 'Living Area', array('style'=>'width:120px; height:120px;')) !!}
                            </a>
                            <a href="/img/supplier/hotel/andaz/suite.png" title="The Andaz Suite Is Reminiscent Of A Metropolitan Apartment" data-description="Enjoy natural daylight while relaxing in the easy reading chair." data-gallery="">
                                {!! Html::image('/img/supplier/hotel/andaz/suite.png', 'Suite', array('style'=>'width:120px; height:120px;')) !!}
                            </a>
                            <a href="/img/supplier/hotel/andaz/bathroom.png" title="Bathroom Of The Andaz Suite" data-description="The Andaz Suite features a spacious bathroom including a seperate bathtub." data-gallery="">
                                {!! Html::image('/img/supplier/hotel/andaz/bathroom.png', 'Bathroom', array('style'=>'width:120px; height:120px;')) !!}
                            </a>
                        </div>

                        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                            <div class="slides"></div>
                            <h3 class="title"></h3>
                            <p class="description"></p>
                            <a class="prev">‹</a>
                            <a class="next">›</a>
                            <a class="close"><i class="fa fa-close"></i></a>
                            <a class="play-pause"></a>
                            <ol class="indicator"></ol>
                        </div>

                    </div>
                </div>

                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Specialist Programs &amp; Certifications</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="2"></p>
                    </div>
                </div>


                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Hotels</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <input type="text" class="form-control input-sm m-b-xs" id="supplierFilter" placeholder="Search @yield('supplierName') hotels &hellip;">

                                <table class="footable table table-stripped" data-page-size="2" data-filter=#supplierFilter>
                                    <thead>
                                    <tr>
                                        <th style="width: 25%;">Image</th>
                                        <th style="width: 20%;">Brand/Hotel</th>
                                        <th style="width: 55%;">Location</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/escape.jpg', 'Norwegian Escape', array('class'=>'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Escape</td>
                                        <td><p data-holder-ipsum-mode="sentence"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/breakaway.jpg', 'Norwegian Breakaway', array('class'=>'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Breakaway</td>
                                        <td><p data-holder-ipsum-mode="sentence"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/jade.jpg', 'Norwegian Jade', array('class'=>'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Jade</td>
                                        <td><p data-holder-ipsum-mode="sentence"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/getaway.jpg', 'Norwegian Getaway', array('class'=>'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Getaway</td>
                                        <td><p data-holder-ipsum-mode="sentence"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/gem.jpg', 'Norwegian Gem', array('class'=>'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Gem</td>
                                        <td><p data-holder-ipsum-mode="sentence"></p></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! Html::image('/img/supplier/cruise/ncl/epic.jpg', 'Norwegian Epic', array('class'=>'img-responsive')) !!}
                                        </td>
                                        <td>Norwegian Epic</td>
                                        <td><p data-holder-ipsum-mode="sentence"></p></td>
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
                <div class="ibox-content">
                    {!! Html::image('/img/logo/supplier/andaz.png', 'Andaz Logo', array('class'=>'img-responsive logo-supplier-profile')) !!}
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
@endsection

@section('scripts')
    {!! Html::script('/js/plugins/footable/footable.all.min.js') !!}
    <script>
        $(document).ready(function() {
            $('.footable').footable();
        });
    </script>

    {!! Html::script('/js/plugins/blueimp/jquery.blueimp-gallery.min.js') !!}
    <script>
        document.getElementById('blueimpHotelLightBoxGallery').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event, onslide: function (index, slide) {
                    var text = this.list[index].getAttribute('data-description'),
                            node = this.container.find('.description');
                    node.empty();
                    if (text) {
                        node[0].innerHTML = text;
                    }
                } },
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
@endsection