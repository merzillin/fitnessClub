<?php
include "header.php";
$id=$_GET["id"];
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Edit Equipment Details</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
             
             
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Equipment Details</h4>
                  <p class="card-category"></p>
                </div>
          <div class="card-body">
          <form action="#" method="POST" enctype="multipart/form-data">
          <table>
            <?php
  include "dbconnect.php";

  $sql="select * from equip where id=$id";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
  ?>
      <tr><td>trainer  Name</td>
      <td><input type="hidden" name="id" value=<?php echo $row["id"]; ?>>
        <input type="text" name="name" value=<?php echo $row["name"]; ?>></td></tr>
          
          <tr><td>price</td><td><input type="text" name="price" value="<?php echo $row["price"];?>"></td></tr>

           <tr><td>URL</td><td><input type="text" name="url" value="<?php echo $row["url"];?>"></td></tr>
           
          <tr><td>Upload Image</td><td><input type="file" name="fileToUpload" id="fileToUpload"accept="image/*" onchange="loadFile(event)">
          <img id="output" width="100px" src="../../uploads/<?php echo $row["file"];?>"/></td></tr>
          
          
          <tr>
          <td><input type="submit" class="btn btn-primary btn-round" value="Update  " name="submit" >
          </td></tr>
          </table>
      </form>
<?php
}
?>
                
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
      </div>
     <?php
     include "footer.php";
     ?>

     <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<?php
if(isset($_POST["submit"]))
{
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$url=$_POST["url"];
//name of folder to which the file is uploaded
$target_dir= "../../uploads/";
//to get the name of file to store to database
$filename=basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". $filename . " has been uploaded.";
    include "dbconnect.php";
    $sql="update equip set image='$filename',name='$name',price='$price',url='$url' where id=$id";
    $result=mysqli_query($con,$sql);
    echo "<script>alert('Successfully Inserted')</script>";
    echo '<meta http-equiv="refresh" content="0;viewequip.php">';

  } else {
    $sql="update equip set name='$name',price='$price',url='$url' where id=$id";
    $result=mysqli_query($con,$sql);
    echo "<script>alert('Successfully Inserted')</script>";
    echo '<meta http-equiv="refresh" content="0;viewequip.php">';
   
  }
}

?>


