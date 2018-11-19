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
    foreach($lesRegions as $uneRegion)
    {
        echo "<input onclick='AfficherLesVilles(this.value)' type='radio' id='region' value='".$uneRegion->idRegion."'>".$uneRegion->nomRegion." 
        ".$uneRegion->scoreRegion."</input><br/>";
    }
?>
</body>
</html>