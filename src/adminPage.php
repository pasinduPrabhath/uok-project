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
  <body>
    <div id="navbar">
      <a href="#home">Log out</a>
      <!-- <img
        class="profile-img"
        src="/assets/logo.png"
        width="80"
        height="50"
        alt="logo"
        align="CENTER"
      /> -->
      <img
        class="logo-img"
        src="/assets/logo.png"
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
            alt="image"
            src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHZlbmljZXxlbnwwfHx8fDE2MjYyNzIyOTA&amp;ixlib=rb-1.2.1&amp;w=1000"
            class="blog-post-card4-image"
          />
          <div class="blog-post-card4-container">
            <span class="blog-post-card4-text"><span>JULY 24</span></span>
            <span class="blog-post-card4-text1">
              <span>
                Lorem ipsum lorem ipsum dolor sit amet, consectetur adipiscing
                elit.
              </span>
            </span>
            <div class="blog-post-card4-separator"></div>
            <span class="blog-post-card4-text2">
              <span>Business &amp; Travel</span>
            </span>
          </div>
        </div>
        <div class="home-container1">
          <div
            class="blog-post-card4-blog-post-card blog-post-card4-root-class-name2"
          >
            <img
              alt="image"
              src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDN8fHRyYXZlbHxlbnwwfHx8fDE2MjY0MzI2Mjc&amp;ixlib=rb-1.2.1&amp;h=1000"
              class="blog-post-card4-image"
            />
            <div class="blog-post-card4-container">
              <span class="blog-post-card4-text"><span>JULY 24</span></span>
              <span class="blog-post-card4-text1">
                <span>
                  Lorem ipsum lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.
                </span>
              </span>
              <div class="blog-post-card4-separator"></div>
              <span class="blog-post-card4-text2"><span>Nature</span></span>
            </div>
          </div>
          <div
            class="blog-post-card4-blog-post-card blog-post-card4-root-class-name3"
          >
            <img
              alt="image"
              src="https://images.unsplash.com/photo-1446822775955-c34f483b410b?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDI0fHx0cmF2ZWwlMjBmb29kfGVufDB8fHx8MTYyNjQ1Mjg0Ng&amp;ixlib=rb-1.2.1&amp;w=1000"
              class="blog-post-card4-image"
            />
            <div class="blog-post-card4-container">
              <span class="blog-post-card4-text"><span>JULY 24</span></span>
              <span class="blog-post-card4-text1">
                <span>
                  Lorem ipsum lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.
                </span>
              </span>
              <div class="blog-post-card4-separator"></div>
              <span class="blog-post-card4-text2">
                <span>Food &amp; Drink</span>
              </span>
            </div>
          </div>
        </div>
        <div
          class="blog-post-card4-blog-post-card blog-post-card4-root-class-name4"
        >
          <img
            alt="image"
            src="https://images.unsplash.com/photo-1510525009512-ad7fc13eefab?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fGJvYXR8ZW58MHx8fHwxNjI2NDUyODIx&amp;ixlib=rb-1.2.1&amp;w=1000"
            class="blog-post-card4-image"
          />
          <div class="blog-post-card4-container">
            <span class="blog-post-card4-text"><span>JULY 24</span></span>
            <span class="blog-post-card4-text1">
              <span>
                Lorem ipsum lorem ipsum dolor sit amet, consectetur adipiscing
                elit.
              </span>
            </span>
            <div class="blog-post-card4-separator"></div>
            <span class="blog-post-card4-text2">
              <span>Foods &amp; Drink</span>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <div class="details">
          <div class="title"><p>Students</p></div>
          <button onclick="showPopUp()">View Students</button>
        </div>
      </div>
      <div id="popUps" class="popup">
        <div class="container">
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

    <section class="content">
      <p>Paid Students</p>
    </section>

    <script src="adminPage.js"></script>
  </body>
</html>
