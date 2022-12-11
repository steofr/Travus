<?php require 'database_rely.php'; ?>
<?php require 'fonction.php'; ?>
<?php 
if(isset($_POST['subforminsc'])){
    if(empty($_POST['nom'])){
        echo '<script>alert("Veuillez renseigner votre nom")</script>';
    }
    else if(empty($_POST['prenom'])){
        echo '<script>alert("Veuillez renseigner votre prénom")</script>';
    }
    else if(empty($_POST['email'])){
        echo '<script>alert("Veuillez renseigner une adresse mail")</script>';
    }
    
    else if(empty($_POST['pseudo'])){
        echo '<script>alert("Veuillez renseigner un pseudo")</script>';
    }
    
    else if(empty($_POST['MDP'])){
        echo '<script>alert("Veuillez entrer un mot de passe")</script>';
    }
    else if(strlen($_POST['MDP']) < 9){
        echo '<script>alert("Votre mot de passe doit avoir au moins 9 caractères")</script>';
    }
    else if(empty($_POST['MDP_conf'])){
        echo '<script>alert("Veuillez confirmer votre mot de passe")</script>';
    }
    else if($_POST['MDP'] !== $_POST['MDP_conf']){
        echo '<script>alert("Le mot de passe doit être le même dans les 2 champs")</script>';
    }
    else if(empty($_FILES['avatar'])){
        echo '<script>alert("Veuillez insérer une image")</script>';
    }
    else if(!isset($_POST['RGPD'])){
        echo '<script>alert("Veuillez cocher la case relative à la protection de vos données")</script>';
    }
    else{
        $name = data_cleaner($_POST['nom']);
        $first_name = data_cleaner($_POST['prenom']);
        $pseudo = data_cleaner($_POST['pseudo']);
        $password = pswd_crypter($_POST['MDP']);
        $mail = $_POST['email'];

        $nameFile = $_FILES['avatar']['name'];
        $typeFile = $_FILES['avatar']['type'];
        $sizeFile = $_FILES['avatar']['size'];
        $tmpFile = $_FILES['avatar']['tmp_name'];
        $errFile = $_FILES['avatar']['error'];

        $extensions = ['jpeg', 'png', 'jpg', 'gif'];
        $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];

        $extension = explode('.', $nameFile);

        $maxSize = 3000000;

        $ImgDBname = uniqid(). '.' . strtolower(end($extension));

if(in_array($typeFile, $type)){
    if(count($extension) <= 2 && in_array(strtolower(end($extension)), $extensions)){
        if($sizeFile <= $maxSize && $errFile == 0){
            if(move_uploaded_file($tmpFile, 'user_logo/'. $ImgDBname)){
                $sendata = 
                $travusDB->prepare("INSERT INTO tit (`nom`, `prenom`, `mail`, `pseudo`,
                 `MDP`, `avatar`) VALUES 
                 ('$name', '$first_name', '$mail', '$pseudo', '$password', '$ImgDBname')");
                $sendata->execute();
                echo "<script>alert('Vous êtes bien inscrit')</script>";
                exit(header("Location: connection.php"));
                 }
                 else{
                     echo "<script>alert('l'envoi de l'image a foiré')</script>";
                 }
               }
               else{
                 echo "<script>alert('Une erreur s'est produite lors du chargement du fichier')</script>";
               }
            }
            else{
             echo "<script>alert('ce fichier n'est pas une image')</script>";
            }
         }else{
             echo "<script>alert('Ce type d'image ne peut être utilisé comme avatar')</script>";
         }   
    }
}

?>
<?php include 'haut_bas_page/header_high.php'; ?>
    <title>inscription</title>
</head>
<?php include 'haut_bas_page/header.php'; ?>
    <div class="full_co_page">
        <div class="connect_indic">
            <h1>Inscris-toi</h1>
         </div>
        <div class="form-part2">
           <form id="form-core" method="POST" action="#" enctype="multipart/form-data">
             <input type="text" placeholder="nom" name="nom" id="pseudoco_input">
             <input type="text" placeholder="prenom" name="prenom" id="passco_input">
             <input type="email" placeholder="email" name="email" id="pseudoco_input">
             <input type="text" placeholder="pseudo" name="pseudo" id="passco_input">
             <input type="password" placeholder="mot de passe" name="MDP" 
             id="pseudoco_input">
             <input type="password" placeholder="confirmation du mot de passe" 
             name="MDP_conf" id="pseudoco_input">
             <div class="file_imp">
             <label for="avatar">Importe ton avatar</label>
             <input type="file" name="avatar">
             </div>
             <div id="checkRGPD">
                <div id="checkRGPD_cbox">
                 <input type="checkbox" value="RGPD" name="RGPD">
                </div>
                <div id="checkRGPD_lbox">
                 <label>En cochant cette case, 
                    vous confirmez avoir pris connaissance de notre charte sur 
                    le traitement des données.</label>
                </div>
            </div>
             <input type="submit" id="subco_input" value="S'inscrire" 
             name="subforminsc">
           </form>       
        </div>
        <div class="redirect_co"><a href="connection.php">Déja membre ?</a></div> 
     </div>
<?php include 'haut_bas_page/footer.php'; ?>

