<form class="login-form" action="index.php" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <button class="btn" type="submit" name="login">LOG IN</button>
    <p><?php $error_message ?></p>
    <p class="output">
        <?php
        include_once 'user-auth.php';
        echo "<pre>";
        print_r($file);
        echo "</pre>";
        ?>
    </p>
</form>
