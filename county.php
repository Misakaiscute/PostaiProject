<?php

if (isset($_POST['id'])) {
    require_once 'ItemRepository.php';
    $countyId = $_POST['id'];
}
    $itemRepository = new ItemRepository();
    $county = $itemRepository->getCountybyId($countyId);

    echo '
    <form method="post" action="counties.php">
        <input type="text" name="county_name" value="' . $county['name'] . '">
        <input type="hidden" name="countyid" value="' . $county['id'] . '">
        <button type="submit" name="btn-save" method="post">Mentés</button>
        <button type="submit" name="btn-cancel" method="post">Mégse</button>
    </form>'

    echo '
    <form method="post" action="counties.php">
        <input type="text" name="county_name" value="">
        <button type="submit" name="btn-save-new" method="post">Mentés</button>
        <button type="submit" name="btn-cancel" method="post">Mégse</button>
    </form>';
?>