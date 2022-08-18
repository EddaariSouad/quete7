<!DOCTYPE html>
<html lang="fr">

<body>
    <?php include "./include/head.php"?>
    <?php include "./include/header.php"?>
    <img src="./img/reactopia.png" alt="" width=1000px>
    <?php 

$lundi = [
    "Nord" => [20,35,54,54],
    "Sud" => [20,35,54,54],
    "Est" => [20,35,54,54],
    "Ouest" => [20,35,54,54]
];
$mardi = [
    "Nord" => [20,35,54,54],
    "Sud" => [20,35,54,54],
    "Est" => [20,35,54,54],
    "Ouest" => [20,58,54,54]
];
$mercredi = [
    "Nord" => [20,35,54,54],
    "Sud" => [20,35,54,54],
    "Est" => [20,35,54,54],
    "Ouest" => [20,35,54,54]
];
$jeudi = [
    "Nord" => [20,35,54,54],
    "Sud" => [20,35,54,54],
    "Est" => [20,35,54,54],
    "Ouest" => [20,35,54,54]
];

$vendredi = [
    "Nord" => [20,35,54,54],
    "Sud" => [20,35,54,54],
    "Est" => [20,35,54,54],
    "Ouest" => [20,35,54,54]
];
$samedi = [
    "Nord" => [20,35,54,54],
    "Sud" => [20,35,54,54],
    "Est" => [20,35,54,54],
    "Ouest" => [20,35,54,54]
];
$dimanche = [
    "Nord"=> [20,35,54,54],
    "Sud"=> [20,35,54,54],
    "Est"=> [20,35,54,54],
    "Ouest"=> [20,35,54,54]
];

$i=0;
    if(isset($_GET['lundi'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
$i=0;
    if(isset($_GET['mardi'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
$i=0;
    if(isset($_GET['mercredi'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
    $i=0;
    if(isset($_GET['jeudi'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
    $i=0;
    if(isset($_GET['vendredi'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
    $i=0;
    if(isset($_GET['samedi'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
    $i=0;
    if(isset($_GET['dimanche'])){
        foreach ($lundi as $clef){
            foreach ($clef as $contenu){
?>
        <div class="clef<?php echo $i++;?>"><?php echo $contenu;?></div>
<?php
            }
        }
    }
?>

<?php include "./include/footer.php"?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>