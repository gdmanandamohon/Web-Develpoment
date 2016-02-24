<div id="wrapper">
    <div id="content">
      <div class="top">
      </div>
<!--BEGIN home-->
      <div id="home" class="section">  
        <div id="slideshow-holder">
          <div class="bottom">
          </div>
          <div id="box-nav-slider">
            <div id="slideshow-navigation">
              <div id="pager">
              </div>
              <!--END pager-->
            </div>
            <!--END slideshow-navigation-->
          </div>
          <!--END box-nav-slider-->
          <div id="slideshow"> 

          <?php
            $databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
            $db_slect = mysql_select_db("doridro_database",$databaseConnector );

             $query = "SELECT * FROM  `tbl_slider` ORDER BY `sliderid` DESC";

             $result = mysql_query($query);
             $count =0;
             $click="Click here to visit topic ? ";
             while($row=  mysql_fetch_array($result))
             {
                 echo "<div class='slide-text'>";
                 echo "<img src='data:image/jpeg;base64,".base64_encode( $row['sliderimgdata'])."' />";
                  echo "<div class='desc'>";
                  echo "<h1>".$row['slidertitle']."</h1>";
                  echo "<p> <strong></strong></p> ";

                  echo "<ul>";
                  echo "<li>"."Album: ".$row['album']."</li>";
                  echo "<li>"."Artist: ".$row['artist']."</li>";
                  echo "<li>"."Banner: ".$row['banner']."</li>";
                  echo "<li>"."Banner: ".$row['totalsong']."</li>";
                  echo "<li>"."Bitrate: ".$row['bitrate']."</li>";
                  echo "</ul>"."<br>"."<br>";
                  $pp=$row['sliderid'];
                  echo "<a href='viewtopic_slider.php?sliderid=$pp & table=tbl_slider'>".$click."</a>";
                  echo "</div>";

                 echo "</div>";

                 $count+=1;
                if($count==4)
                    break;
            }

          ?>
            
          </div>
          <!-- END slideshow -->
        </div>
        <!--END slideshow-holder-->
		
                      <div class="column-holder">
                        <div class="one_in_three">
                          <h2>Get Latest Album's Faster</h2>
                          <br />
                          <img src="images/icon1.png" alt="" class="left" />
                          <p>
                            We try to provide all new albums as soon as they r available in market for our users. 
                            may be some time we don't get album in time. 
                            so please be patience. 
                            and those who says giving albums to users is loss for musician for them actually we approciate their hard work 
                            but we believe that sharing is caring, so enjoy
                          </p>
                        </div>
                        <!--END one_in_three-->
                        <!--END one_in_three-->
                        <div class="one_in_three last">
                          <h2>Adda & Discussion</h2>
                          <br/>
                          <img src="images/icon3.png" alt="" class="left" />
                          <p>
                            we have the biggest bangla discussion forum on the net. 
                            all hot topics & chit chatting happens around those section. 
                            its helpfull for users to know each other and share their emotions & feelings with our community
                          </p>
                        </div>
                        <!--END one_in_three last-->
                      </div>
                   <!--END column holder-->
              </div>
              <!--END home-->