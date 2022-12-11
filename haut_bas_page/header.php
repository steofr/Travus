<?php

if(isset($_SESSION['user'])){
  $connect = '<a href="deco.php" target="_blank">Se deconnecter</a>';
  $insc_user_up = "<a href='profile.php' target='_blank'>". $_SESSION['user']['pseudo'] . "</a>";
}else{
  $connect = '<a href="connection.php" target="_blank">Se connecter</a>';
  $insc_user_up = "<a href='inscription.php' target='_blank'>S'inscrire</a>";
}


?>
<body>
    <div class="header_page">
            <div class="logo-container"><a href="index.php"><img src="images/t-fire-icon.png" id="t_logo_header"></a></div>
        <div class="right-part">
            <div class="session_manage">
                <div><?php echo $connect; ?></div>
                <div><?php echo $insc_user_up; ?></div>  
            </div>
            <div class="welcomer">
              <div class="welcore">Bienvenue chez</div>
              <div class="homelogo">
                <div class="homelogo_core"></div>
              </div>
            </div>
        </div>
    </div>
    <br>
    <br>