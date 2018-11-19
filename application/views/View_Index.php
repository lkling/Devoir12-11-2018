<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="main.js"></script>
    <script src="<?php echo base_url() ?> JS/fonctions.js"></script>
    <script src="<?php echo base_url() ?> JQuery/jquery-3.1.1.js"></script> 
    <script type="text/javascript">
        $
        (
            function()
            {
                $('#seConnecter').click
                (
                    function()
                    {
                        var user = ($.(#user).val());
                    }
                );
            }
        );
    </script>
</head>
<body>
<form method="POST" action="<?php echo base_url(); ?>index.php/Ctrl_Index/AfficherTousLesUtilisateurs/">
    <label>Votre nom</label><br/><br/>
    <input id="user" type="text" value="" name="txtConnexion"><br/><br/>
    <input id="seConnecter" type="button" value="Connexion" onclick="AfficherLesRegions(($.(#user).val()))"><br/><br/>

    <div id="divRegions"></div>
    <div id="divVilles"></div>
</form>
</body>
</html>