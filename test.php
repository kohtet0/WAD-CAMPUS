<!-- if you want enter you can use ' \n ' -->

<?php
echo "hello world";
echo "\n";
echo "this is enter";

// escape from html
if (true) {
    echo "this is true";
} else {
    echo "this is false";
}
?>



<?php if (true) : ?>
    <h1>hello</h1>
<?php endif ?>

<html>

<body>
    <p<?php if ($highlight) : ?> class="highlight" <?php endif; ?>>This is a paragraph.</p>
</body>

</html>


