<div class="container-fluid vw-100 p-0">
    <div class="row align-items-center">
        <div class="col-lg-7">
            <div class="text-container-1">
                <p class="font-weight-medium">{{ $pretxt }}</p>
                <h3>{{ $title }}</h3>
                <div class="horizontal-bar-2"></div>
                <h6>{{ $subtitle }}</h6>
                <span>{{ $title_sm }}</span>
                <p>
                    <img src={{ $bullet }} class="bullet" alt="">
                    <strong>{{ $boldtxt1 }}</strong>
                    {{ $text1 }}
                </p>
                <p>
                    <img src={{ $bullet }} class="bullet" alt="">
                    <strong>{{ $boldtxt2 }}</strong>
                    {{ $text2 }}
                </p>
                <p>
                    <img src={{ $bullet }} class="bullet" alt="">
                    <strong>{{ $boldtxt3 }}</strong>
                    {{ $text3 }}
                </p>
                <p>
                    <img src={{ $bullet }} class="bullet" alt="">
                    <strong>{{ $boldtxt4 }}</strong>
                    {{ $text4 }}
                </p>
                <p>
                    <img src={{ $bullet }} class="bullet" alt="">
                    <strong>{{ $boldtxt5 }}</strong>
                    {{ $text5 }}
                </p>
            </div>
        </div>
        <div class="col-lg-5 p-0">
            <img class="mr-0" src={{ $img }} alt="">
        </div>
    </div>
</div>
