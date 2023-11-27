<?php
require_once('ItemRepository.php');

if (isset($_POST['selectedCityId'])) {
    $selectedCityId = $_POST['selectedCityId'];

    $itemRepository = new ItemRepository();
    $zipCode = $itemRepository->getCityById($selectedCityId);

    if ($zipCode) {
        echo $zipCode['zip_code'];
    } else {
        echo 'Postal code not available';
    }

    $itemRepository->closeConnection();
}