<!-- using auto loader to import everything in the same time -->
<?php
   include 'include/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap import -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
    <!-- my styles import -->
    <link rel="stylesheet" href="style.css" />
    <title>User List</title>
  </head>
  <body>
    <div class="listPage">
      <div>
        <a class="btn btn-secondary button" href="index.php">Home</a>
      </div>
      <div class="margin">
        <form method="get">
          <div class="inputGroup">
            <span>Name</span>
            <input type="text" class="input" name="newUser"/>
          </div>
          <button type="submit" class="btn addButton margin" name="addUser">Add User</button>
        </form>
      </div>
      <h3>Users List</h3>
      <div class="tableList">
        <!-- Table for making list prettier with bootstrap -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">UserName</th>
            </tr>
          </thead>
          <tbody>
            <!-- geting user's and listing every user one by one -->
            <?php
            $userObj = new View();
            $users = $userObj->showAllUsers();

            foreach($users as $user) {
                echo '<tr><th>'.$user['id'].'</th>'.'<td>'.$user['name'].'</td></tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
