<?php
include "../model/object.php";
include "../model/db.php";
include "../model/object.php";
$objectType = isset($_GET['objectType']) ? $_GET['objectType'] : '';

echo "<script> alert('$objectType'); </script>";

include '../view/common/header.html';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subMain</title>
</head>

<main class="w-75 mx-auto border rounded-5 p-5 bg-body-tertiary" style="height: calc(100vh-257px);">
    <table class="table">
        <thead class="table-light" style="border: 1px;">
            <tr style="border: 1px;">
                <th>Code</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1-1</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
            </tr>

            <tr>
                <td>Data 2-1</td>
                <td>Data 2-2</td>
                <td>Data 2-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>
            <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
            </tr>

        </tbody>
    </table>

</main>

<?php include "../view/common/footer.html" ?>