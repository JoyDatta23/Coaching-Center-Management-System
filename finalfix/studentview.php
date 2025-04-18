<?php include('connect.php') ?>
<?php //  username  nisi session thikka


$id_query = "SELECT ID,Name FROM student WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
    $you = $row["Name"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Students Page</title>
    <!-- <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dropdown.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>


</head>

<body style="height: 1600px;">
    <div class="sidebar">
        <!-- Logo and Welcome Message -->
        <div class="logo-container">
            <img src="image/4.logo.PNG" alt="Logo" class="logo-img">
            <p style="color: white; margin-top: 10px;">Welcome, <?php echo $you; ?></p>
        </div>

        <a href="studentview.php"><i class="fas fa-home"></i> Home</a>
        <a href="studentcourse.php" class="active"><i class="fas fa-book"></i> Course Information</a>
        <a href="studentschedule.php"><i class="fas fa-calendar-alt"></i> Class Schedule</a>
        <a href="studentenrol.php"><i class="fas fa-graduation-cap"></i> Course Enrollment</a>
        <a href="studentresult.php"><i class="fas fa-chart-bar"></i> Result</a>
        <a href="studentsetting.php"><i class="fas fa-cog"></i> Settings</a>
        <a href="home.php"><i class="fas fa-sign-out-alt"></i> Logout</a>

        <!-- Social Media Links -->
        <div class="social-links">
            <ul>
                <li>
                    <a class="nav-link" href="https://www.facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="https://www.youtube.com">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div style="margin-left: 250px;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Your navigation menu remains unchanged -->
        </nav>
        <div style="position:center;justify-content:center;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="image/1.jpg" alt="..." style="width: 100%; height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="image/2.jpg" alt="..." style="width: 100%; height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="image/3.png" alt="..." style="width: 100%; height: 500px;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>

        <section class="course">
            <h1 class="text-center">
                <marquee style="background-color: #555; color: #2bcafa;"> **ADMISSION IS ONGOING FOR BATCH 3** </marquee>
            </h1>
            <br>
            <br>

            <div class="section-container">
                <div class="section">
                    <label for="first-dropdown">Select Category:</label>
                    <div>
                        <select id="first-dropdown">
                            <option value="science">Science</option>
                            <option value="arts">Arts</option>
                            <option value="commerce">Commerce</option>
                        </select>
                    </div>
                </div>
                <div class="section">
                    <label for="second-dropdown" id="second-dropdown-label" style="display: none;">Select Item:</label>
                    <select id="second-dropdown" style="display: none;">
                        <!-- Options will be populated using JavaScript -->
                    </select>

                </div>
                <div class="section">
                    <label for="third-dropdown" id="third-dropdown-label" style="display: none;">Select Subject:</label>
                    <select id="third-dropdown" style="display: none;">
                        <!-- Options will be populated using JavaScript -->
                    </select>
                </div>
            </div>
    </div>


    <script>
        // Get references to the dropdowns
        const firstDropdown = document.getElementById("first-dropdown");
        const secondDropdown = document.getElementById("second-dropdown");
        const secondDropdownLabel = document.getElementById("second-dropdown-label");
        const thirdDropdown = document.getElementById("third-dropdown");
        const thirdDropdownLabel = document.getElementById("third-dropdown-label");

        // Define options for the second and third dropdowns based on the selection in the first dropdown
        const optionsByCategory = {
            selectCourse: {
                types: [],
                subjects: {}
            },
            science: {
                types: ["Select-Level", "A-Level", "O-level"],
                subjects: {
                    "Select-Level": [],
                    "A-Level": ["Physics", "Chemistry", "Biology"],
                    "O-level": ["Physics", "Chemistry", "Biology"]
                }
            },
            arts: {
                types: ["Select-Level", "A-Level", "O-level"],
                subjects: {
                    "Select-Level": [],
                    "A-Level": ["Economics", "Law", "Math"],
                    "O-level": ["History", "Literature", "Music"]
                }
            },
            commerce: {
                types: ["Select-Level", "A-Level", "O-level"],
                subjects: {
                    "Select-Level": [],
                    "A-Level": ["Accounting", "Business ", "Economics ", "Math"],
                    "O-level": ["English", "Bangla", "Math", "Accounting", "Business ", "Economics"]
                }
            }
        };

        // Function to populate the second and third dropdowns based on the selection in the first dropdown
        function populateSecondDropdown() {
            const selectedCategory = firstDropdown.value;
            const typeOptions = optionsByCategory[selectedCategory]?.types || [];

            // Clear existing options
            secondDropdown.innerHTML = "";
            thirdDropdown.innerHTML = "";

            // Populate the second dropdown with type options
            for (const optionText of typeOptions) {
                const option = document.createElement("option");
                option.text = optionText;
                secondDropdown.add(option);
            }

            // Show/hide the second dropdown based on the selection in the first dropdown
            if (typeOptions.length > 0 && typeOptions) {
                secondDropdown.style.display = "block";
                secondDropdownLabel.style.display = "block";
            } else {
                secondDropdown.style.display = "none";
                secondDropdownLabel.style.display = "none";
                thirdDropdown.style.display = "none";
                thirdDropdownLabel.style.display = "none";
            }

            // Populate the third dropdown with subject options when a type is selected
            secondDropdown.addEventListener("change", function() {
                const selectedType = secondDropdown.value;
                const subjectOptions = optionsByCategory[selectedCategory]?.subjects[selectedType] || [];

                // Clear existing options
                thirdDropdown.innerHTML = "";

                // Populate the third dropdown with subject options
                for (const optionText of subjectOptions) {
                    const option = document.createElement("option");
                    option.text = optionText;
                    thirdDropdown.add(option);
                }

                // Show/hide the third dropdown based on the selection in the second dropdown
                if (subjectOptions.length > 0) {
                    thirdDropdown.style.display = "block";
                    thirdDropdownLabel.style.display = "block";
                } else {
                    thirdDropdown.style.display = "none";
                    thirdDropdownLabel.style.display = "none";
                }
            });
        }

        // Add an event listener to the first dropdown to trigger population of the second and third dropdowns
        firstDropdown.addEventListener("change", populateSecondDropdown);

        // Initialize the second and third dropdowns based on the initial selection
        populateSecondDropdown();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>