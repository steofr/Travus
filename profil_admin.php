<?php require 'fonction.php'; ?>
<?php require 'database_rely.php'; ?>
<?php include 'haut_bas_page/header_high.php'; ?>
<title>Administrateur</title>
</head>
<?php include 'haut_bas_page/header.php'; ?>

<?php

if(!isset($_SESSION['user'])){
    exit(header("Location: connection.php"));
}

if($_SESSION['user']['user_type'] !== 'Admin'){
   header('Location: profile.php');
}

?>

<div class="info_consult" id="consult_member_profil">
<div class="closure_info_consult"><p id="hide_consult_member_profil">Fermer</p></div>
    <div class="title_infos_consult">Vos infos</div>
    <div class="content_info_consult">
        <div class="cic_inner">
            <div class="cic_inner_title">Avatar</div>
            <div class="cic_inner_avatar">
                <div style="background-image: url('user_logo/<?php echo $_SESSION['user']['avatar'] ?>');"></div>
            </div>
        </div>
        <div class="cic_inner">
            <div class="cic_inner_title">Nom</div>
            <div class="cic_inner_text"><?php echo $_SESSION['user']['nom'] ?></div>
        </div>
        <div class="cic_inner">
            <div class="cic_inner_title">Prénom</div>
            <div class="cic_inner_text"><?php echo $_SESSION['user']['prenom'] ?></div>
        </div>
        <div class="cic_inner">
            <div class="cic_inner_title">Email</div>
            <div class="cic_inner_text"><?php echo $_SESSION['user']['mail'] ?></div>
        </div>
    </div>
</div>

<div class="info_consult" id="modify_member_profil">
<div class="closure_info_consult"><p id="hide_modify_member_profil">Fermer</p></div>
    <div class="title_infos_consult">Modifiez vos infos</div>
    <div class="content_info_consult">
       <div class="modify_content_info_consult">
       <div class="name_mcic">Changez Votre Nom</div>
        <form class="form_mcic" action="#" method="POST">
            <input type="text" name="name_changer" placeholder="<?php echo $_SESSION['user']['nom'] ?>" class="form_mcic_text">
            <input type="submit" name="name_changer_sub" value="changer" class="form_mcic_input">
        </form>
       </div>
       <div class="modify_content_info_consult">
       <div class="name_mcic">Changez Votre Prénom</div>
        <form class="form_mcic" action="#" method="POST">
            <input type="text" name="fname_changer" placeholder="<?php echo $_SESSION['user']['prenom'] ?>" class="form_mcic_text">
            <input type="submit" name="fname_changer_sub" value="changer" class="form_mcic_input">
        </form>
       </div>
       <div class="modify_content_info_consult">
       <div class="name_mcic">Changez votre email</div>
        <form class="form_mcic" action="#" method="POST">
            <input type="email" name="mail_changer" placeholder="<?php echo $_SESSION['user']['mail'] ?>" class="form_mcic_text">
            <input type="submit" name="mail_changer_sub" value="changer" class="form_mcic_input">
        </form>
       </div>
       </div>
</div>

<div class="info_consult" id="delete_member_profil">
<div class="closure_info_consult"><p id="hide_delete_member_profil">Fermer</p></div>
    <div class="title_infos_consult">Supprimer votre compte</div>
    <div class="content_info_consult">
       
       <div class="modify_content_info_consult">
       <div class="name_mcic">Entrez votre Mot de Passe</div>
        <form class="form_mcic" method="POST" action="#">
            <input type="password" name="passDeleter" placeholder="Content de vous avoir connu !" class="form_mcic_text form_mcic_pass">
            <input type="submit" name="passDeleter_sub" value="se désinscrire" class="form_mcic_input">
        </form>
       </div>
       
       </div>
</div>


