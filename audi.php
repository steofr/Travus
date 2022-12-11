<?php require 'database_rely.php'; ?>
<?php session_start(); ?>
<?php 

if(isset($_POST['subcom'])){
    if(empty($_POST['comment'])){
        echo "<script>alert('remplir la zone à commentaire')</script>";
    }else{
        $pseudo = $_SESSION['user']['pseudo'];
        $comm = $_POST['comment'];
        $avatar = $_SESSION['user']['avatar'];

        try{
        $sendcom = $travusDB->prepare("INSERT INTO audi (`pseudo` ,`comment`, `avatar`, `date`) VALUES ('$pseudo', '$comm', '$avatar',  CURRENT_TIMESTAMP())");
        $sendcom->execute();
        }catch(PDOException $com){
            echo "Erreur: ". $com->getMessage();
        }
    }
}



?>

<?php
        $postcom = $travusDB->prepare("SELECT `pseudo`, `comment`, `avatar`, `date` FROM audi ORDER BY `id` DESC");
        $postcom->execute();
        $watchcom = $postcom->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'haut_bas_page/header_high.php'; ?>
<title>Audi</title>
</head>
<?php include 'haut_bas_page/header.php'; ?>
<?php 
      

      if(!isset($_SESSION['user'])){
    
        header("Location: connection.php");
      }

?>
    <div class="rub_car_logo_div">
       <div class="inner_rub_Audi_logo_div">
         <img src="images/logo_marques_voitures/audi_logo.png">
       </div>
    </div>
    <div class="comment_part">
       <div class="title_comment_part">Dis-nous ce que tu penses d'Audi</div>
       <div class="input_comment_part">
         <div class="inner_input_comment_part">
         <form method="POST" action="#">
                <textarea name="comment" placeholder="<?php echo $_SESSION['user']['pseudo'] ?> exprime-toi"></textarea>
                <input name="subcom" type="submit" value="Fonce !">
            </form>
         </div>
       </div>
    </div>

    <?php foreach($watchcom as $w) { ?>
    <div class="comment_watcher">
        <div class="inner_comment_watcher">
            <div class="top_inner_comment_watcher">
                <div class="user_top_inner_comment_watcher">
                    <div class="avatar_user_top_inner_comment_watcher">
                        <div style="background-image: url('user_logo/<?php echo $w['avatar']; ?>')"></div>
                    </div>
                    <div class="pseudo_user_top_inner_comment_watcher"><?php echo $w['pseudo']; ?></div>
                </div>
            </div>
            <div class="bottom_inner_comment_watcher">
                <div class="comment_bottom_inner_comment_watcher"><?php echo $w['comment']; ?></div>
                <div class="date_bottom_inner_comment_watcher"><?php echo $w['date']; ?></div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include 'haut_bas_page/footer.php'; ?>
