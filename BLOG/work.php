<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'php/config.php'; ?>
    <?php include 'php/functions.php'; ?>
    <title>Work</title>
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
            <div class="header-title fz-24 c-w ta-c">Our work</div>
        </div>
    </div>
    <div class="sec-title">
        <div class="before-title">our work</div>
        <div class="title">Team projects</div>
    </div>
    <div class="projects d-f fd-c al-c">
        <?php $projects_type = $con->query("SELECT * FROM `projects` GROUP BY `Project` ORDER BY `id`"); ?>
        <?php while ($project_type = $projects_type->fetch_assoc()): ?>
            <?php $projects = $con->query("SELECT * FROM `projects` WHERE `Project`='$project_type[Project]' ORDER BY `id`"); ?>
            <?php while($project = $projects->fetch_assoc()): ?>
            
        <div id="<?php echo $project_type['Project']; ?>" class="project d-f al-c fd-c">
        <a href="project.php?Project=<?= $project_type['Project']; ?>" class="project-main">
        <img data-src="./images/<?php echo $project_type['project_main_img']?>.svg" alt="" width="1840" height="833">
        </a>
        <a href="project.php?Project=<?= $project_type['Project']; ?>" class="project-title fz-16 fw-400"><?php echo $project_type['Project']?></a>
        <div class="project-type fz-16 fw-400"><?php echo $project_type['project_type']?></div>
        </div>
        <?php endwhile; ?>
        <?php endwhile; ?>
    </div>
    <?php include 'modules/footer.html'; ?>
</body>

</html>