<div class="profil_admin_choice">
    <div class="title_profil_admin_choice">Compte administateur de <?php echo $_SESSION['user']['pseudo'] ?></div>
    <div class="core_profil_admin_choice">
        <div class="cpac_inner" id="watch_gest_member_profil">Gérer les membres</div>
        <div class="cpac_inner" id="watch_consult_member_profil">Consulter vos infos</div>
        <div class="cpac_inner" id="watch_modify_member_profil">Modifier vos infos</div>
        <div class="cpac_inner" id="watch_delete_member_profil">Supprimer votre compte</div>
    </div>
</div>

<div class="Gest_membre" id="gest_member_profil">
<div class="closure_info_consult"><p id="hide_gest_member_profil">Fermer</p></div>
<div class="profil_choice_title">Gérer les membres</div>
    <div class="core_profil_choice">
        <div class="cpc_inner cpc_inner_Gest_membre" id="watch_create_member_by_admin">Créer</div>
        <div class="cpc_inner cpc_inner_Gest_membre" id="watch_consult_member_by_admin">Consulter</div>
        <div class="cpc_inner cpc_inner_Gest_membre" id="watch_modify_member_by_admin">Modifier</div>
        <div class="cpc_inner cpc_inner_Gest_membre" id="watch_delete_member_by_admin">Supprimer</div>
    </div>
</div>

<div class="create_member_by_admin" id="create_member_by_admin">
    <div class="closure_info_consult"><p id="hide_create_member_by_admin">Fermer</p></div>
    <div class="title_create_member_by_admin">Créer un membre</div>
    <div class="core_create_member_by_admin">
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
             <label for="avatar">Importer un avatar</label>
             <input type="file" name="avatar">
             </div>
             
               
                 <input type="radio" name="user_type" value="classic">
                 <label style="color:white;">Membre</label>
                
                
                 <input name="user_type" type="radio" value="Admin">
                 <label style="color:white;">Administrateur</label>
                
             <input type="submit" id="subco_input" value="Créer" 
             name="subforminsc">
           </form>       
        </div>
        </div>
</div>

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
    else if(!isset($_POST['user_type'])){
        echo '<script>alert("Veuillez selectionner un type d\'utilisateur")</script>';
    }
    else{
        $name = data_cleaner($_POST['nom']);
        $first_name = data_cleaner($_POST['prenom']);
        $pseudo = data_cleaner($_POST['pseudo']);
        $password = pswd_crypter($_POST['MDP']);
        $mail = $_POST['email'];
        $insert_user_type = $_POST['user_type'];

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
                 `MDP`, `avatar`, `user_type`) VALUES 
                 ('$name', '$first_name', '$mail', '$pseudo', '$password', '$ImgDBname', '$insert_user_type')");
                $sendata->execute();
                echo "<script>alert('Votre utilisateur est bien créé')</script>";
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

<?php
        $postusers = $travusDB->prepare("SELECT `nom`,`prenom`,`mail`,`pseudo`,`avatar`,`user_type`, `id` FROM tit ORDER BY `id` ASC");
        $postusers->execute();
        $watchusers = $postusers->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="consult_member_by_admin" id="consult_member_by_admin">
<div class="closure_info_consult"><p id="hide_consult_member_by_admin">Fermer</p></div>
    <div class="title_consult_member_by_admin">Consulter les Membres</div>
<?php foreach($watchusers as $wu){?>
     
     <?php 
     
         if($wu['user_type'] == "Admin"){
            $user_type = "administrateur";
         }else{
            $user_type = "membre";
         }    
     
     ?>

    <div class="core_consult_member_by_admin">
        <div>
            <div class="avatar_core_consult_member_by_admin">
                <p><?php echo $wu['pseudo'] ?></p>
                <div style="background-image: url('user_logo/<?php echo $wu['avatar'] ?>');"></div>
            </div>
            <div class="info_core_consult_member_by_admin">
                 <p>Nom: <?php echo $wu['nom'] ?></p>
                 <p>Prénom: <?php echo $wu['prenom']?></p>
                 <p>Email: <?php echo $wu['mail']?></p>
                 <p>Type: <?php echo $user_type; ?></p>
            </div>
        </div>
    </div>
<?php } ?>
</div>

