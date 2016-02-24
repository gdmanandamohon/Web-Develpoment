<?php 
include 'header.php';
?>
<!-- Video Insert Field-->
          <div id="videopostfi_div">
            <article>
              <form id="videopost_form" action="InsertVideoPost.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                  <legend>Insert Video From Yours </legend>
                  <label for="title_of_post" class="post_label">Title : </label>
                  <input type="text" class="title_of_post" name="vi_title">
                  <br/>
                  <br/>
                  <select class="slect_type_post" name="vi_post_type">
                    <option selected="selected" value="mr">--Slect Option or Type--</option>
                    <option  value="banglanatoktelefilm" >Bangla Natok & Telefilm</option>
                    <option  value="BanglaDramaSerial">Bangla Drama Serial</option>
                    <option  value="LatestBanglaMovie">Latest Bangla Movie</option>
                    <option  value="LatestHindiMovie">Latest Hindi Movie</option>
                    <option  value="LatestEnglishMovie">Latest English Movie</option>
                    <option  value="LatestMusicVideos">Latest Music Videos</option>
                    <option  value="ForthComing&Reviews">Forth Coming & Reviews</option>
                    <option  value="Software">Software</option>
                    <option  value="PCGames<"> PC Games</option>
                    <option  value="TVShows">TV Shows</option>
                  </select>
                  <br/>
                  <br/>
                  <label for="shortDiscription_post" class="post_label" ">Short Description : </label>
                  <br/>
                  <br/>
                  <textarea class="shortDiscription_post" name="vi_short_dicript"></textarea>
                  <br/>
                  <br/>
                  <label for="downloadLink_post" class="post_label">Download link :</label>
                  <input type="text" class="downloadLink_post" name="vi_dl_link"/>
                  <br/>
                  <br/>
                  <label for="screenshots_post" class="post_label">Screen Shots :</label>
                  <input type="file" name='vi_image'/>
                  <br/>
                  <br/>
                  <button class="css_button_post" value="Upload">Submit Post</button>
                </fieldset>
              </form>
            </article>
          </div>
  <!-- Video Insert Field-->
<?php
include 'footer.php';
?> 

