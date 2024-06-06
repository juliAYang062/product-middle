<?php
session_start();
// if (isset($_SESSION["user"])) {
//   header("location: user.php");
//   exit;
// }
?>

<!-- ============================== -->
<!doctype html>
<html lang="en">

<head>
  <title>test-sign-up</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <?php include("css.php"); ?> 
  <style>
    body {
      background: url(images/bg.jpg);
      background-size: 100vh norepl;
      background-repeat: no-repeat;
      backdrop-filter: brightness(70%);
      color: #0F4C3A;

    }


    button:focus {
      outline: none;
    }
  
  </style>
</head>

<body>
  <div class="container">
    <div class="justify-content-center text-center pt-3">
      <h2 class="text-shadow-sm fw-bold pt-3">drinking tea...</h2>
      <h6 class="text-dark text-shadow-sm fw-bold">歡迎註冊帳號</h6>
    </div>

    <form action="doSignup.php" method="post" enctype="multipart/form-data">

      <div class="justify-content-center">
        <!-- vh-100 -->


        <div class="d-flex justify-content-center">
          <div class="row col justify-content-center">
            <div class="col-lg-4 mt-3">

              <div class="position-relative">
                <div class="ratio ratio-1x1 rounded-circle border border-5 overflow-hidden bg-transparent " style="max-width: 350px;">
                  <img id="previewImage" src="images/user.png">
                </div>
                <div class="position-absolute m-0 top-100 start-0 ">
                  <input type="file" id="fileUpload" name="image" style="display: none;" onchange="displayImage(this)">
                  <!-- accept="image/*"  -->
                  <button type="button" class="btn btn-dark" onclick="document.getElementById('fileUpload').click();">
                    選擇圖片
                  </button>
                </div>


              </div>
            </div>

            <!-- 左側照片 -->
            <div class="col-lg-6 mt-3">

              <table class="table table-bordered align-middle justify-content-center">
                <tr>
                  <th for="" class="form-label">姓名</th>
                  <td><input type="text" class="form-control" name="name">
                  </td>
                </tr>
                <tr>
                  <th for="" class="form-label">帳號</th>

                  <td><input type="text" class="form-control" name="account" placeholder="請輸入4~20字元的帳號">

                  </td>
                </tr>
                <tr>
                  <th for="" class="form-label">email</th>
                  <td><input type="email" class="form-control" name="email"></td>
                </tr>
                <tr>
                  <th for="" class="form-label">密碼</th>
                  <td><input type="text" class="form-control" name="password">
                  </td>
                </tr>
                <tr>
                  <th for="" class="form-label " nowrap="nowrap">再輸入一次密碼</th>
                  <td><input type="password" class="form-control" name="repassword">
                  </td>
                </tr>
                <tr>
                  <th for="" class="form-label">電話</th>
                  <td><input type="tel" class="form-control" name="phone"></td>
                </tr>
                <tr>
                  <th for="" class="form-label">生日</th>
                  <td>
                    <div class="d-flex align-items-center ">
                      <select name="birthday-y" id="" class="form-select">
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
                  <th for="" class="form-label">城市
                  </th>
                  <td><select name="location" id="" class="form-select" type="text">
                      <option selected="" value="0">請選擇</option>
                      <option value="臺北市<">臺北市</option>
                      <option value="彰化縣<">彰化縣</option>
                      <option value="南投縣">南投縣</option>
                      <option value="嘉義市3">嘉義市</option>
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


                <tr>

                  <td colspan="2">
                    <div class="d-flex justify-content-between">
                      <div>
                        <!-- 錯誤訊息 -->
                        <?php if (isset($_SESSION["errorMsg"])) : ?>
                          <div class="text-danger">
                            <?= $_SESSION["errorMsg"] ?>
                          </div>
                        <?php unset($_SESSION["errorMsg"]);
                        endif; ?>
                        <!-- 錯誤訊息 -->
                      </div>
                      <div><a type="submit" class="btn btn-warning" href="sign-in.php">返回登入</a>
                        <button type="submit" class="btn btn-success ">註冊</button>
                      </div>
                    </div>

                  </td>
                </tr>
                <!-- Modal -->
                <!-- <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="signupModalLabel">註冊申請</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        "帳號註冊已完
                        增加新資料 id 為 $last_id ;
                        請回登入畫面，重新登入！
                      </div>
                      <div class="modal-footer">

                        <a href="inga" type="button" class="btn btn-danger">確認</a>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- Modal -->
              </table>
              <div class="d-flex justify-content-between">
                <p class="text-white text-shadow-sm fs-6">© Just Taiwan Tea</p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </form>
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
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>