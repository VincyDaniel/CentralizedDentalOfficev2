<?php
    include('dbcon.php');
    if (isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $contact_no=$_POST['contact_no'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        
        if($cpassword != $password){
            $a="Password do not Match";
        } else {
            // Insert data into the database
            mysqli_query($conn,"insert into members (firstname,lastname,age,gender,address,email,contact_no,username,password)
            values ('$firstname','$lastname','$age','$gender','$address','$email','$contact_no','$username','$password')
            ") or die(mysqli_error($conn));
            
            // Redirect to success page
            header("Location: success.php");
            exit();
        }
    }
?>
<form method="post">    
    <div class="span5">
        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Name</label>
                <div class="controls">
                    <input type="text" name="firstname" value="<?php if (isset($_POST['submit'])){echo $firstname;} ?>" placeholder="Firtname" required> 
                    <br>
                    <input type="text" name="lastname"  value="<?php if (isset($_POST['submit'])){echo $lastname;} ?>" placeholder="Lastname" required>  
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Gender</label>
                <div class="controls">
                    <select name="gender" required>
                        <option><?php if (isset($_POST['submit'])){echo $gender;} ?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Age</label>
                <div class="controls">
                    <input name="age" class="span1" type="number"  value="<?php if (isset($_POST['submit'])){echo $age;} ?>" placeholder="Age" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Username</label>
                <div class="controls">
                    <input type="text" name="username" value="<?php if (isset($_POST['submit'])){echo $username;} ?>" placeholder="Username" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>" placeholder="Password" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Confirm Password</label>
                <div class="controls">
                    <input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])){echo $cpassword;} ?>" placeholder="Confirm Password" required>
                    <?php if (isset($_POST['submit'])){?>  <span class="label label-important"><?php echo $a; ?></span><?php }?>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputPassword">Address</label>
                <div class="controls">
                    <input type="text" name="address" value="<?php if (isset($_POST['submit'])){echo $address;} ?>" placeholder="Address" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Contact No</label>
                <div class="controls">
                    <input type="text" name="contact_no" value="<?php if (isset($_POST['submit'])){echo $contact_no;} ?>"placeholder="Contact No" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Email Address</label>
                <div class="controls">
                    <input name="email" type="text" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" placeholder="Email Address" required> 
                </div>
            </div>
        </div>
    </div>
</form>