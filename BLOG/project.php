
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'php/config.php'; ?>
        <?php include 'php/functions.php'; ?>
        <?php $project_type = $_GET['Project']; ?>
        <?php $projects = $con->query("SELECT * FROM `projects` WHERE Project = '$project_type' GROUP BY `Project` ORDER BY `id` "); ?>
        <?php while ($project= $projects->fetch_assoc()): ?>
        <title><?php echo $project['Project']; ?></title>
        <link rel="stylesheet" href="css/global_styles.css">
        <link rel="stylesheet" href="css/pages.css">
        <link rel="stylesheet" href="css/kits.css">
        <script src="js/functions.js"></script>
    <script src="js/menu.js"></script>
</head>

<body>
    <?php include 'modules/menu.html'; ?>
   
       
    <div id="project" class="header">
        <div class="header-content d-f al-c fd-c jc-c">
            <div class="header-title fz-24 c-w ta-c"><?php echo $project['Project']; ?></div>
        </div>
    </div>
    <div class="project-box d-f al-s jc-sb max-1200">
        <div class="project-sidebar d-f fd-c al-s">
            <div class="sidebar-box">
                <div class="sidebar-title fw-500 ta-l tt-u">description</div>
                <div class="text"><?php echo $project['project_desc']; ?></div>
            </div>
            <div class="sidebar-box">
                <div class="sidebar-title fw-500 ta-l tt-u">when</div>
                <div class="text"><?php echo $project['project_data']; ?></div>
            </div>
            <div class="sidebar-box">
                <div class="sidebar-title fw-500 ta-l tt-u">who</div>
                <div class="text"><?php echo $project['project_persons']; ?></div>
            </div>
        </div>
        <div class="project-content">
            <div class="text"><?php echo $project['project_content']; ?></div>
        </div>
    </div>
    <div class="project-imgs max-1200 d-f fd-c al-c">
    <img src="./images/<?php echo $project['project_main_img']?>.svg" alt="" width="1840" height="833">
    <img src="./images/<?php echo $project['project_main_img']?>.svg" alt="" width="1840" height="833">
    <img src="./images/<?php echo $project['project_main_img']?>.svg" alt="" width="1840" height="833">
    </div>
    <?php endwhile; ?>

    <?php include 'modules/footer.html'; ?>

</body>

</html>