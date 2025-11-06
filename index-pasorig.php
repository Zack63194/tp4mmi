<?php include('entete.php');
?>
<!-- partie principale -->
    <form action="connection.php" method="post">
        <div>
            <p> Identifiant:<input type="text" name="IDENTIFIANT"></p>
            <p> Mot de pass:<input type="password" name="MOTDEPASS"></p>
            <p> Envoi:<input type="submit" value="Envoi"></p>
<?php include('piedDePage.php');
?>