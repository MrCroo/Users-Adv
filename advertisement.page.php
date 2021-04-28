<!-- using auto loader to import everything in the same time -->
<?php
   include 'include/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap import -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />    <!-- my styles import -->
    <link rel="stylesheet" href="style.css">
    <title>Advertisement List</title>
</head>
<body>
<div class="listPage">
        <div>
        <a class="btn btn-secondary button" href="index.php">Home</a>
        </div>
        <div class="margin">
            <div class="inputGroup">
            <span >Title</span>
            <input type="text" class="input"/>
            </div>
            <button type="submit" class="btn addButton margin"  name="addUser">Add Adv</button>
        </div>
        </form>
        <h3>Advertisements List</h3>
    <div class="tableList">
        <!-- Table for making list prettier with bootstrap -->
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">User_id</th>
        <th scope="col">Title</th>
        </tr>
    </thead>
    <tbody>
        <!-- geting adv's and listing every adv one by one -->
        <?php
        $advObj = new View();
        $advs = $advObj->showAllAdvs(); 

            foreach($advs as $adv) {
                $oneUser = $advObj->showUser($adv['user_id']);
                echo '<tr><th>'.$adv['id'].'</th>'.'<td>'.$oneUser['name'].'</td>'.'<td>'.$adv['title'].'</td></tr>';
            }
        ?>
    </tbody>
    </table>
    </div>
</div>
</body>
</html>