<?php require_once("includes/header.inc.php");

include "includes/dbconn.inc.php"; ?>



<div class="meniu_div container-fluid">
    <div class="row">

    

<?php 


    $sql = "select numeProdus, imagineProdus, descriereProdus from produse";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) { ?>

             
            <div class="col-4" >
                <br style= "margin-bottom: 2%">
                    <div class="card" style="width:24rem;">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['imagineProdus'] ) ?>" class="img-thumbnail" alt="image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["numeProdus"]?></h5>
                            <p class="card-text" style="color: black"><?php echo $row["descriereProdus"] ?></p>
                        </div>
                    </div>
            </div>
            
              



    <?php        
        }
    } else {
        echo "0 results";
    }


    $conn->close(); ?>

    </div>
</div>





<?php require_once("includes/footer.inc.php") ?>