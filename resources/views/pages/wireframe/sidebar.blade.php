@extends('main')

@section('title', 'Sidebar')

@section('pageTitle', 'Sidebar')


@section('stylesheets')

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-8">
                {!! Html::image('/img/hero/sidebar.jpg', '', array('class' => 'img-responsive')) !!}
                <div class="ibox">
                    <div class="ibox-content">
                        <h2>@yield('pageTitle')</h2>
                        <p class="lead" data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                        <h3>Heading 3 Subtitle</h3>
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="2"></p>
                        <hr>
                        <a class="btn btn-success">Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="sortable-view">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Sidebar Widget <span class="badge badge-danger">Drag me up or down to reposition!</span></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content padding-20">
                            <h4>Widget Title </h4>
                            <p data-holder-ipsum-mode="sentence" style="font-size:0.875em; line-height: 1.25;"></p>
                        </div>
                    </div>
                </div>
                <div id="sortable-view">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Sidebar Widget</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h4>Widget Title</h4>
                            <p data-holder-ipsum-mode="sentence" style="font-size:0.875em; line-height: 1.25;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('/js/plugins/jquery-ui/jquery-ui.min.js') !!}
    <script>
        $(document).ready(function(){
            <!-- Enable portlets -->
            WinMove();
        });
    </script>
@endsection