<?php include 'Includes/header.inc';
$title = "Pets";
?>
<?php include 'Includes/nav.inc';
?>
<?php include 'Includes/db_connect.inc';
?>

<main>
    <div class="wrapper">
        <h1>Discover Pets Victoria</h1>

    </div>


    <div class="text">
        <p>PETS VICTORIA IS A DEDICATED PET ADOPTION ORGANIZATION BASED IN VICTORIA, AUSTRAIA, FOCUSED ON PROVIDING A
            SAFE AND LOVING ENVIRONMENT FOR PETS IN NEED WITH A
            COMPASSIONATE APPROACH, PETS VICTORIA WORKS TIRELESSLY TO RESCUE, REHABILITATE, AND REHOME DOGS, CATS AND
            OTHER ANIMALS. THEIR MISSION IS TO CONNECT THESE
            DESERVING PETS WITH CARING INDIVIDUALS AND FAMILIES, CREATING LIFELONG BONDS. THE ORGANIZATION OFFERS A
            REANGE OF SERVICES, INCLUDING ADOPTION COUNSELING, PET
            EDUCATION, AND COMMUNITY SUPPORT PROGRAMS, ALL AIMED TO PROMOTING RESPONSIBLE PET OWNERSHIP AND REDUCING THE
            NUMBER OF HOMELESS ANIMALS.</p>

    </div>

    <div class="pets-container">
        <img class="Pets Image" src="images/pets.jpeg" alt="pets Image">

        <table>
            <tr>
                <th>Pet Name</th>
                <th>Type</th>
                <th>Age</th>
                <th>Location</th>
            </tr>
            <?php
            $stmt = $conn->query('SELECT petid, petname, type, age, location FROM pets');
            while ($row = $stmt->fetch_assoc()) {
                echo "<tr>";
                echo "<td><a href='details.php?id=" . $row['petid'] . "'>" . $row['petname'] . "</a></td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</main>

<?php
include 'Includes/footer.inc';
?>