
<?php
ob_start();
// session_start();
// if (isset($_POST["Login"]) && !empty($_POST["Username"]) && !empty($_POST["Password"])) {
//     $userfile = fopen("./txt/credentials.txt", "r");
//     while (($line = fgets($userfile)) !== false) {
//         $line = rtrim($line, "\r\n");
//         $user = explode(",", $line);
//         if ($_POST["Username"] == $user[0]  && $_POST["Password"] == $user[1]) {
//             $_SESSION["user"] = $_POST["Username"];
//             fclose($userfile);
//             header("location: ./secure.php");
//             exit;
//         }
//     }
    session_start();
    $myfile = fopen("credentials.txt", "r");
    while(!feof($myfile)) {
        $line=fgets($myfile);
        if (strpos($line, 'Email') !== false) {
            $checkEmail=explode(":",$line)[1];
            $checkEmail = trim($checkEmail);
        }
        elseif(strpos($line, 'Password') !== false)
        {
            $checkPassword=explode(":",$line)[1];
            $checkPassword = trim($checkPassword);
        }
      }
    fclose($myfile);
    if ($checkEmail==$emailID && $checkPassword==$password){
        $_SESSION["allowed"]=true;
        header('location:users.php');
    }
    else{
        $_SESSION["message"]="Incorrect Email Id or Password";
        header('location:login.php');
    }


} else {
    header("location: ./index.php");
}
?>