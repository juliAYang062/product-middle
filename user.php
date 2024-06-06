<!--  -->

<!-- ============================== -->
<?php
if (!isset($_GET["id"])) {
  $id = 1; //若沒有選特定的，顯示預設第一筆資料
} else {
  $id = $_GET["id"];
}

require_once("db_connect.php");
$sql = "SELECT * FROM users WHERE id = $id AND valid=1";
// echo $sql;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//var_dump($row);//確認抓的到資料


// 圖片區
// $sqlImages = "SELECT *FROM images WHERE valid=1";
// $resultImg = $conn->query($sqlImages);
// $ImgRows = $resultImg->fetch_all(MYSQLI_ASSOC);
// $id = $_GET["id"];

// $sql = "SELECT users.*, images.name AS images_name FROM users JOIN images ON users.images_id =images.id
// WHERE users.id= $id";

// 圖片區
if ($result->num_rows > 0) {
  $userExit = true;
  $title = $row["name"];
} else {
  $userExit = false;
  $title = "使用者不存在";
}
?>
<!---------------------------------------------這裡是內容 ------------------------------------->

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <?php include("css.php") ?>
  <style>
    :root {
      --aside-witch: 200px;
      --header-height: 50px;
    }

    .logo {
      width: var(--aside-witch);
    }

    .aside-left {
      padding-top: var(--header-height);
      width: var(--aside-witch);
      top: 20px;
      overflow: auto;
    }

    .main-content {
      margin: var(--header-height) 0 0 var(--aside-witch);
    }

  </style>
</head>

<body>
  <header class="main-header bg-dark d-flex fixed-top shadow justify-content-between align-items-center">
    <a href="" class="p-3 bg-black text-white text-decoration-none">
      tea
    </a>

    <div class="text-white me-3">
      Hi,adain
      <a href="" class="btn btn-dark">登入</a>
      <a href="doSingOut.php" class="btn btn-dark">登出</a>
    </div>
  </header>
  <aside class="aside-left position-fixed bg-white border-end vh-100 ">
    <ul class="list-unstyled">
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-house-fill me-2"></i>首頁
        </a>
      </li>
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-cart4 me-2"></i></i>商品
        </a>
      </li>
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-cash me-2"></i>優惠券
        </a>
      </li>
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-flag me-2"></i>課程
        </a>
      </li>
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-clipboard2-data me-2"></i> 訂單
        </a>
      </li>
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-book me-2"></i> 文章管理
        </a>
      </li>
      <li>
        <a class="d-block p-2 px-3 text-decoration-none" href="">
          <i class="bi bi-paypal me-2"></i> 付款方式
        </a>
      </li>

    </ul>
  </aside>
  <main class="main-content p-3">
    <div class="d-flex justify-content-between">
      <h1>會員檔案</h1>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
    </div>
    <hr>
    <!---------------------------------------------這裡是內容 ------------------------------------->
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">刪除帳號</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            確認凍結使用者?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>

            <a href="user-delete.php?id=<?= $row["id"] ?> " type="button" class="btn btn-danger">確認</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

    <div class="container">
      <!-- ===回主選單按鈕=== -->
      <div class="py-2">
        <a href="users.php" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i>&nbsp回會員管理中心</a>
     
      </div>
      <!-- ===回主選單按鈕=== -->
      <div class="row justify-content-center">
        <div class="col-lg-4 mt-3">
        
          <div class="ratio ratio-1x1 rounded-circle border border-5 overflow-hidden" style="position: relative; ">
          <img src="images/<?= $row["images_name"] ?>"  alt="">
              
          </div>
        </div>
        <div class="col-lg-6 mt-3">
            <!-- ================== -->
          <?php if ($userExit) : ?>
            <!-- 判斷使用者是否存在 -->
            <table class="table table-bordered">
              <tr>
                <th class="text-center" >ID</th>
                <td><?= $row["id"] ?></td>
              </tr>
              <tr>
                <th class="text-center">姓名</th>
                <td><?= $row["name"] ?></td>
              </tr>
              <tr>
                <th class="text-center">帳號</th>
                <td><?= $row["account"] ?></td>
              </tr>
              <tr>
                <th class="text-center">Email</th>
                <td><?= $row["email"] ?></td>
              </tr>
              <tr>
                <th class="text-center">密碼</th>
                <td><?= $row["password"] ?></td>
              </tr>
              
              <tr>
                <th class="text-center">電話</th>
                <td><?= $row["phone"] ?></td>
              </tr>
              <th class="text-center">生日</th>
              <td><?= $row["birthday"] ?></td>
              </tr>
              <th class="text-center">性別</th>
              <td><?= $row["gender"] ?></td>
              </tr class="text-center">
              <th class="text-center">城市</th>
              <td><?= $row["location"] ?></td>
              </tr>
              <tr>
                <th class="text-center">資料建立日期</th>
                <td><?= $row["created_at"] ?></td>
              </tr>
            </table> <div class="py-2 d-flex justify-content-end">
              <a class="btn btn-dark me-3 " title="編輯使用者" href="user-edit.php?id=<?= $row["id"] ?>"><i class="fa-solid fa-pen-to-square">&nbsp修改</i></a>
              <!-- 修改按鈕 -->

              <button class="btn btn-danger" title="刪除使用者" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash-can">&nbsp刪除</i></button>
              <!-- 刪除按鈕 -->
            </div>
            <div class="col-lg-2 mt-3"></div>
    
            <!-- ================== -->
          <?php else : ?>
            <h1>使用者不存在</h1>
          <?php endif; ?>
          <!-- 判斷使用者是否存在 -->
        </div>
       
      </div>

    </div>
    <!-- bootstrapJS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>












  </main>
</body>

</html>