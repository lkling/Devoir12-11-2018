<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="main.js"></script>
    <script src="<?php echo base_url() ?> JS/fonctions.js"></script>
    <script src="<?php echo base_url() ?> JQuery/jquery-3.1.1.js"></script> 
</head>
<body>
    <?php
    foreach($lesVilles as $uneVille)
    {
        echo "<input type='radio' id='ville' value='".$uneVille->idVille."'>".$uneRegion->nomVille." 
        ".$uneVille->scoreVille."</input><br/><br/>";
    }
    ?>
</body>
</html>