<?
print_r($_POST);

if ($boalean == TRUE){
    echo "<p>is true</p>";
}elseif ($boalean == false) {
    echo "<p>is false</p>";
}
?>

<p><?php $boalean = !isset($_POST);
echo $boalean;?></p>