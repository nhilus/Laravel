<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Birth Date</th>
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
            <td>{{$player->created_at}}</td>
            <td>{{$player->updated_at}}</td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>

