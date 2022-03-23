<div class="container pt-5">
    <div class="row">
        @if($position==1)
            <div class="col-6">
                <p>{{$text}}</p>
            </div>
            <div class="col-6 ">
                <img src="{{$image2}}">
            </div>
        @else
            <div class="col-6 ">
                <img src="{{$image2}}">
            </div>
            <div class="col-6">
                <p>{{$text}}</p>
            </div>
        @endif
    </div>
</div>

