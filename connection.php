<?php require 'database_rely.php'; ?>
<?php require 'fonction.php'; ?>
<?php include 'haut_bas_page/header_high.php'; ?>
    <title>Connection</title>
</head>
<?php include 'haut_bas_page/header.php'; ?>
 <div class="full_co_page">
    <div class="connect_indic">
        <h1>Connecte-toi</h1>
     </div>
    <div class="form-part">
       <form id="form-core" method="POST">
         <input type="text" name="pseudoco" placeholder="pseudo" id="pseudoco_input">
         <input type="password" name="passco" placeholder="mot de passe" 
         id="passco_input">
         <input type="submit" id="subco_input" name="subco" value="Se connecter">
       </form>
    </div>
    <div class="redirect_co"><a href="inscription.php">Pas encore membre ?</a></div>
 </div>
<?php include 'haut_bas_page/footer.php'; ?>

<?php 

$pseudoco = data_cleaner($_POST['pseudoco']);
$passco = $_POST['passco'];
$subCo = $_POST['subco'];


if(isset($subCo)){
   if(empty($pseudoco)){
      echo "<script>alert('Veuillez renseigner votre pseudo')</script>";
   }else if(empty($passco)){
      echo "<script>alert('Veuillez renseigner votre mot de passe')</script>";
   }else if(empty($pseudoco) && empty($passco)){
      echo "<script>alert('Pour vous connecter vous devez remplir tous les champs')</script>";
   }else{
      $try_account_access = $travusDB->prepare("SELECT * FROM tit WHERE pseudo = ? LIMIT 1");
      $try_account_access->execute(array($pseudoco));
      $account_verify = $try_account_access->rowCount();
      
      if($account_verify == 1){
          $access_account = $try_account_access->fetch(PDO::FETCH_ASSOC);

          if(password_verify($passco, $access_account['MDP'])){
            session_start();
            $_SESSION['user'] = $access_account;
            header("Location: index.php");
          }else{
            echo "Mot de passe foireux";
            header("Location: connection.php");
          }
      }else{
         echo "<script>alert('Votre compte n'existe pas')</script>";
      }
   }
}
?>