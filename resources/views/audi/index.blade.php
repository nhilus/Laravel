@extends('master.main')


@section('content')
    @component('components.carrousel.carrousel',['images'=> $images])
    @endcomponent

    @component('components.cards.cards')
    @endcomponent

    @component('components.text.imageText', ['position'=>2,'image2'=> $image2, 'text'=>$text])
    @endcomponent

    @component('components.text.imageText', ['position'=>1, 'image2'=> $image2, 'text'=>$text])
    @endcomponent

@endsection


