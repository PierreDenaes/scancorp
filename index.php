<?php
require 'inc/functions.php';
logged_only();
require 'inc/headerLog.php';
?>

    
    <?php 
        if (isset($_GET['call_mbi'])){
            include('includes/mbi.php');
        }else if (isset($_GET['call_weeklyS'])){
            include('includes/weeklyS.php');
        }else if (isset($_GET['call_stat'])){
            include('includes/statistique.php');
        }else if (isset($_GET['call_userStat'])){
            include('includes/statistique.php');
            echo '<div id="piechart_3d" class="userSt" style="width: 80%; height: 500px;"></div>';
        }else if (isset($_GET['call_compStat'])){
            include('includes/statistique.php');
            echo '<div id="columnchart_material" style="width: 100%; height: 500px"></div>';
        }else if (isset($_GET['call_adminStat'])){
            include('includes/statistique.php');
            echo '<div id="piechart_3d" style="width: 100%; height: 500px;"></div>
                <div id="columnchart_material" style="width: 100%; height: 500px"></div>';
        }else if (isset($_GET['call_addCsvComp'])){
            include('includes/addCompany.php');
        }else if (isset($_GET['call_resetUserUse'])){
            include('includes/resetPass.php');
            if ($_SESSION['auth']->level == 4) {
                include('includes/addUser.php');
            }
        }
        else {
            include('includes/lorem.php');
        }
    ?>
    
<?php echo $user; ?>

<?php require 'inc/footer.php'; ?>