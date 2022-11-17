<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Token</title>
    <link rel="stylesheet" href="adminPage.css" />
    <link rel="stylesheet" href="token-style.css">
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

    <div class="token-class">

    <h1>Genarate a Token</h1>
    
    
    <form action="#" method="post">
      <input
        type="text"
        name="token"
        id="tkntxt"
        value="Generate Token Number"
        onkeydown="return false"
      />
      
      <input type="submit" value="Accept Token" id="tokenAccept">
    </form>
    <button onclick="generate_token(4)">Genarate Token</button>


    </div>
    
    <!-- <div id="paidpopUps" class="popupToken" >
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
    </div> -->

    <div id="popUps" class="popupToken" >
        <div class="container" >
          <h1 style = "float:right; margin-top: -2%;" id="close" onclick="hidePopUp()">x</h1>
          <div class="row">
            <div class="col-sm-8">
              <?php echo $deleteMsg??''; ?>
              <div class="table-responsive">
                <table class="table-table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>

                      <th>Name</th>
                      
                      
                      <th>Email</th>
                      <th>phoneNumber</th>
                      <th>token</th>
                    </tr>
                    <tr></tr><tr></tr>
                  </thead>

                  <tbody>
                    <?php
               if(is_array($fetchData)){      
               $sn=1;
               foreach($fetchData as $data){
             ?>
                    <tr>
                      <td><?php echo $sn; ?></td>
                      <td><?php echo $data['name']??''; ?></td>
                      
                      
                      <td><?php echo $data['parentName']??''; ?></td>
                      <td><?php echo $data['phoneNumber']??''; ?></td>
                      <td><?php echo $data['token']??''; ?></td>
                    </tr>
                    <?php
               $sn++;}}else{ ?>
                    <tr>
                      <td colspan="8">
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
    <?php
include("connection.php");

$db= $conn;
$tableName="token";
$columns2 = ['id','token'];

$tokenNum = $_REQUEST['token'];

$sql = "INSERT INTO token(token) VALUES ('$tokenNum')";

if(mysqli_query($db,$sql)){
    // echo "success!";
}
else {
    echo "Error!";
}

mysqli_close($db);
?>
    <script src="./adminPage.js"></script>
  </body>
</html>
