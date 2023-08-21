<?php
include "../model/object.php";
include "../model/db.php";
include '../view/common/header.html';
$objectType = isset($_GET['objectType']) ? $_GET['objectType'] : '';

$obj = new ObjectTable($db);

try {
    $objList = $obj->subMain($objectType);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subMain</title>
    <!-- 스타일 시트를 포함하는 style 태그를 head 태그 안에 추가합니다. -->
    <style>
        .table-body tr:hover {
            background-color: lightgray;
            cursor: pointer;
            /* 호버 효과에 대한 배경 색상을 설정합니다. */
        }
    </style>
</head>

<main class="w-75 mx-auto border rounded-5 p-5 bg-body-tertiary" style="height: calc(100vh-257px);">
    <table class="table">
        <thead class="table-light" style="border: 1px;">
            <tr style="border: 1px;">
                <th>Code</th>
                <th>Name</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <?php foreach ($objList as $value) { ?>
            <tbody class="table-body">
                <tr>
                    <td><?= $value['nObjectId']; ?></td>
                    <td><?= $value['sObjectName']; ?></td>
                    <td><?= $value['nRentStatus'] === 0 ? '대여 가능' : '대여 불가' ?></td>
                    <td><button type="button" class="btn btn-success">Success</button></td>
                </tr>
            </tbody>
        <?php  } ?>
    </table>
</main>

<?php include "../view/common/footer.html" ?>