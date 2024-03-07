<?php
    include("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex justify-content-center ">
        <form action="update_profile.php" method="post" enctype="multipart/form-data" class="col-4">
            <h2>Profile Information</h2>
            <div class="d-flex flex-column align-items-center">
            <div class="col-6">
                <img src="<?php echo $user['avatar']?>" class="card-img-top" alt="your avatar">
            </div>
            <input type="file" name="avatar" accept="image/*">
            
            </div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>"
            required>
            <br>
            <label for="email" class="form-lable">Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>"
            disabled>
            <br>
            
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
    <?php
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and update user information
        $errors = [];
        $user['name'] = htmlspecialchars($_POST['name']);
        // Handle avatar upload (similar to previous exercise)
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $maxSize = 1048576; // 1MB
        $targetDir = "img/"; // Adjust directory path
        if (!empty($_FILES['avatar']['tmp_name'])) {
            $fileInfo = pathinfo($_FILES['avatar']['name']);
            if (!in_array($fileInfo['extension'], $allowedExtensions)) {
                $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
            } 
            else if ($_FILES['avatar']['size'] > $maxSize) {
                $errors[] = "File size must be less than 1MB.";
            } else {
                $fileName = uniqid() . "." . $fileInfo['extension'];
                $targetFile = $targetDir . $fileName;
                if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile))
                {
                    $user['avatar'] = $targetFile; // Update avatar URL in array
                } 
                else {
                    $errors[] = "Failed to upload file.";
                }
            }
        }
        // Handle errors or update profile
        if (empty($errors)) {
            // Update user profile in database or persistent storage (replace withyour logic)
            echo "Profile updated successfully!";
        } else {
            echo "Errors:";
            foreach ($errors as $error) {
            echo "<br> - $error";
            }
        }
    }
    echo"<pre>";
    print_r($user);
    echo"</pre>";
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>