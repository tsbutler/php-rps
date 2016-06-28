<?php $weapons = array("rock" => "rock.php", "paper" => "paper.php", "scissors" => "scissors.php"); ?>

<?php foreach($weapons as $key => $val) { ?>
  <a href="<?php echo $val; ?>">
    <img src="./assets/images/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
  </a>
<?php } ?>
