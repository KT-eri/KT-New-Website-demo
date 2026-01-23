<nav class="navbar-default">
  <div class="nav_top">
    <div class="logo">
      <a href="<?php echo $cfg['Url'] ?>index.php">
        <img src="<?php echo $cfg['Url'] ?>images/logo.svg" class="img-fluid" alt="KING TONY">
      </a>
    </div>
    <ul>
      <?php if ($_SESSION['mN_Key']) { ?>
        <li><a href="<?php echo $cfg['Url'] ?>member.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.179" height="15.179" viewBox="0 0 15.179 15.179">
              <path id="person-fill" d="M3.265,17.179A1.239,1.239,0,0,1,2,15.914c0-1.265,1.265-5.06,7.589-5.06s7.589,3.795,7.589,5.06a1.239,1.239,0,0,1-1.265,1.265ZM9.589,9.589A3.795,3.795,0,1,0,5.795,5.795,3.795,3.795,0,0,0,9.589,9.589Z" transform="translate(-2 -2)" fill="#fff" />
            </svg>
            <span><?php echo $_SESSION['mN_Name'] ?></span>
          </a></li>
        <li><a href="<?php echo $cfg['Url'] ?>login_out.php?Mode=Out">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
              <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
            </svg>
            <span>Logout</span>
          </a></li>
      <?php } else { ?>
        <li><a href="<?php echo $cfg['Url'] ?>login.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg>
            <span>Login</span>
          </a></li>
      <?php
      }
      $_SESSION['ccID'] = 0;
      ?>
      <li class="d-none d-md-block">
        <a href="<?php echo $cfg['Url'] ?>contact.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
            <path id="envelope" d="M0,4A2,2,0,0,1,2,2H14a2,2,0,0,1,2,2v8a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2ZM2,3A1,1,0,0,0,1,4v.217l7,4.2,7-4.2V4a1,1,0,0,0-1-1ZM15,5.383,10.292,8.208,15,11.1Zm-.034,6.876L9.326,8.788,8,9.583l-1.326-.8-5.64,3.47A1,1,0,0,0,2,13H14a1,1,0,0,0,.966-.741ZM1,11.1l4.708-2.9L1,5.383Z" transform="translate(0 -2)" fill="#fff" />
          </svg>
          <span>Contact</span>
        </a>
      </li>
      <li class="d-block d-md-none">
        <a href="###" class="nav_search_box2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
          <span>search</span>
        </a>
      </li>
      <li class="language">
        <a href="###">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <path id="globe" d="M0,8a8,8,0,1,1,8,8A8,8,0,0,1,0,8ZM7.5,1.077A3.519,3.519,0,0,0,5.613,2.932,7.97,7.97,0,0,0,5.145,4H7.5V1.077ZM4.09,4a9.267,9.267,0,0,1,.64-1.539,6.7,6.7,0,0,1,.6-.933A7.025,7.025,0,0,0,2.255,4ZM3.508,7.5A13.7,13.7,0,0,1,3.82,5H1.674a6.958,6.958,0,0,0-.656,2.5h2.49ZM4.847,5a12.5,12.5,0,0,0-.338,2.5H7.5V5ZM8.5,5V7.5h2.99A12.5,12.5,0,0,0,11.153,5ZM4.51,8.5A12.5,12.5,0,0,0,4.847,11H7.5V8.5Zm3.99,0V11h2.653a12.454,12.454,0,0,0,.338-2.5ZM5.145,12a7.964,7.964,0,0,0,.468,1.068A3.525,3.525,0,0,0,7.5,14.923V12Zm.182,2.472a6.7,6.7,0,0,1-.6-.933A9.268,9.268,0,0,1,4.09,12H2.255a7.024,7.024,0,0,0,3.072,2.472ZM3.82,11a13.652,13.652,0,0,1-.312-2.5H1.018A6.926,6.926,0,0,0,1.674,11Zm6.853,3.472A7.024,7.024,0,0,0,13.745,12H11.91a9.27,9.27,0,0,1-.64,1.539,6.688,6.688,0,0,1-.6.933ZM8.5,12v2.923a3.519,3.519,0,0,0,1.887-1.855A7.964,7.964,0,0,0,10.855,12H8.5Zm3.68-1h2.146a6.926,6.926,0,0,0,.656-2.5h-2.49A13.65,13.65,0,0,1,12.18,11Zm2.8-3.5A6.959,6.959,0,0,0,14.326,5H12.18a13.7,13.7,0,0,1,.312,2.5ZM11.27,2.461A9.255,9.255,0,0,1,11.91,4h1.835a7.024,7.024,0,0,0-3.072-2.472,6.788,6.788,0,0,1,.6.933ZM10.855,4a7.966,7.966,0,0,0-.468-1.068A3.522,3.522,0,0,0,8.5,1.077V4Z" fill="#fff" />
          </svg>
          <span>English</span>
        </a>
        <div class="dropdown">
          <!--<a href="<?php echo $cfg['Url'] ?>/tw/index.php?url=<?php echo rawurlencode(str_replace("", "", $_SERVER['REQUEST_URI'])); ?>">繁體中文</a>
          <a href="<?php echo $cfg['Url'] ?>/cn/index.php?url=<?php echo rawurlencode(str_replace("", "", $_SERVER['REQUEST_URI'])); ?>">简体</a>
          <a href="<?php echo $cfg['Url'] ?>/es/index.php?url=<?php echo rawurlencode(str_replace("", "", $_SERVER['REQUEST_URI'])); ?>">Español</a>-->
          <a href="<?php echo $cfg['Url'] ?>/tw/index.php?url=<?php echo urlencode(substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))); ?>">繁體中文</a>
          <a href="<?php echo $cfg['Url'] ?>/cn/index.php?url=<?php echo urlencode(substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))); ?>">简体</a>
          <a href="<?php echo $cfg['Url'] ?>/es/index.php?url=<?php echo urlencode(substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))); ?>">Español</a>
        </div>
      </li>

      <?php
      $cart_items = isset($_SESSION['total_items']) ? $_SESSION['total_items'] : 0;
      if ($cart_items == 0) {
        $myurl = "###";
      } else {
        $myurl = "{$cfg['Url']}cart.php";
      }
      ?>
      <li class="shop_cart">
        <a href="<?php echo $myurl ?>">
          <!-- <img src="<?php echo $cfg['Url'] ?>images/icon/cart.svg" class="img-fluid" width="26" alt="My Carts"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="#fff" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
          </svg>
          <span>My Cart</span>
          <i><?php echo $cart_items ?></i>
        </a>
      </li>
    </ul>

    <div class="togglebar">
      <i></i><i></i><i></i>
    </div>
    <div class="search_keyword search_keyword2 d-md-none">
      <form action="<?php echo $cfg['Url'] ?>products_search.php" method="get" name="sform" id="sform2">
        <label for="">Product Search</label>
        <input name="keyword" type="text" required value="<?php echo $keyword ?>" class="form-control autocomplete-ajax" placeholder="Keywords">
        <button>Search</button>
      </form>
      <form action="<?php echo $cfg['Url'] ?>products_search3.php" method="get" name="sform" id="sform2">
        <label for="">Choice in Set</label>
        <input name="keyword" type="text" required value="<?php echo $keyword ?>" class="form-control autocomplete-ajax" placeholder="By one item no.">
        <button>Search</button>
      </form>
    </div>
  </div>

  <div class="nav_menu">
    <dl>
      <dt class="logo">
        <a href="<?php echo $cfg['Url'] ?>index.php?utm_source=KT-Web-Head-en&utm_medium=KT-Web-Index-en">
          <img src="<?php echo $cfg['Url'] ?>images/logo.svg" width="247" class="img-fluid" alt="KING TONY">
        </a>
      </dt>
      <dd>
        <input type="checkbox">
        <a href="<?php echo $cfg['Url'] ?>product.php?utm_source=KT-Web-Head-en&utm_medium=Product">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
            <path id="grid-fill" d="M1,2.5A1.5,1.5,0,0,1,2.5,1h3A1.5,1.5,0,0,1,7,2.5v3A1.5,1.5,0,0,1,5.5,7h-3A1.5,1.5,0,0,1,1,5.5Zm8,0A1.5,1.5,0,0,1,10.5,1h3A1.5,1.5,0,0,1,15,2.5v3A1.5,1.5,0,0,1,13.5,7h-3A1.5,1.5,0,0,1,9,5.5Zm-8,8A1.5,1.5,0,0,1,2.5,9h3A1.5,1.5,0,0,1,7,10.5v3A1.5,1.5,0,0,1,5.5,15h-3A1.5,1.5,0,0,1,1,13.5Zm8,0A1.5,1.5,0,0,1,10.5,9h3A1.5,1.5,0,0,1,15,10.5v3A1.5,1.5,0,0,1,13.5,15h-3A1.5,1.5,0,0,1,9,13.5Z" transform="translate(-1 -1)" fill="#005caf" />
          </svg>
          Products
        </a>
        <div class="dropdown_menu">
          <div class="row">
            <div class="col-lg-12">
              <h3><span>Products</span><a href="<?php echo $cfg['Url'] ?>product.php?utm_source=KT-Web-Head-en&utm_medium=Product-more">More</a></h3>
            </div>

            <?php
            $pImgArray = array();
            $Query = "select * from " . $cfg['TablePrefix'] . "products_catalog" . $cfg['Lang'] . " where D_YN = 1 and D_Level = 1 ";
            $Nums = $db->getTotalRows($Query);
            if ($Nums != 0) {
              $Data = $db->getResult($Query . " Order By D_Order ASC,D_Key DESC ");
              $k = 2;
              for ($j = 0; $j < Count($Data); $j++) {
                $N_Img0 = ($Data[$j]['D_Img4']) ? $timthumb_path . "timthumb.php?src={$cfg['Url']}upload/products_catalog" . $cfg['Lang'] . "/" . $Data[$j]['D_Img4'] . "&h=189&w=267" : "{$cfg['Url']}img/pro/g00.jpg";
                /* 
                $Query2 = "select * from ".$cfg['TablePrefix']."products_catalog".$cfg['Lang']." where D_YN = 1 and D_Level = 2 and D_Pid = ".$Data[$j]['D_Key'];
                $Detail = $db->getRows($db->query($Query2." Order By D_Order ASC"));
                if ($Detail){
                  $Query3 = "select * from ".$cfg['TablePrefix']."products".$cfg['Lang']." where N_YN = 1 and N_uClass = ".$Detail['D_Key'];
                  $Detail3 = $db->getRows($db->query($Query3." Order By N_Order ASC")); 
                  $N_Img0 = ($Detail3['N_Img0']) ? $timthumb_path."timthumb.php?src=upload/products".$cfg['Lang']."/".$Detail3['N_Img0']."&h=248&w=349" : $timthumb_path."timthumb.php?src=upload/products".$cfg['Lang']."/".$Detail3['N_SerialNo']."_s2.jpg&h=248&w=349&zc=2";
                }
                */

                $pImgArray[$k + $j] = $Data[$j]['D_Seourl'];

            ?>
                <div class="drop_item col-xl-2 col-lg-2 col-md-2 col-sm-6">
                  <a href="<?php echo $cfg['Url'] ?>catalogs/<?php echo $Data[$j]['D_Seourl']; ?>/?utm_source=KT-Web-Head-en&utm_medium=Pro-Cat-<?php echo $Data[$j]['D_Seourl']; ?>">
                    <div class="img_box">
                      <img src="images/p_noimg.svg" data-src="<?php echo $N_Img0 ?>" class="img-fluid lazyload" alt="<?php echo urldecode($Data[$j]['D_Name']); ?>">
                    </div>
                    <span>
                      <?php echo $Data[$j]['D_Name']; ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="5.295" height="9.831" viewBox="0 0 5.295 9.831">
                        <path id="chevron-right" d="M4.61,1.61a.378.378,0,0,1,.535,0L9.683,6.147a.378.378,0,0,1,0,.535L5.146,11.22a.379.379,0,1,1-.535-.535L8.88,6.415,4.61,2.146a.378.378,0,0,1,0-.535Z" transform="translate(-4.499 -1.499)" fill="#dc000c" fill-rule="evenodd" />
                      </svg>
                    </span>
                  </a>
                </div>
            <?php
              }
            }
            // print_r($pImgArray);
            ?>

          </div>
        </div>
      </dd>
      <dd>
        <input type="checkbox">
        <a href="<?php echo $cfg['Url'] ?>product_new.php?utm_source=KT-Web-Head-en&utm_medium=Newproduct">
          New Products
        </a>
        <div class="dropdown_menu">
          <div class="row">
            <div class="col-lg-12">
              <h3><span>New Products</span><a href="<?php echo $cfg['Url'] ?>product_new.php?utm_source=KT-Web-Head-en&utm_medium=Newproduct-more">More</a></h3>
            </div>
            <?php
            $Query = "select * from " . $cfg['TablePrefix'] . "products" . $cfg['Lang'] . " where N_YN = 1 and N_YN_New = 1 ";
            $Nums = $db->getTotalRows($Query . " and N_YN_New = 1 ");
            if ($Nums != 0) {
              $Data = $db->getResult($Query . " and ifnull(N_New_Order,'')<>'' order by N_New_order limit 6");
              //$Data = $db->getResult($Query . " Order By N_Key DESC limit 6");
              for ($j = 0; $j < Count($Data); $j++) {
                $N_Img0 = ($Data[$j]['N_Img0']) ? $timthumb_path . "timthumb.php?src={$cfg['Url']}upload/products" . $cfg['Lang'] . "/" . $Data[$j]['N_Img0'] . "&h=189&w=267" : $timthumb_path . "timthumb.php?src={$cfg['Url']}upload/products" . $cfg['Lang'] . "/" . $Data[$j]['N_SerialNo'] . ".png&h=189&w=267&zc=2";
                $sQuery = "select * from " . $cfg['TablePrefix'] . "products_catalog" . $cfg['Lang'] . " where D_YN = 1 and D_Level = 2 and D_Key = " . $Data[$j]['N_uClass'];
                // $sDetail = $db->getRows($db->query($sQuery));   

            ?>
                <div class="drop_item col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <a href="<?php echo $cfg['Url'] ?>product/<?php echo $Data[$j]['N_Seourl']; ?>?utm_source=KT-Web-Head-en&utm_medium=New-Pro-<?php echo $Data[$j]['N_Seourl']; ?>">
                    <div class="img_box">
                      <img src="<?php echo $cfg['Url'] ?>images/p_noimg.svg" data-src="<?php echo $N_Img0 ?>" class="img-fluid lazyload" alt="<?php echo htmlspecialchars($Data[$j]['N_Name']); ?>">
                    </div>
                    <span>
                      <?php echo $Data[$j]['N_SerialNo']; ?><br>
                      <?php echo $Data[$j]['N_Name']; ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="5.295" height="9.831" viewBox="0 0 5.295 9.831">
                        <path id="chevron-right" d="M4.61,1.61a.378.378,0,0,1,.535,0L9.683,6.147a.378.378,0,0,1,0,.535L5.146,11.22a.379.379,0,1,1-.535-.535L8.88,6.415,4.61,2.146a.378.378,0,0,1,0-.535Z" transform="translate(-4.499 -1.499)" fill="#dc000c" fill-rule="evenodd" />
                      </svg>
                    </span>
                  </a>
                </div>
            <?php
              }
            }
            ?>

          </div>
        </div>
      </dd>
      <dd class="s_n"><a href="<?php echo $cfg['Url'] ?>support.php?utm_source=KT-Web-Head-en&utm_medium=Support">Support</a></dd>
      <dd class="s_n"><a href="<?php echo $cfg['Url'] ?>about.php?utm_source=KT-Web-Head-en&utm_medium=Brand">Brand</a></dd>
      <dd class="d-flex d-md-none"><a href="<?php echo $cfg['Url'] ?>contact.php?utm_source=KT-Web-Head-en&utm_medium=Contact">Contact</a></dd>
    </dl>

    <div class="nav_right_box">

      <!-- 電腦版搜尋 -->
      <div class="nav_search_box d-none d-md-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="search1">
          <g id="Group_20" data-name="Group 20" transform="translate(-1446 -121)">
            <circle id="Ellipse_1" data-name="Ellipse 1" cx="16" cy="16" r="16" transform="translate(1446 121)" />
            <path id="search" d="M9.18,8.088A5.082,5.082,0,1,0,8.088,9.181h0a.915.915,0,0,0,.077.09l3.01,3.01a.782.782,0,0,0,1.106-1.106L9.27,8.165a.787.787,0,0,0-.09-.078Zm.2-3.005a4.3,4.3,0,1,1-4.3-4.3,4.3,4.3,0,0,1,4.3,4.3Z" transform="translate(1455.746 130.743)" />
          </g>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="21" viewBox="0 0 16 16" class="search2">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
        <span>Product Search</span>
      </div>

      <!-- 電腦版置頂 -->
      <div class="search_keyword">
        <form action="<?php echo $cfg['Url'] ?>products_search.php" method="get" name="sform" id="sform2">
          <label for="">Product Search</label>
          <input name="keyword" type="text" required value="<?php echo $keyword ?>" class="form-control autocomplete-ajax" placeholder="Keywords">
          <button>Search</button>
        </form>
        <form action="<?php echo $cfg['Url'] ?>products_search3.php" method="get" name="sform" id="sform2">
          <label for="">Choice in Set</label>
          <input name="keyword" type="text" required value="<?php echo $keyword ?>" class="form-control autocomplete-ajax" placeholder="By one item no.">
          <button>Search</button>
        </form>
      </div>

      <div class="nav_how">
        <a href="<?php echo $cfg['Url'] ?>dstribution.php?utm_source=KT-Web-Head-en&utm_medium=Distribution">
          <img src="<?php echo $cfg['Url'] ?>images/global.svg" class="img-fluid" alt="Global Distribution" width="32" height="32"><!--<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <path id="question-circle-fill" d="M32,16A16,16,0,1,1,16,0,16,16,0,0,1,32,16ZM10.992,12.066h1.65a.556.556,0,0,0,.532-.5A2.5,2.5,0,0,1,15.858,9.3c1.372,0,2.628.686,2.628,2.336,0,1.27-.748,1.854-1.93,2.742-1.346.978-2.412,2.12-2.336,3.974l.006.434a.5.5,0,0,0,.5.492h1.622a.5.5,0,0,0,.5-.5v-.21c0-1.436.546-1.854,2.02-2.972,1.218-.926,2.488-1.954,2.488-4.112C21.356,8.46,18.8,7,16.01,7c-2.534,0-5.31,1.18-5.5,4.572a.474.474,0,0,0,.482.494Zm4.65,12.886a1.876,1.876,0,1,0,0-3.734,1.873,1.873,0,1,0,0,3.734Z" />
          </svg>-->
          &nbsp;&nbsp;Global Distribution
        </a>
      </div>
      <!-- / -->

      <!-- scrolled nav -->
      <div class="nav_top scroll_nav">
        <ul>
          <?php if ($_SESSION['mN_Key']) { ?>
            <li><a href="<?php echo $cfg['Url'] ?>member.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 15.179 15.179">
                  <path id="person-fill" d="M3.265,17.179A1.239,1.239,0,0,1,2,15.914c0-1.265,1.265-5.06,7.589-5.06s7.589,3.795,7.589,5.06a1.239,1.239,0,0,1-1.265,1.265ZM9.589,9.589A3.795,3.795,0,1,0,5.795,5.795,3.795,3.795,0,0,0,9.589,9.589Z" transform="translate(-2 -2)" fill="#fff" />
                </svg>
                <!-- <span><?php echo $_SESSION['mN_Name'] ?></span> -->
              </a></li>
            <li>
              <a href="<?php echo $cfg['Url'] ?>login_out.php?Mode=Out">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
                </svg>
              </a>
            </li>
          <?php } else { ?>
            <li>
              <a href="<?php echo $cfg['Url'] ?>login.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>
              </a>
            </li>
          <?php
          }
          $_SESSION['ccID'] = 0;
          ?>
          <li>
            <a href="<?php echo $cfg['Url'] ?>contact.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" viewBox="0 0 16 12">
                <path id="envelope" d="M0,4A2,2,0,0,1,2,2H14a2,2,0,0,1,2,2v8a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2ZM2,3A1,1,0,0,0,1,4v.217l7,4.2,7-4.2V4a1,1,0,0,0-1-1ZM15,5.383,10.292,8.208,15,11.1Zm-.034,6.876L9.326,8.788,8,9.583l-1.326-.8-5.64,3.47A1,1,0,0,0,2,13H14a1,1,0,0,0,.966-.741ZM1,11.1l4.708-2.9L1,5.383Z" transform="translate(0 -2)" fill="#fff" />
              </svg>
            </a>
          </li>
          <li class="language">
            <a href="###">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" viewBox="0 0 16 16">
                <path id="globe" d="M0,8a8,8,0,1,1,8,8A8,8,0,0,1,0,8ZM7.5,1.077A3.519,3.519,0,0,0,5.613,2.932,7.97,7.97,0,0,0,5.145,4H7.5V1.077ZM4.09,4a9.267,9.267,0,0,1,.64-1.539,6.7,6.7,0,0,1,.6-.933A7.025,7.025,0,0,0,2.255,4ZM3.508,7.5A13.7,13.7,0,0,1,3.82,5H1.674a6.958,6.958,0,0,0-.656,2.5h2.49ZM4.847,5a12.5,12.5,0,0,0-.338,2.5H7.5V5ZM8.5,5V7.5h2.99A12.5,12.5,0,0,0,11.153,5ZM4.51,8.5A12.5,12.5,0,0,0,4.847,11H7.5V8.5Zm3.99,0V11h2.653a12.454,12.454,0,0,0,.338-2.5ZM5.145,12a7.964,7.964,0,0,0,.468,1.068A3.525,3.525,0,0,0,7.5,14.923V12Zm.182,2.472a6.7,6.7,0,0,1-.6-.933A9.268,9.268,0,0,1,4.09,12H2.255a7.024,7.024,0,0,0,3.072,2.472ZM3.82,11a13.652,13.652,0,0,1-.312-2.5H1.018A6.926,6.926,0,0,0,1.674,11Zm6.853,3.472A7.024,7.024,0,0,0,13.745,12H11.91a9.27,9.27,0,0,1-.64,1.539,6.688,6.688,0,0,1-.6.933ZM8.5,12v2.923a3.519,3.519,0,0,0,1.887-1.855A7.964,7.964,0,0,0,10.855,12H8.5Zm3.68-1h2.146a6.926,6.926,0,0,0,.656-2.5h-2.49A13.65,13.65,0,0,1,12.18,11Zm2.8-3.5A6.959,6.959,0,0,0,14.326,5H12.18a13.7,13.7,0,0,1,.312,2.5ZM11.27,2.461A9.255,9.255,0,0,1,11.91,4h1.835a7.024,7.024,0,0,0-3.072-2.472,6.788,6.788,0,0,1,.6.933ZM10.855,4a7.966,7.966,0,0,0-.468-1.068A3.522,3.522,0,0,0,8.5,1.077V4Z" fill="#fff" />
              </svg>
            </a>
            <div class="dropdown">
              <a href="<?php echo $cfg['Url'] ?>/tw/index.php?url=<?php echo urlencode(substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))); ?>">繁體中文</a>
              <a href="<?php echo $cfg['Url'] ?>/cn/index.php?url=<?php echo urlencode(substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))); ?>">简体</a>
              <a href="<?php echo $cfg['Url'] ?>/es/index.php?url=<?php echo urlencode(substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))); ?>">Español</a>
            </div>
          </li>

          <?php
          $cart_items = isset($_SESSION['total_items']) ? $_SESSION['total_items'] : 0;
          if ($cart_items == 0) {
            $myurl = "###";
          } else {
            $myurl = "{$cfg['Url']}cart.php";
          }
          ?>
          <li class="shop_cart">
            <a href="<?php echo $myurl ?>">
              <!-- <img src="<?php echo $cfg['Url'] ?>images/icon/cart.svg" class="img-fluid" width="28" alt="My Carts"> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#fff" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
              </svg>
              <i><?php echo $cart_items ?></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- / -->

    </div>
  </div>

</nav>