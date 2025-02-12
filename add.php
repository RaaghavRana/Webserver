<?php include 'Includes/header.inc';
$title = "Add a Pet";
?>
<?php include 'Includes/nav.inc';
?>

<main>
    <div class="wrapper">
        <h1>Add a Pet</h1>
        <h2 class="third_heading">You Can Add A New Pet Here</h2>
        <form action="process_add.php" method="post" enctype="multipart/form-data">
            <label for="name">Pet Name:</label>
            <input type="text" id="name" name="petname" class="full-width" placeholder="Provide a name for the pet" required><br><br>

            <label for="pet">Pet Type:</label>
            <select id="pet" name="type" required>
                <option value="" disabled selected>---Choose an option---</option>
                <option value="Cat">Cat</option>
                <option value="Dog">Dog</option>
            </select><br><br>

            <label for="description">Pet Description:</label>
            <textarea id="description" name="description" class="full-width" placeholder="Describe the pet briefly" required></textarea><br><br>

            <label for="pet_image">Select an image:</label>
            <input type="file" id="pet_image" name="image" accept="image/*" required><br><br>

            <label for="name">Image Caption:</label>
            <input type="text" id="caption" name="caption" class="full-width" placeholder="Describe the image in one word" required><br><br>

            <label for="age">Age (Months):</label>
            <input type="number" id="age" name="age" class="full-width" placeholder="Age of pet in months" required><br><br>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" class="full-width" placeholder="Location of the pet" required><br><br>

            <div class="button-group">
                <button type="submit" class="btn submit-btn">
                    <span class="material-icons">check</span>
                    Submit
                </button>
                <button type="reset" class="btn reset-btn">
                    <span class="material-icons">clear</span>
                    Clear
                </button>
            </div>
        </form>
    </div>
</main>

<?php
include 'Includes/footer.inc';
?> 