<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label">Main</li>
        <?PHP if(isset($_SESSION['id']))
                { ?>

        <h4></h4>
        <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
        <li><a href="my-profile.php"><i class="fa fa-user" aria-hidden="true"></i>
        My Profile</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Accommodation List</a></li>
        <li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Total Days </a></li>
        <li><a href="room-details.php"><i class="fa fa-file-o"></i>Booking Details</a></li>

        <?php } else { ?>


        <li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
        <li><a href="technician"><i class="fa fa-users"></i> Technician Login</a></li>
        <li><a href="admin"><i class="fa fa-user"></i> Manager Login</a></li>
        <?php } ?>

    </ul>
</nav>
