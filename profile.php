<?php require 'fonction.php' ?>
<?php require 'database_rely.php'; ?>
<?php include 'haut_bas_page/header_high.php'; ?>
<title>profil de <?php echo $_SESSION['user']['pseudo']; ?></title>
</head>
<?php include 'haut_bas_page/header.php'; ?>
<?php 

     if(!isset($_SESSION['user'])){
        header("Location: connection.php");
     }

     if($_SESSION['user']['user_type'] == "Admin"){
        header("Location: profil_admin.php");
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


<div class="profil_choice">
    <div class="profil_choice_title">Espace de <?php echo $_SESSION['user']['pseudo'] ?></div>
    <div class="core_profil_choice">
        <div class="cpc_inner" id="watch_consult_member_profil">Consulter vos infos</div>
        <div class="cpc_inner" id="watch_modify_member_profil">Modifier vos infos</div>
        <div class="cpc_inner" id="watch_delete_member_profil">Supprimer votre compte</div>
    </div>
</div>

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

        $change_name = $travusDB->prepare("UPDATE tit SET nom = ? WHERE id = ?");
        $change_name->execute(array($new_name, $id_verify));
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