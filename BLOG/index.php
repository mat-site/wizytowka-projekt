<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'php/config.php'; ?>
    <?php include 'php/functions.php'; ?>
    <title>Business</title>
    <link rel="stylesheet" href="css/kits.css">
    <link rel="stylesheet" href="css/global_styles.css">
    <link rel="stylesheet" href="css/pages.css">
    <script src="js/menu.js"></script>
</head>



<body>


    <?php include 'modules/menu.html'; ?>
    <div class="header">
        <div class="header-content d-f al-c fd-c jc-c">
            <div class="header-title fz-24 c-w ta-c">Grow your business.</div>
            <div class="header-text fz-16 fw-400 c-w ta-c">Give your business a boost with a beautifully crafted homepage.</div>
            <a href="#" target="_blank" class="header-btn d-f al-c jc-c tt-u">learn more</a>
        </div>
    </div>
    <div class="sec-title">
        <div class="before-title">what we believe in</div>
        <div class="title">Grow your business, establish your brand, and put your customers first.</div>
    </div>
    <div class="half-wrapper">
        <div class="subpages">
            <div class="subpage d-f al-c jc-sb">
                <div class="text-content">
                    <div class="before-title ta-l">about</div>
                    <div class="title ta-l">Who we are</div>
                    <div class="text">Nulla vel sodales tellus, quis condimentum enim. Nunc porttitor venenatis
                        feugiat. Etiam quis faucibus erat, non accumsan leo. Aliquam erat volutpat. Vestibulum ac
                        faucibus eros. Cras ullamcorper gravida tellus ut consequat.</div>
                    <a href="#" target="_blank" class="btn d-f tt-u al-c jc-c c-w">learn more</a>
                </div>
                <div class="img-content">
                    <img src="images/main.svg" alt="">
                </div>
            </div>
            <div class="subpage d-f al-c jc-sb fd-rr">
                <div class="text-content">
                    <div class="before-title">team</div>
                    <div class="title">Who we do</div>
                    <div class="text">Nulla vel sodales tellus, quis condimentum enim. Nunc porttitor venenatis
                        feugiat. Etiam quis faucibus erat, non accumsan leo. Aliquam erat volutpat. Vestibulum ac
                        faucibus eros. Cras ullamcorper gravida tellus ut consequat.</div>
                    <a href="#" target="_blank" class="btn d-f tt-u al-c jc-c c-w">learn more</a>
                </div>
                <div class="img-content">
                    <img src="images/main.svg" alt="">
                </div>
            </div>
        </div>
        <div class="sec-title">
            <div class="before-title">about us</div>
            <div class="title">Company news</div>
        </div>
        <div class="posty d-f jc-sb al-s f-w">

            <?php $post_id = $con->query("SELECT * FROM `blog` GROUP BY `Tytuł` ORDER BY `id`"); ?>


            <?php while ($post_id_row = $post_id->fetch_assoc()): ?>

            <?php $posts = $con->query("SELECT * FROM `blog` WHERE `Tytuł`='$post_id_row[Tytuł]' ORDER BY `id`"); ?>
            <?php while ($posts_row = $posts->fetch_assoc()): ?>
            <div id="<?php echo $post_id_row['ID']; ?>" class="post">
                <a href="post.php?ID=<?= $post_id_row['ID']; ?>" target="_blank"
                    class="post-title"><?php echo $post_id_row['Tytuł']; ?></a>
                <div class="post-date"><?php echo $post_id_row['Data']; ?></div>
                <div class="text"><?php echo $post_id_row['Treść']; ?></div>
            </div>
            <?php endwhile; ?>
            <?php endwhile; ?>
        </div>
    </div>

    <?php include 'modules/footer.html'; ?>
</body>

</html>