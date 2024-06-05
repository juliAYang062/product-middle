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
        <div class="col-lg-4">
        <div class="ratio ratio-1x1 rounded-circle border border-5 overflow-hidden">
                            <img class="object-fit-cover" src="/upload/<?=$image["pic_name"]?>" >
                        </div>
        </div>
        <!-- 左側照片 -->
        <div class="col-lg-8">

          <form action="doCreateUser.php" method="post">

            <table class="table table-bordered align-middle justify-content-center">
              <tr>
                <th for="" class="form-label">姓名</th>
                <td><input type="text" class="form-control" name="name">
                </td>

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
                      <option value="" disabled="">請選擇</option>
                      <option value="1925">1925</option>
                      <option value="1926">1926</option>
                      <option value="1927">1927</option>
                      <option value="1928">1928</option>
                      <option value="1929">1929</option>
                      <option value="1930">1930</option>
                      <option value="1931">1931</option>
                      <option value="1932">1932</option>
                      <option value="1933">1933</option>
                      <option value="1934">1934</option>
                      <option value="1935">1935</option>
                      <option value="1936">1936</option>
                      <option value="1937">1937</option>
                      <option value="1938">1938</option>
                      <option value="1939">1939</option>
                      <option value="1940">1940</option>
                      <option value="1941">1941</option>
                      <option value="1942">1942</option>
                      <option value="1943">1943</option>
                      <option value="1944">1944</option>
                      <option value="1945">1945</option>
                      <option value="1946">1946</option>
                      <option value="1947">1947</option>
                      <option value="1948">1948</option>
                      <option value="1949">1949</option>
                      <option value="1950">1950</option>
                      <option value="1951">1951</option>
                      <option value="1952">1952</option>
                      <option value="1953">1953</option>
                      <option value="1954">1954</option>
                      <option value="1955">1955</option>
                      <option value="1956">1956</option>
                      <option value="1957">1957</option>
                      <option value="1958">1958</option>
                      <option value="1959">1959</option>
                      <option value="1960">1960</option>
                      <option value="1961">1961</option>
                      <option value="1962">1962</option>
                      <option value="1963">1963</option>
                      <option value="1964">1964</option>
                      <option value="1965">1965</option>
                      <option value="1966">1966</option>
                      <option value="1967">1967</option>
                      <option value="1968">1968</option>
                      <option value="1969">1969</option>
                      <option value="1970">1970</option>
                      <option value="1971">1971</option>
                      <option value="1972">1972</option>
                      <option value="1973">1973</option>
                      <option value="1974">1974</option>
                      <option value="1975">1975</option>
                      <option value="1976">1976</option>
                      <option value="1977">1977</option>
                      <option value="1978">1978</option>
                      <option value="1979">1979</option>
                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                    </select>
                    <p class="mt-3">&nbsp年&nbsp</p>
                    <select name="birthday-m" id="" class="form-select">
                      <option value="" disabled="">請選擇</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <p class="mt-3">&nbsp月&nbsp</p>
                    <select name="birthday-d" id="" class="form-select ">
                      <option value="" disabled="">請選擇</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
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
                    <option value="TWTWCT1">臺北市</option>
                    <option value="TWTWCT10">彰化縣</option>
                    <option value="TWTWCT11">南投縣</option>
                    <option value="TWTWCT12">嘉義市</option>
                    <option value="TWTWCT13">嘉義縣</option>
                    <option value="TWTWCT14">雲林縣</option>
                    <option value="TWTWCT15">臺南市</option>
                    <option value="TWTWCT16">高雄市</option>
                    <option value="TWTWCT17">澎湖縣</option>
                    <option value="TWTWCT18">屏東縣</option>
                    <option value="TWTWCT19">臺東縣</option>
                    <option value="TWTWCT2">基隆市</option>
                    <option value="TWTWCT20">花蓮縣</option>
                    <option value="TWTWCT21">金門縣</option>
                    <option value="TWTWCT22">連江縣</option>
                    <option value="TWTWCT3">新北市</option>
                    <option value="TWTWCT4">宜蘭縣</option>
                    <option value="TWTWCT5">新竹市</option>
                    <option value="TWTWCT6">新竹縣</option>
                    <option value="TWTWCT7">桃園市</option>
                    <option value="TWTWCT8">苗栗縣</option>
                    <option value="TWTWCT9">臺中市</option>
                  </select></td>
              </tr>
            </table>
            <button class="btn btn-dark" type="submit">送出</button>

        </div>

  </main>
</body>

</html>