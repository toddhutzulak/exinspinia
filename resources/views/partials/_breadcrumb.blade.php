<div class="row wrapper page-heading">
    <div class="col-lg-8">
        <!-- <h2 class="white">@yield('supplierName')</h2> -->
        <ol class="breadcrumb">
            <li class="text-muted"><a href="index.html">Home</a></li>
            <li class="text-muted"><a>Bread</a></li>
            <li class="text-muted"><a>Crumb</a></li>
            <li class="active"><strong>@yield('pageTitle')</strong></li>
        </ol>
    </div>
    <div class="col-lg-4">
        <div class="title-action">
            <ul class="list-inline">
                @yield('productActions')
                <li><a href="" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> Edit Page</a></li>
            </ul>
        </div>
    </div>
</div>