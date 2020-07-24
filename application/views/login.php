<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype>
<html>
    <head>
        <title>Login</title>
    </head>
<body>
    <form method="POST" action="<?php echo base_url(); ?>welcome/logincheck">
        <label>Email:</label>
        <input type="email" name="email" required/>
        <br />
        <label>Password:</label>
        <input type="password" name="password" required/>
        <br />
        <input type="submit" name="submit"/>
    </form>
</body>
</html>