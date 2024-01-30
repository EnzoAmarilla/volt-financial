<div class="container-fluid vw-100 p-0">
    <div class="row align-items-center justify-content-end">
        <div class="col-lg-5 col-md-6 flex-direction-column align-items-start">
            <p class="font-weight-medium mb-2">{{ $pretxt }}</p>
            <h4 class="title-footer white-space">{{ $title }}</h4>
            <div class="horizontal-bar-3"></div>
            <p class="mb-3">
                <img class="mr-icon-1" src="{{ asset('images/Icons/Roof.svg') }}" alt="">
                <strong>{{ $text1 }}</strong>
            </p>
            <p class="mb-3">
                <img class="mr-icon-2" src="{{ asset('images/Icons/Subtract.svg') }}" alt="">
                <strong>{{ $text2 }}</strong>
            </p>
            <p class="">
                <img class="mr-icon-3" src="{{ asset('images/Icons/Efficient.svg') }}" alt="">
                <strong>{{ $text3 }}</strong>
            </p>
        </div>
        <div class="col-lg-6 col-md-6 text-center p-0 text-md-right">
            <img data-src={{ $img }} alt="" class="lazyload">
        </div>
    </div><!-- end row -->
</div>