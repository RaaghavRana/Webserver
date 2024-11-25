<?php include 'Includes/header.inc';
$title = "Gallery";
?>
<?php include 'Includes/nav.inc';
?>
<?php include 'Includes/db_connect.inc';
?>

<main>
    <div class="wrapper">
        <h1>Pets Victoria has a lot to offer!</h1>
        <p> FOR ALMOST TWO DECADES, PETS VICTORIA HAS HELPED IN CREATING TRUE SOCIAL CHANGE BY BRINGING PET ADOPTION INTO THE MAINSTREAM. OUR WORK HAS HELPED MAKE A
            DIFFERENCE TO THE VICTORIAN RESCUE COMMUNITY AND THOUSANDS OF PETS IN NEED O FRESCUE AND REHABILITATION. BUT, UNTIL EVERY PET IS SAFE, RESPECTED AND LOVED, WE ALL
            STILL HAVE BIG, HAIRY WORK TO DO.</p>

        <div class="gallery">
            <?php
            $stmt = $conn->query('SELECT petid, image, petname FROM pets');
            // ref - https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
            while ($row = $stmt->fetch_assoc()) {
                echo "<div class='gallery-item'>";
                // Link to details.php with pet ID in the query string
                echo "<a href='details.php?id=" . $row['petid'] . "' class='image-link'>";
                echo "<img src='images/" . $row['image'] . "' alt='" . $row['petname'] . "'>";
                // https:// ref - www.w3schools.com/howto/howto_css_tooltip.asp
                echo "<span class='tooltip'>Discover More <span class='material-icons'>search</span></span>"; // Tooltip with search icon
                echo "</a>";
                // showing pet name under the image
                echo "<p class='pet-name'>" . $row['petname'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</main>

<?php
include 'Includes/footer.inc';
?>