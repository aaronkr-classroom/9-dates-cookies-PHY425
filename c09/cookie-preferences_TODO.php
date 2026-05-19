<?php
// @TODO
?>
<?php include 'includes/header-style-switcher.php'; ?> 
  <form method="POST" action="cookie-preferences.php"> 
    Select color scheme:
    <select name="color">
      <option value="dark">Dark</option>
      <option value="light">Light</option>
    </select><br>
    <input type="submit" value="Save">
  </form>
<?php include 'includes/footer.php'; ?>