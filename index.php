<?php
session_start();
include'db.php';
include 'Mission.php'

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>PhpProject</title>
		<link rel="stylesheet" type="text/css" href="PhpProject.css">
		<meta charset="utf-8">


	</head>
	<body>

    <a href="DemandeMission.php">
        <div class=""><h2 class="co">Connexion Experts</h2>
        </div>
    </a>

    <a href="loginclient.php">
        <div class=""><h2 class="co">Demande une Mission</h2>
        </div>
    </a>

    <a href="InfoClient.php">
        <div class=""><h2 class="co">Nouveau Client</h2>
        </div>
    </a>

    <a href="NewExterne.php">
        <div class=""><h2 class="co">Nouveaux Externes</h2>
        </div>
    </a>

    <a href="ExpertsDispo.php">
        <div class=""><h2 class="co">Nouveaux Experts</h2>
        </div>
    </a>



    </body>
<footer>
    <table class="table table-striped table-hover" id="onlinePosts">
        <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nom</th>
        </tr>
        </thead>

        <?php
        foreach ($Mission as $post)
        {
            ?>
            <tbody align="center">
            <tr>
                <td><?= $post->get() ?></td>
                <td><?= (html_entity_decode($post->getTitle())) ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</footer>
</html>