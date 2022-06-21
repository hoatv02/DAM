<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        ul li{
            display: inline-flex;
        }
        
        .headeradmin h1{
            text-align: center;
            font-size: 50px;
            background-color: antiquewhite;
            padding: 20px;
            margin: 0;
        }
        .menu ul li{
            margin-left: 30px;
        }
        .contents{
            margin-left: 500px;
            background:linear-gradient(to top , blue,red);
            width: 300px;
            text-align: center;
            border-radius: 10px;
        }
        .mb10{
            margin-bottom: 20px;
        }
        .btn_input{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="boxcenter bile">
        <div class="row mb headeradmin"> 
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=adddm">Danh Mục</a></li>
                <li><a href="index.php?act=addsp">Sản phẩm</a></li>
                <li><a href="index.php?act=addkh">Khách Hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình Luận</a></li>
                <li><a href="index.php?act=dstk">Thống Kê</a></li>
            </ul>
        </div> -->

        
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIN</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <style>
    .vertical-nav {
      min-width: 17rem;
      width: 17rem;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.4s;
    }

    .page-content {
      width: calc(100% - 17rem);
      margin-left: 17rem;
      transition: all 0.4s;
    }

    #sidebar.active {
      margin-left: -17rem;
    }

    #content.active {
      width: 100%;
      margin: 0;
    }

    @media (max-width: 768px) {
      #sidebar {
        margin-left: -17rem;
      }

      #sidebar.active {
        margin-left: 0;
      }

      #content {
        width: 100%;
        margin: 0;
      }

      #content.active {
        margin-left: 17rem;
        width: calc(100% - 17rem);
      }
    }

    body {
      background: #599fd9;
      background: linear-gradient(to right, #599fd9, #c2e59c);
      min-height: 100vh;
      overflow-x: hidden;
    }

    .separator {
      margin: 3rem 0;
      border-bottom: 1px dashed #fff;
    }

    .text-uppercase {
      letter-spacing: 0.1em;
    }

    .text-gray {
      color: #aaa;
    }
  </style>
</head>

<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="https://s1.media.ngoisao.vn/resize_580/news/2021/05/13/kim-ngan-ngoisaovn-w620-h775.jpg" alt="" width="65"
          class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">Admin</h4>
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="../index.php" class="nav-link text-dark font-italic bg-light">
        <i class="fab fa-windows"></i>
          Trang chủ
        </a>
      </li>
      <li class="nav-item ">
        <a href="index.php?act=adddm" class="nav-link text-dark font-italic bg-light">
          <i class="far fa-info"></i>
          Quản lý danh mục
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?act=addsp" class="nav-link text-dark font-italic bg-light">
          <i class="far fa-comment"></i> 
          Quản lý sản phẩm
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?act=dskh" class="nav-link text-dark font-italic bg-light">
        <i class="fal fa-users"></i>
          Quản lý khách hàng
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?act=dsbl" class="nav-link text-dark font-italic bg-light">
        <i class="fal fa-comment-alt"></i>
          Quản lý bình luận
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?act=thongke" class="nav-link text-dark font-italic bg-light">
        <i class="fal fa-th-list"></i>
          Quản lý thống kê
        </a>
      </li>
    </ul>
  </div>