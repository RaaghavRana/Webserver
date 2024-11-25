<?php include 'Includes/header.inc';
$title = "Details";
?>
<?php include 'Includes/nav.inc'; ?>
<?php include 'Includes/db_connect.inc'; ?>

<main>
    <div class="wrapper">
        <?php // ref - https://www.w3schools.com/php/php_ref_mysqli.asp
        $petid = $_GET['id']; // Retrieving Pet ID 
        $stmt = $conn->prepare('SELECT * FROM pets WHERE petid = ?');
        $stmt->bind_param('i', $petid);
        $stmt->execute();
        $result = $stmt->get_result();
        $pet = $result->fetch_assoc(); // retrieve one row of data from a result

        if ($pet) { // displays the pet information 
            echo "<div class='pet-details'>";
            echo "<div class='pet-image'>";
            echo "<img src='images/" . $pet['image'] . "' alt='" . $pet['petname'] . "'>";
            echo "</div>";

            echo "<div class='pet-meta'>";
            echo "<div class='meta-item'>";
            echo "<span class='material-icons'>schedule</span>";
            echo "<p>" . $pet['age'] . " months</p>";
            echo "</div>";

            echo "<div class='meta-item'>";
            echo "<span class='material-icons'>pets</span>";
            echo "<p>" . $pet['type'] . "</p>";
            echo "</div>";

            echo "<div class='meta-item'>";
            echo "<span class='material-icons'>location_on</span>";
            echo "<p>" . $pet['location'] . "</p>";
            echo "</div>";
            echo "</div>";

            echo "<div class='pet-info'>";
            echo "<h2>" . $pet['petname'] . "</h2>";

            echo "<p class='pet-description'>" . $pet['description'] . "</p>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "Pet not found.";
        }
        ?>
    </div>
</main>

<?php include 'Includes/footer.inc'; ?>