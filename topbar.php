<?php
// Include the database connection file
include 'connection.php';

// Query to get all topbar entries
$sql = 'SELECT * FROM topbar';
$stmt = $pdo->query($sql);

// Fetch all topbar entries as associative arrays
$topbars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <!-- Contact -->
                <ul class="top-link">
                    <?php
                    // Loop through each topbar entry and display its 'name'
                    foreach ($topbars as $topbar) {
                        echo '<li><a href="#">' . htmlspecialchars($topbar['name']) . '</a></li>';
                    }
                    ?>
                </ul>
                <!-- End Contact -->
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <!-- Top Contact -->
                <ul class="top-contact">
                    <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                </ul>
                <!-- End Top Contact -->
            </div>
        </div>
    </div>
</div>