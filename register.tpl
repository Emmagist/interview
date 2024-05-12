<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    {if isset($error)}
        <p>{$error}</p>
    {/if}
    {if isset($success)}
        <p>{$success}</p>
    {else}
        <form method="post" action="register.php">
            <label>Username:</label><br>
            <input type="text" name="username" value="{if isset($user)}{$user->getUsername()}{/if}"><br>
            <label>Email:</label><br>
            <input type="email" name="email" value="{if isset($user)}{$user->getEmail()}{/if}"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Register">
        </form>
    {/if}
</body>
</html>
