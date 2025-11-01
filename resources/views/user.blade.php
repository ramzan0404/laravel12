<h1>
    User Login
</h1>
<form action="user" method="post">
    @csrf
    <input type="text" name="name" placeholder="User name">
    <br>
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <br>
    <button>Submit</button>
</form>