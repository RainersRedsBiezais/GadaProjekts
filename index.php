<?php 
$allowed_pages = ['home', 'biceps', 'forearms', 'lats', 'triceps', 'upper-back', 'lower-back', 'chest', 'core', 'quads', 'hamstrings', 'glutes', 'calves', 'shoulders', 'traps'];

include 'backend/layout/header.php';

if (!isset($_GET['page']) || !in_array($_GET['page'], $allowed_pages)) {
    include 'backend/layout/welcome.php';
}

include 'backend/layout/navbar.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (in_array($page, $allowed_pages)) {
    include "backend/pages/$page.php";
} else {
    include 'backend/layout/404.php';
}

include 'backend/layout/footer.php';
?>
