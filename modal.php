

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<input type="text" autocomplete="off" name="searchTags" id="searchTags" placeholder="Search" />
        
      
  
    
        <a href="javascript:void(0);" id="pencereLink">Modal</a> 
<div id="pencereKutu" class="pencere">
   <div class="pencere-content">
      <div class="pencere-head">
         <span class="kapat">x</span>
         <h2>Select File</h2>
      </div>
      <div class="pencere-main">
    
         <form action="" method="post" enctype="multipart/form-data">
  					<div class="form-group">
  						
              </div>
              <div class="form-group">
  						<input id="resim-s" type="file" name="dosya" class="form-control-file" required />
</div>
              <div class="form-group">
              <img id="resim" class="img-fluid" width="200" height="200">
          
              </div>
              <button type="submit" class="btn" name="yukle">Upload</button>
            </div>
            <div class="col-12" name="dosya" value="<?php echo $belgecek["dosya"] ?>"></div>
      
      </div>
      
   </div>
</div>
</div>
<?php
        if ($_FILES) {
        if($_FILES['dosya']['error']==0){
          if(isset($_POST["yukle"])){
          $dosya= new Upload($_FILES['dosya']);
          $geciciad=$_FILES['dosya']['name'];
                if($dosya->yukle("upload/")){
          $belgesor=$db->prepare('INSERT INTO dosya set dosya =:dosya');
          $belgesor->execute(array("dosya"=>$geciciad));
            echo '<div class="alert alert-success">Success!</div>';
 
          }
          else {
            echo '<div class="alert alert-danger">Failed!</div>';
          }
        }
      }
    }


        ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>