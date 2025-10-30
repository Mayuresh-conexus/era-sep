<form method="POST" action="{{ route('alumni.login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

@if ($errors->any())
    <div style="color:red;">{{ $errors->first() }}</div>
@endif
