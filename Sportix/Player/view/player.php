<?php
    require "../control/player_reg_control.php";
    ?>
<html>
<head>
    <title>Player Registration</title>
    <link rel="stylesheet" href="../CSS/player_reg.css">
</head>
<body>
    <div class="container">
        <img src="../img/Sportix.png" alt="Sportix Logo" class="logo">
        <div class="form-container">
            <h2>Player Registration</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="username">USER NAME</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password" required>
                
                <label for="confirm_password">CONFIRM PASSWORD</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                
                <label for="dob">DATE OF BIRTH</label>
                <input type="date" id="dob" name="dob" required>
                
                <label for="phone">PHONE NUMBER</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="nationality">NATIONALITY</label>
                <input type="text" id="nationality" name="nationality" required>
                
                <label for="gender">GENDER</label>
                <select id="gender" name="gender" required>
                    <option value="">SELECT</option>
                    <option value="Male">MALE</option>
                    <option value="Female">FEMALE</option>
                    <option value="Other">OTHER</option>
                </select>

                <label for="Player_cat">PLAYER CATAGORY</label>
                <select id="Player_cat" name="Player_cat" required>
                    <option value="">SELECT</option>
                    <option value="cricket">CRICKET</option>
                </select>

                <label for="player_role">PLAYER ROLE</label>
                <select id="Player_role" name="Player_role" required>
                    <option value="">SELECT</option>
                    <option value="bat">BATSMAN</option>
                    <option value="bowl">BOWLER</option>
                    <option value="all-rounder">ALL-ROUNDER</option>
                    <option value="Wicket-keeper">WICKET KEEPER/BATSMAN</option>
                </select>
                
                <label for="photo">UPLOAD PHOTO</label>
                <input type="file" id="photo" name="photo"required>
                
                <button type="submit">REGISTER</button>
            </form>
        </div>
    </div>
</body>
</html>