<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="basic-info">
        <h2>Basic Info</h2>
        <label for="id">Employee ID</label>
        <input type="text" id="id" name="id" value="9">
        <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" value="Dodsworth">
        <br>

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" value="Anne">
        <br>

        <label for="gender">Gender</label>
        <div class="gender">
            <!--    (input[type="radio" id name="gender" value]+lable[for]+br)*4-->
            <input type="radio" id="male" name="gender" value="Male">
            <lable for="male">Male</lable>
            <br><input type="radio" id="female" name="gender" value="Female">
            <lable for="female">Female</lable>
            <br><input type="radio" id="xxx" name="gender" value="XXX">
            <lable for="xxx">XXX</lable>
            <br><input type="radio" id="zzz" name="gender" value="ZZZ">
            <lable for="zzz">ZZZ</lable>
            <br>
        </div>

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="Sales Representative">
        <br>
        <label for="suffix">Suffix</label>
        <input type="text" id="suffix" name="suffix" value="">
        <br>
        <label for="bdate">Birth Date</label>
        <input type="text" id="bdate" name="bdate" value="">
        <br>
        <label for="hdate">Hire Date</label>
        <input type="text" id="hdate" name="hdate" value="">
        <br>
        <label for="ssn">SSN</label>
        <input type="text" id="ssn" name="ssn" value="">
        <br>
        <label for="rp">Reports To</label><br>
        <select name="rp" id="rp">
            <option value="">fjdl</option>
        </select>
    </div>

    <div class="contact-info">
        <h2>Contact Info</h2>

        Email <br>
        Address <br>
        City <br>
        Region <br>
        Postal Code <br>
        Country <?php include "data.php"; ?> <br>
        US Home Phone <br>
        Photo <br>
    </div>
    <div class="optional-info">
        <h2>Optional Info</h2>
        Notes <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    </div>
    
</body>

</html>