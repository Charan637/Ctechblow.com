<?php include 'header.php'; ?>
<h2>Login</h2>
<form method="POST" action="auth.php">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
<?php include 'footer.php'; ?>