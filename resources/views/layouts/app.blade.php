@include('layouts.header')

<div class="container">

    <div class="row">
        <div class="col-sm-8 blog-main">

            @yield('content')

        </div>

        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts.footer')
