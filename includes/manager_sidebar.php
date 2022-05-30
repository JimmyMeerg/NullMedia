<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label">Main</li>
        <?PHP if(isset($_SESSION['id']))
                { ?>
        
        <?php } else { ?>

        <li><a href="resources_list.php"><i class="fa fa-files-o"></i> Resource Lists</a></li>
        <li><a href="recources_sum.php"><i class="fa fa-users"></i> Resource Summarization</a></li>
        <li><a href="resources_report.php"><i class="fa fa-user"></i> Resource Report</a></li>
        <?php } ?>

    </ul>
</nav>