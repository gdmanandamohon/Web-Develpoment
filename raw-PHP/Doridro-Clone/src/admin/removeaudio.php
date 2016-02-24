<?php 
include 'header.php';
?>
            <form>
                <select class="slect_type_post" id="post_type" name="posttype">
                         <option  value=""> --Slect Option or Type--</option>
                         <option  value="latestbanglaalbum" >Latest Bangla Song</option>
                         <option  value="latesthindialbum">Latest Hindi Song</option>
                         <option  value="latestenglishalbum">Latest English Song</option>
                         <option  value="latestkolkataalbum">Latest Kolkata Album</option>
                         <option  value="unreleasedtrack">Unrealesed Tracks</option>
                </select>
                <input type="submit" name="slect_posttype_btn" value="Search" class="logOutButton"/>
            </form>
                <?php
                    
                    if(isset($_REQUEST['slect_posttype_btn']))
                        {
                            $postType = $_REQUEST['posttype'];
                            $quer ="SELECT DISTINCT  `post_title`, post_id FROM  `tbl_audio_allpost` WHERE  `post_type` =  '$postType '"; 
                            $result2 = mysql_query($quer);
                            echo '<form>';
                            echo "<select  name='postrow' class='slect_type_post'><option value='' >Select one</option>";
                            while ($row2 = mysql_fetch_array($result2))
                            {
                                echo  "<option  value='".$row2['post_id']."'>".$row2['post_title']."</option>";
                            }
                            echo "</select>"; 
                            echo "<input type='submit' name='slect_postname_btn' value='Search' class ='logOutButton'>";
                            echo '</form>';
                        }
                        if(isset($_REQUEST['slect_postname_btn']))
                         {
                            $postrow=$_REQUEST['postrow'];
                            if($postrow==NULL)
                            {
                                echo" <script> alert('Nothing To Select');  window.location.href='removeaudio.php';</script>";
                            }
                            else 
                            {
                                $queryshow ="SELECT * FROM  `tbl_audio_allpost` WHERE  `post_id` =  '$postrow'";
                                $result =  mysql_query($queryshow);
                                $all = mysql_fetch_array($result );
                                echo'post title '.$all['post_title'];
                                echo "<img style ='width:250px; height: 250px;' src='data:image/jpeg;base64,".base64_encode( $all['post_screenshot'] )."'/>";
                                echo "<form method ='POST'><input type='hidden' value='$postrow' name='row_id' ><input type='submit' name = 'conformdelete' value ='Delete' class ='logOutButton'> </form>";
                            }
                         } 
                         if(isset($_REQUEST['conformdelete']))
                         {
                             $rowslected =$_POST['row_id'];
                             if($rowslected==NULL)
                             {
                                  echo" <script> alert('Nothing To Delete');  window.location.href='removeaudio.php';</script>";
                             }
                             else 
                             {
                                 $querydelete ="DELETE FROM `tbl_audio_allpost` WHERE `post_id`='$rowslected'";
                                mysql_query($querydelete);
                                echo" <script> alert('Item Succesfully Deleted');  window.location.href='removeaudio.php';</script>";
                               // echo $querydelete;
                             }
                         }
                ?>
            </form>
            
         </div>
      </div>
      <footer>
        <h4> &COPY copyright <a href="doridro.com">Doridro.com </a></h4>
      </footer>
    </div>
   
  </body>
</html>