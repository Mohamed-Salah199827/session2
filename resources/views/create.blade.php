<form action="{{ route("admin.add") }}" method="POST">
    @csrf

<input type="text">
<input type="email">
<input type="password">
<input type="submit" value="submit">

</form>
