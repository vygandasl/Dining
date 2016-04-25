<?php
    define("TITLE", "Menu | Franklin's Fine Dining");

    include('header.php');
?>

<div id="menu-items">

<h1>Meniu</h1>
<p>Our team as well as menu is really small &mdash;
  but who cares!</p>
<p><em>Press on a menu item to see what contains it</em></p>

<hr>

<ul>

<?php
foreach ($menuItems as $dish => $item) { ?>
    <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?>
  </a>  <?php echo $item["kaina"]; ?><sup>eur</sup></li>

<?php } ?>

</ul>

</div><!--menu itemai-->



<?php include('footer.php') ?>
