<?php
function write_copyright() {
    $year = data('Y');
    echo '&copy; ' . $year;
}
?>

<footer>
    <?php write_logo(); ?>
    &copy; <?php echo date('Y'); ?>
</footer>
</body>
</html>