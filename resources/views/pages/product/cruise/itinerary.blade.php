@extends('main')

@section('title', 'Cruise | Itinerary')

@section('pageTitle', '10-Day Canary Islands & Morocco')
@section('supplierName', '10-Day Canary Islands & Morocco')

@section('productActions')

    @include('partials.content_blocks._product-actions')

@endsection

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
                        <h1>@yield('pageTitle')</h1>
                    </div>
                </div>

                <!-- /////////// CONSUMER DISCLAIMER ////////// -->
                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Consumer Disclaimer</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                    </div>
                </div>

                <!-- /////////// PHOTOS ////////// -->
                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Photos <span class="label label-success">6</span></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
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

                <!-- /////////// ITINERARY DETAILS ////////// -->
                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Itinerary Details</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                    </div>
                </div>

                <!-- /////////// SAIL DATES ////////// -->
                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Sail Dates</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="tabs-container">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active" role="presentation"><a href="#tabItinerary" aria-controls="tabItinerary" role="tab" data-toggle="tab">Itinerary</a></li>
                                <li class="" role="presentation"><a href="#tabEtgGroup" aria-controls="tabEtgGroup" role="tab" data-toggle="tab">Ensemble Group</a></li>
                                <li class="" role="presentation"><a href="#tabCommission" aria-controls="tabCommission" role="tab" data-toggle="tab">Commission</a></li>
                                <li class="" role="presentation"><a href="#tabContact" aria-controls="tabContact" role="tab" data-toggle="tab">Contact</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" id="tabItinerary" class="tab-pane fade in active">
                                    <div class="panel-body">
                                        <table class="footable table table-stripped" data-page-size="10" data-filter=#supplierFilter>
                                            <thead>
                                            <tr>
                                                <th style="width: 20%;">Day</th>
                                                <th style="width: 30%;">Location</th>
                                                <th style="width: 25%;">Arrival Time</th>
                                                <th style="width: 25%;">Departure Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>2016/06/07</td>
                                                <td><p data-holder-ipsum-mode="words" data-holder-ipsum-words-count="2" data-holder-ipsum-words-common="false"></p></td>
                                                <td>09:00</td>
                                                <td>12:00</td>
                                            </tr>
                                            <tr>
                                                <td>2016/02/13</td>
                                                <td><p data-holder-ipsum-mode="words" data-holder-ipsum-words-count="2" data-holder-ipsum-words-common="false"></p></td>
                                                <td>13:30</td>
                                                <td>19:00</td>
                                            </tr>
                                            <tr>
                                                <td>2017/01/20</td>
                                                <td><p data-holder-ipsum-mode="words" data-holder-ipsum-words-count="2" data-holder-ipsum-words-common="false"></p></td>
                                                <td>12:00</td>
                                                <td>16:00</td>
                                            </tr>
                                            <tr>
                                                <td>2017/09/10</td>
                                                <td><p data-holder-ipsum-mode="words" data-holder-ipsum-words-count="2" data-holder-ipsum-words-common="false"></p></td>
                                                <td>18:45</td>
                                                <td>23:00</td>
                                            </tr>
                                            <tr>
                                                <td>2016/03/12</td>
                                                <td><p data-holder-ipsum-mode="words" data-holder-ipsum-words-count="2" data-holder-ipsum-words-common="false"></p></td>
                                                <td>08:30</td>
                                                <td>14:30</td>
                                            </tr>
                                            <tr>
                                                <td>2016/11/04</td>
                                                <td><p data-holder-ipsum-mode="words" data-holder-ipsum-words-count="2" data-holder-ipsum-words-common="false"></p></td>
                                                <td>13:00</td>
                                                <td>15:00</td>
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
                                        <ul class="list-inline list-unstyled">
                                            <li><a class="btn btn-primary btn-sm" href="#" target="_blank"><i class="fa fa-share fa-lg"></i> Share Itinerary</a></li>
                                            <li><a class="btn btn-primary btn-sm" href="#" target="_blank"><i class="fa fa-print fa-lg"></i> Print Itinerary</a></li>
                                            <li><a class="btn btn-primary btn-sm" href="#" target="_blank"><i class="fa fa-cloud-download fa-lg"></i> Download Itinerary</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" id="tabEtgGroup" class="tab-pane fade">
                                    <div class="panel-body">
                                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                                    </div>
                                </div>
                                <div role="tabpanel" id="tabCommission" class="tab-pane fade">
                                    <div class="panel-body">
                                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                                    </div>
                                </div>
                                <div role="tabpanel" id="tabContact" class="tab-pane fade">
                                    <div class="panel-body">
                                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /////////// CONTACT INFO ////////// -->
                <div class="ibox shadow collapsed">
                    <div class="ibox-title">
                        <h5>Contact Info</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                    </div>
                </div>


            </div>

            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content">
                        {!! Html::image('/img/logo/supplier/ncl.png', 'Supplier Logo', array('class'=>'img-responsive')) !!}
                    </div>
                </div>
                <div class="ibox" >
                    <div class="ibox-title bg-green">
                        <h5 class="white"><i class="fa fa-dollar fa-lg"></i> &nbsp;Upsell Opportunities</h5>
                    </div>
                    <div class="ibox-content padding-20">
                        <p class="small" data-holder-ipsum-mode="sentence"></p>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-title bg-green">
                        <h5 class="white"><i class="fa fa-check fa-lg"></i> &nbsp;Add-ons</h5>
                    </div>
                    <div class="ibox-content padding-20">
                        <p class="small" data-holder-ipsum-mode="sentence"></p>
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