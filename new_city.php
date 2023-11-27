<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AJAX gyakorlat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>Új város hozzáadása</h1>
    <form>
        <select id="countyDropdown" name="countyDropdown">
            <option value="">Válassz megyét</option>
            <?php
            require_once('ItemRepository.php');

            $itemRepository = new ItemRepository();
            $counties = $itemRepository->getAllCounties();

            foreach ($counties as $county) {
                echo '<option value="' . $county['id'] . '">' . $county['name'] . '</option>';
            }
            ?>
        </select>
        <br>
        <label for="newCity">Város neve:</label>
        <input type="text" id="newCity" name="newCity" size="5">
        <label for="newCity">Irányítószáma:</label>
        <input type="text" id="newPostalCode" name="newPostalCode" size="5">
    </form>
</body>
</html>