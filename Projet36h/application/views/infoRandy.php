<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>accueil</title>
</head>
<body>
    <h1>Bonjour</h1>
    <p>je suis <?php echo $nom ;?>  <?php echo $prenom ;?></p>
    <p>DTN: <?php echo $dtn ;?></p>
    <!-- <a href="<?php //echo site_url('Welcome/test'); ?>">test</a> -->
    <?php echo $this->session->name."kkkkkkkkkkkkkk"; ?>
</body>
</html>