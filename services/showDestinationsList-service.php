
<!-- filter goes here -->

<?php
echo"<h3>My Destinations</h3>";
while ($row = mysqli_fetch_assoc($result)) { ?>
<section class='destinations containet-fluid'>
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
                <a href="linesPage.php?destname=<?php echo $row['name'] ?>">
                    <button type='button' class='btn btn-info btn-sm col-6'>Choose line</button>
                </a>
            </div>
            <div class='row'>
                <div class='col'>
                    <a href="add-destination.php?dest_id=<?php echo $row['destination_id'] ?>&state=edit"><button
                            type='button' class='btn btn-outline-secondary btn-sm edit-btn'>Edit</button></a>
                </div>
                <div class='col'>
                    <?php
                        if ($_SESSION['type'] == 1 && isset($_GET['childId'])) {
                            $url = "services/destination-logic.php?childId=" . $_GET['childId'] . "&dest_id=" . $row['destination_id'] . "&state=delete";
                        } else {
                            $url = "services/destination-logic.php?dest_id=" . $row['destination_id'] . "&state=delete";
                        }
                        ?>
                    <button type='button' class='btn btn-outline-secondary btn-sm delete-btn' id="dest-delete-btn"
                        data-toggle="modal" data-target="#exampleModal" data-dest_name="<?php echo $row['name'] ?>"
                        data-url="<?php echo $url ?>">Delete</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php } ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete this destination?</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?php echo $url; ?>">
                    <button type="button" class="btn btn-primary">Delete</button>
                </a>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="scripts/destination-delete.js"></script>