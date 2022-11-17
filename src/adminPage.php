<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="adminPage.css" />
    <link href="home.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <?php
include("db.php");
?>
  </head>
  <body >
    <div id="navbar">
      <a href="#home">Log out</a>
      <img
        class="logo-img"
        src="./assets/logo.png"
        width="80"
        height="50"
        alt="logo"
        align="CENTER"
      />
    </div>

    <div class="header">
      <div class="topic">
        <h1 id="welcome-message">Welcome!</h1>
      </div>
      <div class="topic">
        <h1 id="date-time">Time Now!</h1>
      </div>
    </div>

    <div class="home-container">
      <div class="home-blog">
        <div
          class="blog-post-card4-blog-post-card blog-post-card4-root-class-name1"
        >
          <img
            alt="Total Students"
            src="./students.jpg"
            class="blog-post-card4-image"
          />
          <div class="blog-post-card4-container">
            <span class="blog-post-card4-text1">
              <span>
                48
              </span>
            </span>
            <div class="blog-post-card4-separator"></div>
            <span class="blog-post-card4-text2">
              <span>Students</span>
            </span>
          </div>
        </div>
        <div class="home-container1">
          <div
            class="blog-post-card4-blog-post-card blog-post-card4-root-class-name2"
          >
            <img
              alt="paid Students"
              src="./paidStudents.jpg"
              class="blog-post-card4-image"
            />
            <div class="blog-post-card4-container">
              <span class="blog-post-card4-text1">
                <span>
                  30
                </span>
              </span>
              <div class="blog-post-card4-separator"></div>
              <span class="blog-post-card4-text2"><span>Paid Students</span></span>
            </div>
          </div>
          <div
            class="blog-post-card4-blog-post-card blog-post-card4-root-class-name3"
          >
            <img
              alt="notices"
              src="./activeNotice.png"
              class="blog-post-card4-image"
            />
            <div class="blog-post-card4-container">
              <span class="blog-post-card4-text1">
                <span>
                  4
                </span>
              </span>
              <div class="blog-post-card4-separator"></div>
              <span class="blog-post-card4-text2">
                <span>Active Notices</span>
              </span>
            </div>
          </div>
        </div>
        <div
          class="blog-post-card4-blog-post-card blog-post-card4-root-class-name4"
        >
          <img
            alt="availableSpace"
            src="./availableSpace.jpg"
            class="blog-post-card4-image"
            width="600"
            height="337"
          />
          <div class="blog-post-card4-container">
            <span class="blog-post-card4-text1">
              <span>
               30
              </span>
            </span>
            <div class="blog-post-card4-separator"></div>
            <span class="blog-post-card4-text2">
              <span>Available Seats</span>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-content"  >
        <div class="details">
          <div class="title"><p>Students</p></div>
          <button onclick="showPopUp()">View Students</button>
        </div>
      </div>
      <div id="popUps" class="popup" >
        <div class="container" >
          <h1 style = "float:right; margin-top: -2%;" id="close" onclick="hidePopUp()">x</h1>
          <div class="row">
            <div class="col-sm-8">
              <?php echo $deleteMsg??''; ?>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>

                      <th>Name</th>
                      <th>address</th>
                      <th>birthday</th>
                      <th>parentName</th>
                      <th>phoneNumber</th>
                      <th>token</th>
                    </tr>
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
                      <td><?php echo $data['address']??''; ?></td>
                      <td><?php echo $data['birthday']??''; ?></td>
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
    </div>

    <div class="card-content"  >
        <div class="details">
          <div class="title"><p>Paid Students</p></div>
          <button onclick="showPaidPopUp()">View Paid Students</button>
        </div>
    </div>
    <div id="paidpopUps" class="popup2" >
        <div class="container" >
          <h1 style = "float:right; margin-top: -2%;" id="close" onclick="hidePaidPopUp()">x</h1>
          <div class="row">
            <div class="col-sm-8">
              <?php echo $deleteMsg??''; ?>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Name</th>
                      <th>address</th>
                      <th>birthday</th>
                      <th>parentName</th>
                      <th>phoneNumber</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
               if(is_array($fetchData2)){      
               $sn=1;
               foreach($fetchData2 as $data){
             ?>
                    <tr>
                      <td><?php echo $sn; ?></td>
                      <td><?php echo $data['name']??''; ?></td>
                      <td><?php echo $data['address']??''; ?></td>
                      <td><?php echo $data['birthday']??''; ?></td>
                      <td><?php echo $data['parentName']??''; ?></td>
                      <td><?php echo $data['phoneNumber']??''; ?></td>
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
    </div>
    
    <div class="card-content"  >
        <div class="details">
          <div class="title"><p>Token</p></div>
          <button onclick="window.location.href='token.php'">View Token</button>
        </div>
    </div>
  <script src="adminPage.js"></script>
  </body>
</html>
