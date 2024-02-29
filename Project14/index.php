<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Form Contact</title>
</head>

<body>
    <form action="" method="post">
        <div class="basic-infor">
            <div class="title">Basic Infor</div>
            <div>
                <span>Employ ID</span>
                <span>9</span>
            </div>
            <div>
                <span>Last Name</span>
                <span>Le Khac</span>
            </div>
            <div>
                <span>First Name</span>
                <input type="text" />
            </div>
            <div>
                <span>Gender</span>
                <span class="gender-option">
                    <label><input checked type="radio" name="gender" id="gender">Male</label>
                    <label><input type="radio" name="gender" id="gender">Femal</label>
                    <label><input type="radio" name="gender" id="gender">Unknow</label>
                </span>
            </div>
            <div>
                <span>Title</span>
                <input type="text" />
            </div>
            <div>
                <span>Suffix</span>
                <input type="text" />
            </div>
            <div>
                <span>Birth Day</span>
                <input type="datetime-local" />
            </div>
            <div>
                <span>Hire Day</span>
                <input type="datetime-local" />
            </div>
            <div>
                <span>SSN# (if applicable)</span>
                <input type="datetime-local" />
            </div>
            <div>
                <span>Reports to</span>
                <select class="btn">
                    <option value="Buchanan">Buchanan</option>
                </select>
            </div>
        </div>
        <div class="basic-infor">
            <div class="title">Contact Infor</div>
            <div>
                <span>Email</span>
                <input type="email" placeholder="name@example.com" />
            </div>
            <div>
                <span>Address</span>
                <input type="text" name="addrest" id="adrest">
            </div>
            <div>
                <span>City</span>
                <input type="text" />
            </div>
            <div>
                <span>Region</span>
                <input type="text" />
            </div>
            <div>
                <span>Postal code</span>
                <input type="datetime-local" />
            </div>
            <div>
                <span>Country</span>
                <select class="btn">
                    <?php
                    include("data/countries.php");
                    foreach ($countries as $countrie) {
                        echo "<option value='{$countrie}'>{$countrie}</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <span>US Home Phone</span>
                <input type="text" />
            </div>
            <div>
                <span>Photo</span>
                <input type="file" name="" id="">
            </div>
        </div>
        <div class="basic-infor">
            <div class="title">Optional Infor</div>
            <div class="note">
                <span>Notes</span>
                <div id="editor"></div>
            </div>
            <div>
                <span>Preferred Shift</span>
                <span class = "gender-option">
                    <label for=""><input type="checkbox" name="" id="">Regular</label>
                    <label for=""><input type="checkbox" name="" id="">Gravy Yard</label>
                </span>
            </div>
            <div>
                <span>Active</span>
                <span><input type="checkbox" name="" id=""></span>
            </div>
            <div>
                <span>Are you human?</span>
                <span class = "gender-option">
                    <code>TIDWAO</code>
                    <label class="lb-change" for="">
                        <div>Click to change</div>
                        <input class="change" type="text" name="" id="">
                    </label>
                </span>
            </div>
        </div>
        <div class="controls-sub">
            <div class="title"></div>
            <div class="controls">
                <div class="back-preview">
                    <button>Next</button>
                    <button>Preview</button>
                    <div>*required</div>
                </div>
                <div class="submit">
                    <button>Submit</button>
                    <button>Cancel</button>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>

</html>