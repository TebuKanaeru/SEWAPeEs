<div class="container_">
    <div class="login-container">
    <h2>LOGIN</h2>
    <form class="login-form">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <div class="button-group">
        <a href="<?= site_url('adm') ?>" button type="submit" class="login">Login
        <a href="<?= site_url('/') ?>" class="back-link">Back</a>
      </div>
    </form>
    </div>
</div>
</body>
</html>