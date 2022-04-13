

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Address</th>
        <th scope="col">Cars</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($players as $player)
        <tr>
            <th scope="row">{{$player->id}}</th>
            <td>{{$player->name}}</td>
            <td>{{$player->birth_date}}</td>
            <td>{{$player->address->street_name}}   {{$player->address->country->name}}</td>

            <td>
                @foreach($player-> cars as $car)
                       <p>{{$car->name}}</p>
                @endforeach
            </td>
            <td>{{$player->created_at}}</td>
            <td>{{$player->updated_at}}</td>
            <td>
                <a href="{{url('players/'.$player->id)}}">Show</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>

