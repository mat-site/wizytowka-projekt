
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'php/config.php'; ?>
        <?php include 'php/functions.php'; ?>
        <?php $post_type = $_GET['ID']; ?>
        <?php $posts = $con->query("SELECT * FROM `blog` WHERE ID = '$post_type' GROUP BY `ID` ORDER BY `id` "); ?>
        <?php while ($post= $posts->fetch_assoc()): ?>
        <title><?php echo $post['Tytuł']; ?></title>
        <link rel="stylesheet" href="css/global_styles.css">
        <link rel="stylesheet" href="css/pages.css">
        <link rel="stylesheet" href="css/kits.css">
        <script src="js/functions.js"></script>
    <script src="js/menu.js"></script>
</head>

<body>
    <?php include 'modules/menu.html'; ?>
   
       
    <div class="post-header">
        <div class="post-header-content">
            <div class="post-header-title fz-24 ta-l"> <?php echo $post['Tytuł']; ?></div>
            <div class="blog-post-date fz-16"><?php echo $post['Data']?></div>
        </div>
        <img src="./images/<?php echo $post['miniatura']?>.svg" alt="" width="1840" height="833">
    </div>
 
<div class="posts">
    <div class="post-box fz-16">
        <?php echo $post['Treść']; ?>
    </div>
</div>
    <?php endwhile; ?>

    <?php include 'modules/footer.html'; ?>

</body>

</html>