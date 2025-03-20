<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
        <h1>Admin Page</h1>
    </header>

    <nav>
        <a href="./admin.php">Contact Us</a>
        <a href="./feedback.php">Feedback</a>
        <a href="./Registation.php">Registation Details</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <section>
        <img src="./images1/logo.svg.PNG" alt="Header Image">

       
   
    <div class="dashboard-section">
            <h2>Registation Details</h2>
            
            <?php
             include 'connn.php';
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Id</th><th>name</th><th>email</th><th>tel_no</th><th>address</th><th>course_name</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['email']}</td><td>{$row['number']}</td><td>{$row['address']}</td><td>{$row['course_name']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }           
            ?>
        </div>
        <div>
       <form action="delete.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_reg">Delete Data</button>
                    </div>
                </form>
       </div>

        </section>
</body>
</html>