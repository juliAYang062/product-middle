<?php session_start(); ?>
<!-- 新增會員功能 -->
<!---------------------------------------------這裡是內容 ------------------------------------->
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- CSS -->
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
      <a href="" class="btn btn-dark">登出</a>
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
      <h1>新增會員</h1>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
    </div>
    <hr>
    <!---------------------------------------------這裡是內容 ------------------------------------->
    <div class="container">
      <div class="py-2">
        <a href="users.php" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i>&nbsp回會員管理中心</a>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 mt-3">
          <div class="position-relative" action="doUpload.php" method="post" enctype="multipart/form-data">
            <div class="ratio ratio-1x1 rounded-circle border border-5 overflow-hidden bg-transparent " style="max-width: 350px;">
              <img id="previewImage" src="images/user.png">
            </div>
            <div class="position-absolute  top-100 start-0 ">
              <input type="file" id="fileUpload" name="file" style="display: none;" onchange="displayImage(this)">
              <!-- accept="image/*"  -->
              <button type="button" class="btn btn-dark" onclick="document.getElementById('fileUpload').click();">
                選擇圖片
              </button>
            </div>


          </div>
        </div>

        <!-- 左側照片 -->
        <div class="col-lg-6 mt-3">

          <form action="doCreateUser.php" method="post">

            <table class="table table-bordered align-middle justify-content-center">
              <tr>
                <th for="" class="form-label">姓名</th>
                <td><input type="text" class="form-control" name="name">
                </td>

              </tr>
              <tr>
                <th for="" class="form-label">帳號</th>
                <td><input type="text" class="form-control" name="account"></td>
              </tr>
              <tr>
                <th for="" class="form-label">email</th>
                <td><input type="email" class="form-control" name="email"></td>
              </tr>
              <tr>
                <th for="" class="form-label">密碼</th>
                <td> <input type="text" class="form-control" name="password"></td>
              </tr>
              <tr>
                <th for="" class="form-label">電話</th>
                <td><input type="tel" class="form-control" name="phone"></td>
              </tr>
              <tr>
                <th for="" class="form-label">生日</th>
                <td>
                  <div class="d-flex align-items-center "><select name="birthday-y" id="" class="form-select">
                      <option selected="" value="0">請選擇</option>
                      <?php for ($i = 1925; $i <= 2024; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                    </select>
                    <p class="mt-3">&nbsp年&nbsp</p>
                    <select name="birthday-m" id="" class="form-select">
                      <option selected="" value="0">請選擇</option>
                      <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                    </select>
                    <p class="mt-3">&nbsp月&nbsp</p>
                    <select name="birthday-d" id="" class="form-select ">
                      <option selected="" value="0">請選擇</option>
                      <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                  </div></select>
                  <p class="mt-3">&nbsp日&nbsp</p>
                </td>
              </tr>
              <tr>
                <th for="" class="form-label">性別</th>
                <td> <select name="gender" id="" class="form-select">
                    <option value="0">請選擇</option>
                    <option value="1">女性</option>
                    <option value="2">男性</option>
                    <option value="3">其他</option>
                  </select></td>
              </tr>
              <tr>
                <th for="" class="form-label">城市</th>
                <td><select name="location" id="" class="form-select" type="text">
                    <option selected="" value="0">請選擇</option>
                    <option value="臺北市">臺北市</option>
                    <option value="彰化縣">彰化縣</option>
                    <option value="南投縣">南投縣</option>
                    <option value="嘉義市">嘉義市</option>
                    <option value="嘉義縣">嘉義縣</option>
                    <option value="雲林縣">雲林縣</option>
                    <option value="臺南市">臺南市</option>
                    <option value="高雄市">高雄市</option>
                    <option value="澎湖縣">澎湖縣</option>
                    <option value="屏東縣">屏東縣</option>
                    <option value="臺東縣">臺東縣</option>
                    <option value="基隆市">基隆市</option>
                    <option value="花蓮縣">花蓮縣</option>
                    <option value="金門縣">金門縣</option>
                    <option value="連江縣">連江縣</option>
                    <option value="新北市">新北市</option>
                    <option value="宜蘭縣">宜蘭縣</option>
                    <option value="新竹市">新竹市</option>
                    <option value="新竹縣">新竹縣</option>
                    <option value="桃園市">桃園市</option>
                    <option value="苗栗縣">苗栗縣</option>
                    <option value="臺中市">臺中市</option>

                  </select></td>
              </tr>
            </table>
            <!-- 錯誤訊息 -->
            <?php if (isset($_SESSION["errorMsg"])) : ?>
              <div class="text-danger">
                <?= $_SESSION["errorMsg"] ?>
              </div>
            <?php unset($_SESSION["errorMsg"]);
            endif; ?>
            <!-- 錯誤訊息 -->
            <div class="py-2 d-flex justify-content-end">
              <button class="btn btn-dark" type="submit">送出</button>
            </div>
            <div class="col-lg-2 mt-3"></div>
        </div>


        <!-- ===========圖片JS=========== -->
        <script>
          // 圖片上傳
          function displayImage(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function(e) {
                document.getElementById('previewImage').src = e.target.result;
              };

              reader.readAsDataURL(input.files[0]);
            }
          }
        </script>
        <script>
          // 圖片讀取失敗時
          const previewImage = document.getElementById('previewImage');
          const profilePicPath = 'C:\\xampp\\htdocs\\project\\images\\profilepic.JPG';

          previewImage.onerror = function() {
            previewImage.src = profilePicPath;
          };
        </script>
        <!-- ===========圖片JS=========== -->
  </main>
</body>

</html>