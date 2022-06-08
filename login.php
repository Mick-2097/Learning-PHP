<form class="login-form" action="index.php" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <button class="btn" type="submit" name="submit">LOG IN</button>
    <p class="output">
        <?php
        include_once 'user-auth.php';
        
        echo $_POST['username'] . "<br>";
        echo gettype($file['users']) . "<br>";
        print_r($file['users']);
        echo  "<br>";
        echo $error_message;
        ?>
    </p>
</form>
