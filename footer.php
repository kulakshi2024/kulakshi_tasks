<footer>  
<?php
           
           // Get the current file name
           $currentFile = basename($_SERVER['PHP_SELF']);
           
           // Get the last modification time of the file
           $lastModifiedTime = filemtime($currentFile);
           
           // Format the last modification time using the date function
           $formattedLastModifiedTime = date("F d, Y H:i:s", $lastModifiedTime);
           ?>
           
           <!-- Display the last modification time in the footer -->
           
               <p style="text-align: center;">Last modified: <?php echo $formattedLastModifiedTime; ?></p>
          
        
        <div class="cards2">
          <div class="card">
            <img src="images/frame1/logo.gif" alt="image"  class="rounded mx-auto d-block img-fluid" width="75" height="50">  
            <p style="text-align: center;"><br>Tourism Hotline<br>1912</p>
          </div>
      
          <div class="card">
          <p style="text-align: center;">Quick Links</p>
          <a href="">Subscribe</a>
          <a href="">Contact Us          </a>
          <a href="">Important Notices          </a>
          <a href="">Terms of Use</a>
          <a href="">Complaints</a>
          <p style="text-align: center;"><br><br>&copy; 2024 All Rights Reserved by Team 12</p>
          

          </div>
      
          <div class="card">
            <p style="text-align: center;">Follow Us On</p>   
           <a href=""> <img src="images/frame3/facebook.png" alt="image"  width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/instagram.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/twitter.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/whatsapp.png" alt="image" width="50" height="50" style="padding: 5px;"></a>

              
          </div>
       
      
      
          
        </div>
        

      </footer>
  </div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
