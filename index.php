<?php
    include_once("templates/header.php");
?>

<!-- <h1>Olá mundo!! Bem-vindo ao PHP!!</h1> -->
<?php
    // var_dump($posts);
    // print_r($posts);
    // echo"<br><br>";
?>

<main>
    <div id="title-container">
        <h1>Code Blog</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post); ?>
        <div class="post-box">
            <img src="<?=BASE_URL ?>/img/<?=$post['img']?>" 
            alt="<?=$post['title']?>">

            <h2 class="post-title"><a href="<?=BASE_URL ?>post.php? id=<?=$post['id']?>"><?= $post['title']?>
            </a></h2>

            <p class="post-description"><?= $post['description']?></p>

            <?php foreach($posts as $post); ?>

            <div class="tags-conatiner"></div>

        </div>
    </div>
    
</main>

<?php
    include_once("templates/footer.php");
?>
