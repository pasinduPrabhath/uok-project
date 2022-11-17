<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Token</title>
    <link rel="stylesheet" href="adminPage.css" />
    <?php
include("db.php");
?>
  </head>
  <body>
  <div id="navbar">
      <a href="adminPage.php">Home</a>
      
      <img
        class="logo-img"
        src="./assets/logo.png"
        width="80"
        height="50"
        alt="logo"
        align="CENTER"
      />
    </div>

    <h1>Token</h1>
    <button onclick="generate_token(4)">Genarate Token</button>

    <form action="#" method="post">
      <label for="tokenNumber">Token number:</label>
      <input
        type="text"
        name="token"
        id="tkntxt"
        value="Generate Token Number"
        onkeydown="return false"
      />
      <input type="submit" value="Accept Token" id="tokenAccept">
    </form>
    

    <div id="paidpopUps" class="popupToken" >
        <div class="container" >
          <div class="row">
            <div class="col-sm-8">
              <?php echo $deleteMsg??''; ?>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>

                      <th>ID</th>
                      <th>Token Number</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
               if(is_array($fetchData3)){      
               $sn=1;
               foreach($fetchData3 as $data){
             ?>
                    <tr>
                      <td><?php echo $sn; ?></td>
                      <td><?php echo $data['token']??''; ?></td>
                    </tr>
                    <?php
               $sn++;}}else{ ?>
                    <tr>
                      <td colspan="2">
                        <?php echo $fetchData; ?>
                      </td>
                    </tr>

                    <tr>
                      <?php
             }?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
include("connection.php");

$db= $conn;
$tableName="token";
$columns2 = ['id','token'];

$tokenNum = $_REQUEST['token'];

$sql = "INSERT INTO token(token) VALUES ('$tokenNum')";

if(mysqli_query($db,$sql)){
    echo "success!";
}
else {
    echo "Error!";
}

mysqli_close($db);
?>
    <script src="./adminPage.js"></script>
  </body>
</html>
