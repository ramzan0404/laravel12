<form method="POST" action="/admin/register">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <button type="submit">Register</button>

    <a href="{{ url('/admin/login') }}" class="btn-register">Login</a>
</form>
