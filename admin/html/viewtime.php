<?php
include "header.php";
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">view time</a>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">View schedule</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                   <table id="example" border=1 width=80%>
    <tr><th>change</th><th>delete</th><th>course name</th><th>TrainerName</th><th>time</th></tr>
    <?php
    include "dbconnect.php";
        $sql="select ct.id as id,c.cname as coursename , t.name as trainername, ct.time from coursetime ct,course c,trainer t where ct.trainerid=t.id and t.courseid=c.id";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
          ?>
           
          <tr>
                 <td><a href="edittime.php?id=<?php echo $row["id"]; ?>">change</a> </td>
                 <td><a href="deletetime.php?id=<?php echo $row["id"]; ?>">remove</a></td>
                
                <td><?php echo $row["coursename"];?></td>
                <td><?php echo $row["trainername"];?></td>
                <td><?php echo $row["time"];?></td>
              
                
            

           
           </tr>
          <?php
        }
          ?>
  </table>
</body>
   
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>



                
                </div>
              </div>
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

?>


