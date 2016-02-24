<?php 
include 'header.php';
?>
 <!-- Audio Insert Field-->
<div id="audiopostfild_div">
            
            <article >
              
                <form id="audiopost_form" action="InsertAudioPosr.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                      <legend>Insert Audio From Yours</legend>
                      <label for="title_of_post" class="post_label" >Title : </label>
                       <input type="text" class="title_of_post" name="au_title">
                       <br/>
                       <br/>
                       <select class="slect_type_post" id="post_type" name="au_post_type">
                         <option selected="selected" value=""> --Slect Option or Type--</option>
                         <option  value="latestbanglaalbum" >Latest Bangla Song</option>
                         <option  value="latesthindialbum">Latest Hindi Song</option>
                         <option  value="latestenglishalbum">Latest English Song</option>
                         <option  value="latestkolkataalbum">Latest Kolkata Album</option>
                         <option  value="unreleasedtrack">Unrealesed Tracks</option>
                       </select>
                       <br/>
                       <br/>
                       <label for="shortDiscription_post" class="post_label">Short Description :</label>
                       <br/>
                       <br/>
                       <textarea class="shortDiscription_post" name="au_short_dicript" id="short_dicript"></textarea>
                       <br/>
                       <br/>
                       <label for="downloadLink_post" class="post_label" >Download link :</label>
                       <input type="text" class="downloadLink_post" name="au_dl_link" id="dl_link"/>
                       <br/>
                       <br/>
                       <label for="screenshots_post" class="post_label">Screen Shots :</label>
                       <input type="file" name="au_image"/>
                       <br/>
                       <br/>
                       <button class="css_button_post" value="Upload">Submit Post</button>
                    </fieldset>
              </form>             
         </article>
 </div>
   <!--end Audio Insert Field-->
<?php
include 'footer.php';
?> 

