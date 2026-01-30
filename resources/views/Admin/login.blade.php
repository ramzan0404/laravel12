<form method="POST" action="/admin/login">
    @csrf

    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>

    <a href="{{ url('/admin/register') }}" class="btn-register">
        Register
    </a>
</form>