<div>
    <h1>Users info</h1>
    <table border = "1">
        <tr>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
