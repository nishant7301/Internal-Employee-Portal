<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="output.php" class="btn btn-success pull-right">Export Members</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Date</th>
                      <th>Email</th>
                      <th>check_in</th>
                      <th>check_out</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //include database configuration file
                    $db = mysqli_connect("localhost:3308","root","","maxonic");
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM attendance");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
                      <td><?php echo $row['Date']; ?></td>
                      <td><?php echo $row['Email']; ?></td>
                      <td><?php echo $row['check_in']; ?></td>
                      <td><?php echo $row['check_out']; ?></td>
                  
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No attendance(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>