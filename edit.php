<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php 
    $conn = mysqli_connect("localhost","root","","crud") or die("Connection failed!");
    $studentId = $_GET['id'];
    $query = "SELECT * FROM student WHERE student.sid = {$studentId}";
    $result = mysqli_query($conn, $query) or die("Query failed!");    
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid'];?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php 
            $query1 = "SELECT * FROM studentclass";
            $classresult = mysqli_query($conn, $query1) or die("Query failed!");  
          
            if(mysqli_num_rows($classresult) > 0){
                echo '<select name="sclass">';
                while($row1 = mysqli_fetch_assoc($classresult)){
                    if($row['sclass']== $row1['cid']){
                        $selected = "selected";
                    }else{
                        $selected = "";
                    }
                    echo "<option value='{$row1['cid']}'>{$row1['cname']}</option>"; 
                }
                echo "</select>";
            }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
       }
     }
    ?>
</div>
</div>
</body>
</html>
