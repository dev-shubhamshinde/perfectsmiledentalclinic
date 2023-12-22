<?php include("_dbconnect.php") ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['subscribeNewslatter'])) {
        $subEmail = $_POST['subEmail'];
        $insertData = "INSERT INTO `newslatter` (`emailid`) 
        VALUES ('$subEmail')";
        $qeryofinsertData = mysqli_query($conn, $insertData);

        if ($qeryofinsertData) {
            echo '
            <script>
                alert("Thanks for subscribe Perfect Smile Dental Clinic And Implant Centre");
                window.location.href = "index.php";
            </script>
            ';
        } else {
            echo '
                <script>
                    alert("Something wents wrong! Please try again.");
                    window.location.href = "index.php";
                </script>
                ';

        }
    }
}

?>