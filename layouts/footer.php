<footer id="footer"> 
      <div class="bg"></div>  
      <div class="content"> 
        <div class="group"> 
          <div class="col span_1_of_3"> 
            <h2>Links</h2>  
            <div class="vmenu"> 
              <ul> 
                <li>
                  <a href="index.php">Home</a>
                </li>  
                <li>
                  <a href="about_us.php">About</a>
                </li>  
                <li>
                  <a href="gallery.php">Gallery</a>
                </li>
                <li>
                  <a href="community.php">Community</a>
                </li>
                <li>
                  <a href="online_registration.php">Register</a>
                </li>
                <?php
                  if(isset($_SESSION['admin_logged_in'])){
                    echo '<li><a href="admin_dashboard.php">Admin Dashboard</a></li>';
                  }
                ?>
              </ul> 
            </div> 
          </div>  
          <div class="col span_1_of_3"> 
            <h2>About Us</h2>  
            <p><?php echo $websiteAbout; ?></p> 
          </div>  
          <div class="col span_1_of_3"> 
            <h2>Contact</h2>  
            <p><?php echo $websiteName; ?>
              <br /> <?php echo $websiteAddress; ?>
              <br /> <?php echo $websiteEmail; ?>
              <br /> <?php echo $websiteContact; ?>
            </p> 
          </div> 
        </div>  
        <div class="clear"></div>  
        <div class="baseline"> 
          <div style="float:left;margin-top:7px"> 
            <p> 
              <!-- Update your organization copyright --> Copyright - 2022 - <?php echo $websiteName; ?> | All Rights Reserved | 
              Promotional Website for <?php echo $websiteTitle; ?> | A Project from FEU Institute of Technology
            </p> 
          </div>  
          <div class="clear"></div> 
        </div> 
      </div> 
</footer> 