<?php
// theme.php

?><!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($Wcms->page('title')); ?> – <?php echo htmlspecialchars($Wcms->siteTitle()); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($Wcms->page('description')); ?>">
  
  <?php echo $Wcms->css(); ?>
  <link rel="stylesheet" href="<?php echo $Wcms->asset('css/style.css'); ?>">
</head>
<body>

  <header class="site-header">
    <div class="container">
      <h1 class="site-title"><?php echo htmlspecialchars($Wcms->siteTitle()); ?></h1>
      <nav class="site-nav">
        <?php echo $Wcms->menu(); ?>
      </nav>
    </div>
  </header>

  <main class="site-main container">
    <h2><?php echo htmlspecialchars($Wcms->page('title')); ?></h2>
    <div class="page-content">
      <?php echo $Wcms->page('content'); ?>
    </div>

    <!-- Beispiel Tabelle Prüfungstermine -->
    <section class="exam-schedule">
      <h3>Prüfungstermine</h3>
      <table>
        <thead>
          <tr>
            <th>Datum</th>
            <th>Uhrzeit</th>
            <th>Raum</th>
            <th>Thema</th>
            <th>Professor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>15.10.2025</td>
            <td>09:00 – 11:00</td>
            <td>Gebäude A, Raum 101</td>
            <td>Programmierung 1</td>
            <td>Prof. Dr. Müller</td>
          </tr>
          <tr>
            <td>20.10.2025</td>
            <td>13:00 – 15:00</td>
            <td>Gebäude B, Raum 202</td>
            <td>Datenbanken</td>
            <td>Prof. Dr. Schmidt</td>
          </tr>
        </tbody>
      </table>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container">
      <?php echo $Wcms->footer(); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($Wcms->siteTitle()); ?></p>
    </div>
  </footer>

  <?php echo $Wcms->js(); ?>
  <script src="<?php echo $Wcms->asset('scripts/scripts.js'); ?>"></script>
</body>
</html>
