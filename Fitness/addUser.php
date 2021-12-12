<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $home_address = $_POST['home_address'];
        $home_phone = $_POST['home_phone'];
        $cell_phone = $_POST['cell_phone'];

        // Local setup
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $database = "fitness";

        // server setup
        $servername = "localhost";
        $username = "pmauser";
        $password = "#i0QHbk24Z";
        $database = "fitness";

        $conn = mysqli_connect($servername, $username, $password, $database);
        // mysqli_select_db($con,'fitness');

        if (!$conn) {
            die("sorry we failed to connect: " . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `home_address`, `home_phone`, `cell_phone`) VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone')";
            // $query="insert into users (first_name, last_name, email, home_address, home_phone, cell_phone) values ('$first_name','$last_name','$email','$home_address','$home_phone','$cell_phone')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your entry has been submitted successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
                  header('location:users.php');
            } else {
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
                echo mysqli_error($conn);
                header('location:users.php');
            }
        }
    }
?>
