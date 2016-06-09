@extends('main')

@section('title', 'Homepage')

@section('stylesheets')
    {!! Html::style('/css/plugins/toastr/toastr.min.css') !!}
@endsection

@section('content')
    <div class="alert alert-homepage alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close close-homepage-alert" type="button"><i class="fa fa-close"></i></button>
        <p>Red Alert Message. Donec id ex eget mi ullamcorper vulputate. Nunc eu arcu at tellus tempor finibus. {!! Html::link('#', 'Read More', array('style' => 'color:white; text-decoration:underline;')) !!}</p>
    </div>

    <div class="wrapper wrapper-content">
        <div class="row" id="sortable-view">
            <div class="col-md-6">
                <div class="ibox shadow">
                    <div class="ibox-title">
                        <h5>Drag &amp; Drop</h5>
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
                        <h3>Heading 3</h3>
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                    </div>
                </div>
                <div class="ibox shadow">
                    <div class="ibox-title">
                        <h5>Drag &amp; Drop</h5>
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
                        <h3>Heading 3</h3>
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox shadow">
                    <div class="ibox-title">
                        <h5>Drag &amp; Drop</h5>
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
                        <h3>Heading 3</h3>
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
                    </div>
                </div>
                <div class="ibox shadow">
                    <div class="ibox-title">
                        <h5>Drag &amp; Drop</h5>
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
                        <h3>Heading 3</h3>
                        <p data-holder-ipsum-mode="paragraphs" data-holder-ipsum-paragraphs-count="1"></p>
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


