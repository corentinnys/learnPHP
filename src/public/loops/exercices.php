<?php
// exercice 1
$i = 1;
while($i<=120)
{
    echo $i;
    $i+=1;
};

//exercice 2
for($i = 1;$i<=120;$i++)
{
    echo $i;
}
// exercice 3
$firstNameStartup = array('Louis', 'Vincent','Jean-Yves');

foreach ($firstNameStartup as $firstName)
{
    echo "<li>$firstName</li>";
}
// exercice 4

$pays = array('AR'=>'Argentine','Au'=>'Australia','AUS'=>'Austria','BE'=>'Belgium','BRA'=>'Brazil','CND'=>'Canada','CHN'=>'China');


?>
<form>
    <select>
        <?php
        foreach ($pays as $key => $country){
            echo "<option value='$key'>$country</option>";
        }
        ?>
    </select>
</form>
<?php


