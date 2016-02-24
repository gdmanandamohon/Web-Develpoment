<!--BEGIN services-->
              <div id="services" class="section">
                <div class="nav">
                  <h2> Latest Songs Download</h2>                 
                  <ul class="pagenav">           
                    <li class="down"><a href="#news"> Videos</a></li>
                    <li class="up"><a href="#about">About</a></li>              
                  </ul>
                  <!--END pagenav-->
                </div>
                <!--END nav-->		
                <div class="container">  
                  <div class="box">  
                    <ul id="tabMenu">
                      <li class="selected">Latest Bangla Albums </li>                      
                      <li> Latest Hindi Albums</li>
                      <li>Latest English Albums</li>
                      <li> Latest Kolkatan Albums</li>
                      <li>Unreleased Tracks</li>
                      <a href="http://doridro.net/"><li>Download Song Here</li></a>
                      <li class="tab-border">&nbsp;</li>
                    </ul>
                    <!--END tabMenu-->
                    
                    <div class="boxBody">          
                      <div class="desc show">
                        <img src="images/icon1.png" alt="" class="left" />
                        <h1>Latest Bangla Albums</h1>
                        <p>All recently released bangla albums can be found here. we upload all new albums as soon as it gets released to public.so stay tune with us</p>
                        
                        <?php 
                        
                            include 'dbconnection.php';
                            $query = "SELECT * FROM  `tbl_audio_allpost`  WHERE  `post_type` =  'latestbanglaalbum' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_audio_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?> 

                        <blockquote>
                          <p>You have to register to view some contents</p></blockquote>						
                        <p> <strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc-->
                      
                      <div class="desc">
                        <img src="images/icon1.png" alt="" class="left" />
                        <h1>Latest Hindi Albums</h1>                       
                        <p>
                          All recently released hindi albums can be found here. we upload all new albums as soon as it gets released to public.so stay tune with us
                        </p>
                        
                        <?php 
                        
                            
                            $query = "SELECT * FROM  `tbl_audio_allpost`  WHERE  `post_type` =  'latesthindialbum' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_audio_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By  ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                 $counter+=1;
                                if($counter==10)
                                    break;
                            }
                            
                        ?> 
                        
                        <blockquote>
                          <p>You have to register to view some contents</p>
                        </blockquote>						
                        <p>
                          <strong>Desclaimer: </strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc2-->
                      
                      <div class="desc">
                        <img src="images/icon1.png" alt="" class="left" />
                        
                        <h1>Latest English Albums</h1>                        
                        <p>
                          All recently released english albums can be found here. we upload all new albums as soon as it gets released to public.so stay tune with us
                        </p>
                        
                        
                        <?php 
                        
                           
                            $query = "SELECT * FROM  `tbl_audio_allpost`  WHERE  `post_type` =  'latestenglishalbum' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_audio_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                            
                        ?> 
                        
                        <blockquote>
                          <p>You have to register to view some contents</p>
                        </blockquote>						
                        <p>
                          <strong>Desclaimer: </strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                        
                      <!--END desc3-->
                      <div class="desc">
                        <img src="images/icon1.png" alt="" class="left" />
                        <h1> Latest Kolkatan Albums</h1>                       
                        <p>
                          All recently released kolkatan albums can be found here. we upload all new albums as soon as it gets released to public.so stay tune with us
                        </p>
                        
                        
                        <?php 
                        
                            
                            $query = "SELECT * FROM  `tbl_audio_allpost`  WHERE  `post_type` =  'latestkolkataalbum' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_audio_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                            
                        ?> 
                       
                        <blockquote>
                          <p>You have to register to view some contents</p>
                        </blockquote>						
                        <p>
                          <strong>Desclaimer: </strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc4-->
                      <div class="desc">
                        <img src="images/icon1.png" alt="" class="left" />
                        <h1>Unreleased Tracks</h1>                       
                        <p>
                          All Unreleased Demoes & Promotion songs can be found here. our dedicated user effort is behind this catagory
                        </p>
                        
                         <?php 
                         
                            $query = "SELECT * FROM  `tbl_audio_allpost`  WHERE  `post_type` =  'unreleasedtrack' ORDER BY `post_id` DESC";            
                            $result = mysql_query($query);
                            
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_audio_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                            
                        ?>
                       
                       <blockquote>
                          <p>You have to register to view some contents</p>
                        </blockquote>						
                        <p>
                          <strong>Desclaimer: </strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END step5-->
                    
                      
                    </div>
                    <!-- END boxBody-->
                    
                  </div>
                  <!--END box-->
                  
                </div>
                <!--END container-->
                
              </div>
              <!--END services-->