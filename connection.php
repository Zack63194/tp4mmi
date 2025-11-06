<?php include('entete.php');
?>
<!-- partie principale -->
<?php 
if(!empty($_REQUEST['ENVOI'])&&!empty($_REQUEST['IDENTIFIANT'])&&!empty($_REQUEST['MOTDEPASS'])){
    echo '<p> Bonjour ',$_REQUEST['IDENTIFIANT'],'</p>';
    $_SESSION['login'] = $_REQUEST['IDENTIFIANT'];
}
else{
    echo '<p> Mais qui es-tu ?</p>';
}
?>
<?php include('piedDePage.php');
?>