<?php

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
                    <a href="linesPage.php">
                        <button type='button' class='btn btn-info btn-sm col-6'>Choose line</button>
                    </a>
                </div>
                <div class='row'>
                    <div class='col'>
                        <a href="add-destination.php?dest_id=<?php echo $row['destination_id'] ?>&state=edit"><button type='button' class='btn btn-outline-secondary btn-sm edit-btn'>Edit</button></a>
                    </div>
                    <div class='col'>
                        <?php
                        if ($_SESSION['type'] == 1 && isset($_GET['childId'])) {
                            $url = "services/destination-logic.php?childId=" . $_GET['childId'] . "&dest_id=" . $row['destination_id'] . "&state=delete";
                        } else {
                            $url = "services/destination-logic.php?dest_id=" . $row['destination_id'] . "&state=delete";
                        }
                        ?>
                        <a href="<?php echo $url; ?>"><button type='button' class='btn btn-outline-secondary btn-sm delete-btn'>Delete</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>