<div class="modify_member_by_admin" id="modify_member_by_admin">
<div class="closure_info_consult"><p id="hide_modify_member_by_admin">Fermer</p></div>
    <div class="title_modify_member_by_admin">Modifier les membres</div>
    <?php foreach($watchusers as $wu){?>
    <div class="core_modify_member_by_admin">
        <form action="#" method="POST">
            <input type="text" value="<?php echo $wu['nom'] ?>" name="modify_name_user" id="modify_user_admin">
            <input type="text" value="<?php echo $wu['prenom'] ?>" name="modify_fname_user" id="modify_user_admin">
            <input type="text" value="<?php echo $wu['pseudo'] ?>" name="modify_pseudo_user" id="modify_user_admin">
            <input type="email" value="<?php echo $wu['mail'] ?>" name="modify_mail_user" id="modify_user_admin">
            <label style="color: white;">Membre</label>
            <input type="radio" name="user_type_modifyer" value="classic">
            <label style="color: white;">Admnistrateur</label>
            <input type="radio" value="Admin" name="user_type_modifyer">
            <label style="color: white;">modifier <?php echo $wu['pseudo'] ?></label>
            <input type="checkbox" name="user_type_id_selector" value="<?php echo $wu['id'] ?>">
            <input type="submit" name="modify_user_sub" id="modify_user_input" value="modifier">
        </form>
    </div>
    <?php } ?>
</div>

<?php

if(isset($_POST['modify_user_sub'])){
    if(empty($_POST['modify_name_user'])){
        echo "<script>alert('Veuillez entrer un nom')</script>";
    }
    else if(empty($_POST['modify_fname_user'])){
        echo "<script>alert('Veuillez entrer un prénom')</script>";
    }
    else if(empty($_POST['modify_pseudo_user'])){
        echo "<script>alert('Veuillez entrer un pseudo')</script>";
    }
    else if(empty($_POST['modify_mail_user'])){
        echo "<script>alert('Veuillez entrer une adresse mail')</script>";
    }
    else if(!isset($_POST['user_type_modifyer'])){
        echo "<script>alert('Veuillez sélectionner un type d'utilisateur')</script>";
    }
    else if(!isset($_POST['user_type_id_selector'])){
        echo "<script>alert('Veuillez cocher la case de confirmation')</script>";
    }else{
        $name_modif_admin = data_cleaner($_POST['modify_name_user']);
        $fname_modif_admin = data_cleaner($_POST['modify_fname_user']);
        $pseudo_modif_admin = data_cleaner($_POST['modify_pseudo_user']);
        $mail_modif_admin = $_POST['modify_mail_user'];
        $user_type_modif_admin = $_POST['user_type_modifyer'];
        $id_selector = $_POST['user_type_id_selector'];

        $modify_user_by_admin = $travusDB->prepare("UPDATE tit SET nom = ?, prenom = ?, mail = ?, pseudo = ?, user_type = ? WHERE id = ?");
        $modify_user_by_admin->execute(array($name_modif_admin, $fname_modif_admin, $mail_modif_admin, $pseudo_modif_admin, $user_type_modif_admin, $id_selector));
        echo "<script>alert('cet utilisateur a bien été modifié')</script>";
    }
}
?>

