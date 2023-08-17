<?php
include "./header.html";
include "../model/db.php";
include "../model/memer.php";
include "../model/objectMap.php";
// 세션 처리.
session_start();
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';

if ($userId == '') {
    die("
    <script> 
    alert('접근 권한이 없습니다. 로그인 해주세요.');
    self.location.href = './login.php';
    </script>");
}

// model 객체 생성.
$obj = new ObjectMap($db);
$objMapList = $obj->objectMapList();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .card-container {
            text-align: center;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            height: 150px;
            /* 조절할 이미지 높이 */
        }

        .card-image {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($objMapList as $value) { ?>
                    <div class="col">
                        <div class="card shadow-sm card-container">
                            <div class="image-container">
                                <img src="<?= $value['sObjectImage']; ?>" class="card-image">
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?= $value['sObjectName']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group" style="margin: auto;">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<?php include './footer.html' ?>