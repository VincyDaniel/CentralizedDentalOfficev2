<?php include('header.php'); ?>
<?php include('session.php'); ?>

<div style="display: flex; flex-direction: column;">
    <div style="display: flex;">
        <div style="flex: 0 0 auto; width: 270px; margin-left: 40px;"> <!-- Sidebar with left margin -->
            <?php include('sidebar.php'); ?>
        </div>
		<div style="width: 20px;"></div>
        <div style="flex: 1;"> <!-- Content -->
		<img src="../img/dr.jpg" class="img-rounded" style="width: 409px; height: 115px;">
		<div style="margin-right: 40px;"> <!-- Navbar with right margin -->
            <?php include('navbar_dasboard.php'); ?>
            <br>
            <div class="body_img">
                <img src="../img/bg.JPG" style="max-width: 100%;">
            </div>
        </div>
    </div>
</div>
</div>