<div class="delete_member_by_admin" id="delete_member_by_admin">
<div class="closure_info_consult"><p id="hide_delete_member_by_admin">Fermer</p></div>
    <div class="title_delete_member_by_admin">Supprimer des membres</div>
    <?php foreach($watchusers as $wu){?>

        <?php 
     
         if($wu['user_type'] == "Admin"){
            $user_type = "administrateur";
         }else{
            $user_type = "membre";
         }    
     
     ?>


    <div class="core_consult_member_by_admin">
        <div>
            <div class="avatar_core_consult_member_by_admin">
                <p><?php echo $wu['pseudo'] ?></p>
                <div style="background-image: url('user_logo/<?php echo $wu['avatar'] ?>');"></div>
            </div>
            <div class="info_core_consult_member_by_admin">
                 <p>Nom: <?php echo $wu['nom'] ?></p>
                 <p>Prénom: <?php echo $wu['prenom'] ?></p>
                 <p>Email: <?php echo $wu['mail'] ?></p>
                 <p>Type: <?php echo $user_type ?></p>
            </div>
            <form id="form_delete" action="#" method="POST">
                <label style="color: white;">Confirmer</label>
                <input type="checkbox" value="<?php echo $wu['id'] ?>" name="delete_id_selector">
                <input type="submit" value="supprimer" name="delete_user_sub">
            </form>
        </div>
    </div>
    <?php } ?>
</div>

<?php 

if(isset($_POST['delete_user_sub'])){
    if(!isset($_POST['delete_id_selector'])){
        echo "<script>alert('Pour supprimer cet utilisateur, cochez la case')</script>";
    }else{
        $id_delete_selector = $_POST['delete_id_selector'];
        $admin_delete_user = $travusDB->prepare("DELETE FROM tit WHERE id = ?");
        $admin_delete_user->execute(array($id_delete_selector));
        echo "<script>alert('Cet utilisateur a bien été supprimé')</script>";
    }
}

?>

<?php include 'haut_bas_page/footer.php'; ?>

<?php
if(isset($_POST['passDeleter_sub'])){
    if(empty($_POST['passDeleter'])){
        echo "<script>alert('Veuillez mettre votre mot de passe')</script>";
    }else{
        if(password_verify($_POST['passDeleter'], $_SESSION['user']['MDP'])){
           echo "<script>alert('Votre compte sera supprimer')</script>";
           session_destroy();
           $id_verify = $_SESSION['user']['id'];
           $delete_account = $travusDB->prepare("DELETE FROM tit WHERE id = ?");
           $delete_account->execute(array($id_verify));
          }else{
            echo "<script>alert('Le mot de passe n'est pas bon')</script>";
          }
    }
}

if(isset($_POST['name_changer_sub'])){
    if(empty($_POST['name_changer'])){
        echo "<script>alert('Veuillez indiquer un nouveau nom')</script>";
    }else{
        $id_verify = $_SESSION['user']['id'];
        $new_name = data_cleaner($_POST['name_changer']);

        $change_admin_name = $travusDB->prepare("UPDATE tit SET nom = ? WHERE id = ?");
        $change_admin_name->execute(array($new_name, $id_verify));
        echo "<script>alert('Votre nom a bien été changé')</script>";
    }
}

if(isset($_POST['fname_changer_sub'])){
    if(empty($_POST['fname_changer'])){
        echo "<script>alert('Veuillez indiquer un nouveau prénom')</script>";
    }else{
        $id_verify = $_SESSION['user']['id'];
        $new_fname = data_cleaner($_POST['fname_changer']);

        $change_fname = $travusDB->prepare("UPDATE tit SET prenom = ? WHERE id = ?");
        $change_fname->execute(array($new_fname, $id_verify));
        echo "<script>alert('Votre prénom a bien été changé')</script>";
    }
}

if(isset($_POST['mail_changer_sub'])){
    if(empty($_POST['mail_changer'])){
        echo "<script>alert('Veuillez indiquer une nouvelle adresse mail')</script>";
    }else{
        $id_verify = $_SESSION['user']['id'];
        $new_mail = $_POST['mail_changer'];

        $change_mail = $travusDB->prepare("UPDATE tit SET mail = ? WHERE id = ?");
        $change_mail->execute(array($new_mail, $id_verify));
        echo "<script>alert('Votre email a bien été changé')</script>";
    }
}

?>