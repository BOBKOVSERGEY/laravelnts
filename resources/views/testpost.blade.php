<h1>Testpost</h1>

<form action="" method="post">
    {{ csrf_field() }}
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Go">
</form>