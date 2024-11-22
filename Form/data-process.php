<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $firstName= $_POST['firstName'];
    $secondName= $_POST['secondName'];
    $dob= $_POST['dob'];
    $yourClass= $_POST['select'];
    $province= $_POST['options'];
    $district= $_POST['district'];
    $opinion= $_POST['opinion'];
    $email= $_POST['email'];
    $phoneNumber= $_POST['phone-number'];
    $validate= $_POST['Accept'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report from survey made</title>
</head>
<style>
    body{
        background-color:  rgba(255, 140, 120, 0.274);
    }
</style>
<body>
    <h1>Report for the survey made</h1>
    <table border="2" cellpadding="5" cellspacing="0">
        <tr>
            <th><b>FIRST NAME</b></th>
            <th><b>SECOND NAME</b></th>
            <th><b>DATE OF BIRTH</b></th>
            <th><b>CLASS</b></th>
            <th><b>PROVINCE</b></th>
            <th><b>DISTRICT</b></th>
            <th><b>COMMENTS ON RWANDA CODING ACADEMY</b></th>
            <th><b>EMAIL</b></th>
            <th>PHONE NUMBER</th>
        </tr>
        <tr>
            <td><?php echo $firstName; ?></td>
            <td><?php echo $secondName; ?></td>
            <td><?php echo $dob ?></td>
            <td><?php echo $yourClass; ?></td>
            <td><?php echo $province; ?></td>
            <td><?php echo $district; ?></td>
            <td><?php echo $opinion; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $phoneNumber; ?></td>
        </tr>

    </table>
    
</body>
</html>