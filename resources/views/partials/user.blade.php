<section>
    <div class="w-25 mx-auto">
        <form action="/" method="GET">
            <input placeholder="trier" class="form-control bg-success text-white" type="text" name="q" >
            <button type="submit">Chercher</button>
            </form>
    </div>
    <table class="mt-5 w-25 mx-auto table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }} </th>
                    <td>{{ $user->name }} </td>
                    <td>{{  $user->genre->genre }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
