<?php
    include 'db/db.php';
?>

<h3>My Destinations</h3>

            <?php
                $query = "SELECT * FROM dbShnkr22studWeb1.tbl_destinations_202 WHERE user_id = 6;"; // ADD DYNAMIC ID FROM SESSION $$$$$$$$$$$$
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die ("DB query failed");
                }
                else 
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
                        <section class ='destinations containet-fluid'>
                           <div class='destination row'>
                               <div class='col-3 destination-details destination-name'>
                                   <span>
                                       <?php echo $row['name'] ?>
                                   </span>
                               </div>
                               <div class='col-3 destination-details'>
                                   <span>
                                       <?php echo $row['street'] . " " . $row['house_number'] . " " . $row['city'] ?>
                                   </span>
                               </div>
                               <div class='col-6 destination-details'>
                                   <div class='row justify-content-center'>
                                       <button type='button' class='btn btn-info btn-sm col-6'>Choose line</button>
                                   </div>
                                   <div class='row'>
                                       <div class='col'>
                                            <a href="add-destination.php?dest_id=<?php echo $row['destination_id']?>&state=edit"><button type='button' class='btn btn-outline-secondary btn-sm edit-btn'>Edit</button></a>
                                       </div>
                                       <div class='col'>
                                        <a href="services/destination-logic.php?dest_id=<?php echo $row['destination_id']?>&state=delete"><button type='button' class='btn btn-outline-secondary btn-sm delete-btn'>Delete</button></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </section>
            
            <?php   } ?>
            <div class="add-destination-btn">
                <a href="add-destination.php"><button type="button" class="btn btn-primary">Add destination</button></a>
            </div>


<?php
  mysqli_close($connection);
?>