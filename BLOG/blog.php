<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'php/config.php'; ?>
    <?php include 'php/functions.php'; ?>
    <title>Blog</title>
    <link rel="stylesheet" href="css/global_styles.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/kits.css">
    <script src="js/functions.js"></script>
    <script src="js/menu.js"></script>
</head>

<body>

    <?php include 'modules/menu.html'; ?>
    <div id="about-us" class="header">
        <div class="header-content d-f al-c fd-c jc-c">
            <div class="header-title fz-24 c-w ta-c">Our Blog</div>
        </div>
        
    </div>
    <div class="sec-title">
        <div class="before-title">APERIAM HARUM</div>
        <div class="title">Our Stories</div>
    </div>
    <div class="blog-posts d-f fd-c al-c">
        <?php $posts_type = $con->query("SELECT * FROM `blog` GROUP BY `ID` ORDER BY `ID`"); ?>
        <?php while ($post_type = $posts_type->fetch_assoc()): ?>
            <?php $posts = $con->query("SELECT * FROM `blog` WHERE `ID`='$post_type[ID]' ORDER BY `ID`"); ?>
            <?php while($post = $posts->fetch_assoc()): ?>
            
        <div id="<?php echo $post_type['ID']; ?>" class="blog-post d-f al-c fd-c">
        <a href="post.php?ID=<?= $post_type['ID']; ?>" class="blog-item">
        <img data-src="./images/<?php echo $post_type['miniatura']?>.svg" alt="" width="1840" height="833">
        </a>
        <div class="blog-post-content d-f fd-c al-s">
        <a href="post.php?ID=<?= $post_type['ID']; ?>" class="blog-post-title fz-16 fw-400"><?php echo $post_type['Tytuł']?></a>
        <div class="blog-post-desc fz-16 fw-400"><?php echo $post_type['Treść']?></div>
        <div class="blog-post-date fz-16"><?php echo $post_type['Data']?></div>
        </div>
        </div>
        <?php endwhile; ?>
        <?php endwhile; ?>
    </div>
    <?php include 'modules/footer.html'; ?>
</body>

</html>