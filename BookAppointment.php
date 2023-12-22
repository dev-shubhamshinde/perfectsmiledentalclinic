<?php include("_dbconnect.php") ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['BookAppoinment'])) {
        $selectedService = $_POST['selectedService'];
        $selectedDoctor = $_POST['selectedDoctor'];
        $applicantName = $_POST['applicantName'];
        $applicantEmail = $_POST['applicantEmail'];
        $appoinmentDate = $_POST['appoinmentDate'];
        $appoinmentTime = $_POST['appoinmentTime'];

        $addAppoinmenet = "INSERT INTO `appointment` (`applicant_name`, `applicant_emailid`, `appointment_date`, `appointment_time`, `selected_service`, `selected_doctor`) 
        VALUES ('$applicantName', '$applicantEmail', '$appoinmentDate', '$appoinmentTime', '$selectedService', '$selectedDoctor')";
        $qeryofAddAppoinmenet = mysqli_query($conn, $addAppoinmenet);

        if ($qeryofAddAppoinmenet) {
            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";

            $mail = new PHPMailer(true);

            // SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "shubhamshinde9530@gmail.com";
            $mail->Password = "jttm uaqi amig khqc";
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            // First email
            $mail->isHTML(true);
            $mail->setFrom("shubhamshinde9530@gmail.com");
            $mail->addAddress("shubhamshinde9530@gmail.com");
            $mail->Subject = "Appointment Request at Perfect Smile Dental Clinic And Implant Centre";
            $mail->Body = " 
            Dear Perfect Smile Dental Clinic And Implant Centre Team, <br>

            The patient requires dental care and would like to schedule an appointment with <u> $selectedDoctor. </u> <br><br>
            
            Patient Details: <br>
            Name: $applicantName <br>
            Email: $applicantEmail <br><br>
            
            Appointment Details: <br>
            Date: $appoinmentDate <br>
            Time: $appoinmentTime <br><br>

            Type of Dental Service Required: <br> $selectedService <br><br>

            We kindly request your assistance in confirming the availability of $selectedDoctor and securing an appointment on the mentioned date and time. Please feel free to contact us at 9123456789 for any further details or adjustments. <br><br>
            
            Best regards, <br>
            Perfect Smile Dental Clinic And Implant Centre
            ";





            try {
                $mail->send();
                echo '<script>
                        alert("Thank you! Your appointment has been successfully booked. We look forward to seeing you on ' . $appoinmentDate . ' at ' . $appoinmentTime . '");
                        window.location.href = "index.php";
                        </script>';

            } catch (Exception $e) {
                echo '<script>
                            alert("Something went wrong! Please try again.");
                            window.location.href = "index.php";
                        </script>';
            }
            mysqli_close($conn);

            // exit(json_encode(array("status" => $status, "response" => $response)));
        }
    }
}
?>