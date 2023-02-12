

<?php
require_once __DIR__ .'/auth/src/bootstrap.php';
require_once __DIR__ .'/auth/src/register.php';

?>
<?php
    view('header',['title' => 'Register'])
?>
      <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>"
            class="<?= error_class($errors,'username') ?>">
            <small><?= $errors['username'] ?? '' ?></small>
        </div>
           <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
            class="<?= error_class($errors,'email') ?>">
            <small><?= $errors['email'] ?? '' ?></small>

        </div>
           <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
            class="<?= error_class($errors,'password') ?>">
            <small><?= $errors['password'] ?? '' ?></small>

        </div>

           <div>
            <label for="repeatpassword">Password Again</label>
            <input type="password" name="reppeatpassword" id="repeatpassword" value="<?= $inputs['repeatpassword'] ?? '' ?>"
            class="<?= error_class($errors,'repeatpassword') ?>">
        </div>
            <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree with the 
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
      </form>  
      <?php
          view('footer')
      ?>