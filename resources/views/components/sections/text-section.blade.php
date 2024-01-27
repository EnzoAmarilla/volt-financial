<div class="text-section">
    @if(isset($title))
        <h6>{{ $title }}</h6>
    @endif

    @if(isset($text))
        <p>{!! $text !!}</p>
    @endif
</div>