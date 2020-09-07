<?php require('partials/head.php'); ?>

  <!-- Lists the names of all users upon page load: -->
  <ul>
  <?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
  <?php endforeach; ?>
  </ul>

  <h1>Submit Your Name</h1>

  <form method="POST" action="/names">
    <input name="name">
    <button type="submit">Submit</button>
  </form>

<?php require('partials/footer.php'); ?>