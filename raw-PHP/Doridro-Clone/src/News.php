<!--BEGIN news-->
              <div id="news" class="section"> 
                <div class="nav">
                  <h2> Latest Videos Download</h2>
                  <ul class="pagenav">
                    <li class="down"><a href="#contact">Contact</a></li>   
                    <li class="up"><a href="#services">Songs </a> </li>
                  </ul>
                  <!--END pagenav-->
                </div>
                <!--END nav-->
                <div class="container">
                  <div class="news-holder"> 
                    <ul id="tab-nav">
                      <li class="selected">Bangla Natokz & Telefilms</li>
                      <li> Bangla Drama Serials</li>
                      <li>Latest Bangla Movies</li>
                      <li>Latest Hindi Movies</li>
                      <li>Latest English Movies</li>
                      <li>Latest Music Videos</li>
                      <li>Forthcoming & Reviews</li>
                      <li>Software</li>
                      <li>Pc Games</li>
                      <li>Tv Shows</li>
                      <li>Watch Online</li>
                    </ul>
                    <!--END tab-nav-->
                    <div class="news">
                      <div class="desc show">
                        <h1>Latest Bangla Natokz & Telefilms</h1>
                        <p>
                          All recently released Bangla Natokz & Telefilms can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                        <!-- bangla natok & telefilm-->
                        
                        
                        <?php 
                        include 'dbconnection.php';
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'banglanatoktelefilm' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?> 
                       
                        
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc1-->
                      
                      <div class="desc">
                        <h1>
                          Bangla Drama Serials
                        </h1>
                        
                        <p>
                          All recently released Bangla Drama Serials can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                        <!-- BAngla Drama serial -->
                        
                        
                         <?php 
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'BanglaDramaSerial' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?>
                        
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc2-->
                      
                      <div class="desc">
                        <h1>
                          Latest Bangla Movies
                        </h1>
                        
                        <p>
                          All recently released Bangla Movies can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                        <!-- latest Bamgla Movie -->
                        
                        <?php 
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'LatestBanglaMovie' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?>
                        
                          
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc3-->
                      
                      
                      <div class="desc">
                        <h1>
                          Latest Hindi Movies
                        </h1>
                        
                        <p>
                          All recently released Hindi Movies can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                        <!-- Latest Hindi Movie-->
                        <?php
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'LatestHindiMovie' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?>
                        
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END desc3-->
                      <!--- Latest English Movie-->
                      <div class="desc">
                        <h1>
                          Latest English Movies
                        </h1>
                        
                        <p>
                          All recently released English Movies can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                        
                        <?php
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'LatestEnglishMovie' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?>
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Latest English Movie-->
                      
                       <!--Latest Music Videos-->
                      <div class="desc">
                        <h1>
                          Latest Music Videos
                        </h1>
                        
                        <p>
                          All recently released Music Videos can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                       <?php 
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'LatestMusicVideos' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                 echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?>
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Latest Music Videos-->
                      
                      <!-- Forthcoming & Reviews-->
                      <div class="desc">
                        <h1>
                          Forthcoming & Reviews
                        </h1>
                        
                        <p>
                          News & Reviews of upcoming movies , albums & songs . visit this section and be up to date with the media
                        </p>
                        <?php 
                            $query = "SELECT * FROM  `tbl_video_allpost`  WHERE  `post_type` =  'ForthComing&Reviews' ORDER BY `post_id` DESC";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            $counter=0;
                            while($row=  mysql_fetch_array($result))
                            {
                                $pp =$row['post_id']; 
                                echo "<li>"."<a target='_blank' href='viewtopic.php?post_id=$pp & table=tbl_video_allpost'>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                $counter+=1;
                                if($counter==10)
                                    break;
                            }
                        ?>
                       <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Forthcoming & Reviews-->
                      <!--Software-->
                      <div class="desc">
                        <h1>
                          Software
                        </h1>
                        
                        <p>
                          All recently released Software can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                       <?php 
                            $query = "Select * from tbl_software";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            
                            while($row=  mysql_fetch_array($result))
                            {
                                echo "<li>"."<a target='_blank' href=''>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                
                            }
                        ?> 
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Software-->
                      <!--Pc Games-->
                      <div class="desc">
                        <h1>
                          Pc Games
                        </h1>
                        
                        <p>
                          All recently released Pc Games can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                       <?php 
                            $query = "Select * from tbl_pc_games";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            
                            while($row=  mysql_fetch_array($result))
                            {
                                echo "<li>"."<a target='_blank' href=''>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                
                            }
                        ?> 
                       <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Pc Games-->
                      
                       <!--Tv Shows-->
                      <div class="desc">
                        <h1>
                          Tv Shows
                        </h1>
                        
                        <p>
                          All recently released Tv Shows can be found here. we upload all as soon as it gets released to public.so stay tune with us
                        </p>
                        <?php 
                            $query = "Select * from tbl_tv_shows";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            
                            while($row=  mysql_fetch_array($result))
                            {
                                echo "<li>"."<a target='_blank' href=''>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                
                            }
                        ?> 
                       <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Tv Shows-->
                      
                      <!--Watch Online-->
                      <div class="desc">
                        <h1>
                          Watch Online
                        </h1>
                        
                        <p>
                          Actually we link here external sites where you can view online movies , natokz , music videos and many more
                        </p>
                        <?php 
                        
                            $query = "Select * from tbl_banglanattok_telefilm";
                            $result = mysql_query($query);
                            $count =0;
                            echo "<ul class='indent-ul'>";
                            
                            while($row=  mysql_fetch_array($result))
                            {
                                echo "<li>"."<a target='_blank' href=''>".$row['post_title'];
                                echo "<font color=7E354D>"."   By   ";
                                echo "<font color=486666>"."<strong>".$row['post_admin']."</strong>";
                                echo "</a>"."</li>";
                                
                            }
                        ?> 
                        <blockquote><p>You have to register to view some contents</p></blockquote>			
                        <p><strong>Desclaimer:</strong>
                          Please note that we do not host any of these files in our server. so we don't take any responsibility for those. that's why all reports against those will be denied. thanks
                        </p>
                      </div>
                      <!--END Watch Online-->
                      
                      <!-- BEGIN TAG - DO NOT MODIFY -->
                    
                      <!-- END TAG -->
                    </div>
                    <!-- END news-->
                    
                  </div>
                  <!--END news holder-->
                </div>
                <!--END container-->   
              </div>
            <!--END news -->