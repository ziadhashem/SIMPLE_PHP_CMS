  
 <?php
  
  $quary_String='select * from `cms`.`config` '; 
  $rs_result = mysqli_query($conn, $quary_String);  
  $row = mysqli_fetch_row($rs_result);
  $Facebook=$row[4]; $Twitter=$row[6];
  if($Facebook=='')
  {
    $Facebook='#'; 
  }
  if( $Twitter=='')
  {
    $Twitter='#';
  }
  
echo '<section class="container-fluid" style="margin-top: 20px;">
    <div class="copyright" id="copyright">
            <div class="col-sm-4 text-right" id="footertext">  '.$row[1].' </div>
            <div class="col-sm-6 "> </div>
            <div class="col-sm-2 text-left">
           
                <a href="'.$Twitter.'" target="_blank"><div class="twitter-hover social-slide"></div></a>
                <a href="'.$Facebook.'" target="_blank"><div class="facebook-hover social-slide"></div></a>
            </div>
        <div class="clearfix"></div>
    </div>
  
</section>';
?>
<!-- end footer -->
<?php
    close_db();
?>
     
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/myjs.js"></script>

    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/formjs.js"></script>
    
   
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>
    <script src="../js/getPosts.js"></script>
  </body>
</html>