<?php
    require_once(PATH_VIEWS."include/header.html.php");
    require_once(PATH_VIEWS."include/menu.html.php");
?>
<!-- CONTENT -->
<section id="content">
<!-- NAVBAR -->
<nav>
    <i class='bx bx-menu' ></i>
    <a href="#" class="profile">
        <img src="img/people.png">
    </a>
</nav>
<!-- NAVBAR -->
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Menu</h1>
            <ul class="breadcrumb">
                <li>
                <a href="#"><?=$first_lien?></a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                <a class="active" href="#"><?=$sub_lien?>></a>
                </li>
            </ul>
        </div>
    </div>
    <?php
      echo $content_for_template ;
    ?>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->
<?php
   require_once(PATH_VIEWS."include/footer.html.php");
?>