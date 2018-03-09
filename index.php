<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 09/03/18
 * Time: 10:55
 */
$data = ['Hyperloop', 'SpaceX', 'Tesla'];
$results = [];

if (!empty($_GET['project'])) {
    foreach ($data as $d) {
        if (strtolower($_GET['project']) == strtolower($d)) {
            $results[] = $d;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Atelier Formulaire</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Hello, les wilders!</h1>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" name="project" class="form-control" placeholder="Project name">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
        <?php if (!empty($_GET['project'])) : ?>
        <div class="row">
            <div class="col-md-12">
                <span class="badge"><?= count($results) ?></span> projet(s) trouvé(s).
            </div>
        </div>
        <?php endif; ?>
        <?php if (!empty($results)) : ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Project name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $project): ?>
                <tr>
                    <td><?= $project ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</body>
</html>