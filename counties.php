<html>
    <head>
        <script src="https://kit.fontawesome.com/87b9715762.js" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form name="search" action="#">
            <input type="text" name="needle" size="5">
            <button type="submit" name="btn-search" method="post">Keres</button>
    </form>
        <a href="index.php" style="text-decoration: none"><i class="fa-solid fa-backward"></i></a>
        <h1>Megyék</h1>
    <table style="margin: auto;" id="mainTable">
        <thead>
            <th>#id</th><th>Megynevezés</th><th>Művelet</th>
        </thead>
        <tbody>
        <?php
            require_once('ItemRepository.php'); 
            $itemRepository = new ItemRepository();

            if (isset($_POST['btn-cancel'])) {
                //do nothing
            }

            if (isset($_POST['btn-save'])) {
                $countyName = $_POST['county_name'];
                $countyId = $_POST['id'];
                $itemRepository->updateCounty($countyId, $countyName);
            }

            if (isset($_POST['btn-save-new'])) {
                $countyName = $_POST['country_name']

                $itemRepository->updateCounty($countyId, $countyName);
            }

            if (isset($_POST['btn-search'])) {
                $needle = $_POST['needle']

                $itemRepository->searchCounty($needle)
            }

            if (isset($_POST['btn-del'])) {
                $id = $_POST['id'];
                $itemRepository->deleteCounty($countyId);
            }

            $counties = $itemRepository->getAllCounties();

            foreach ($counties as $county) {
                echo ''
                .'<tr>'
                    .'<td>' . $county['id'] . '</td>'
                    .'<td>' . $county['name'] . '</td>'
                    .'<td><div style="display: flex">'
                        .'<form method="post" action="county.php">
                            <button type="submit">
                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                            </button>
                            <input type="hidden" name="id" value="'.$county['id'].'">'
                        .'</form>'
                    .'<div></td>'
                .'</tr>';
            }
        ?>
        </tbody>
    </table>
    </body>
</html>