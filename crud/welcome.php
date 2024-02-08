    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);

        // Display welcome message
        echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
    }
    ?>

</body>
</html>
