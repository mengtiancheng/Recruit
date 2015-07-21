<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>申请报名</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrap">
      <!-- 导航栏 -->
      <nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand">个人中心</span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav second-nav">
        <li class="nav-contain active"><a href="http://localhost/index.php/Home/Index/changeDepartment" class="nav-link">申请报名</a></li>
        <li class="nav-contain"><a href="http://localhost/index.php/Home/Index/changeInfo" class="nav-link">修改信息</a></li>
        <li class="nav-contain"><a href="http://localhost/index.php/Home/Index/changePassword" class="nav-link">修改密码</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <div class="container tablecontain" id="main" >
          <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>社团</th>
                  <th>部门1</th>
                  <th>部门2</th>
                  <th>录取状态</th>
                  <th>操作</th>
                </tr>
                <tr>
                  <th>#</th>
                  <th>
                    <select class="form-control tSelector" id="teamselect">
                        <option>==请选择==</option>
                        <option>科协</option>
                        <option>外联</option>
                        <option>办公室</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                  </th>
                  <th>
                    <select class="form-control tSelector" id="department_1">

                    </select>
                  </th>
                  <th>
                    <select class="form-control tSelector" id="department_2">
                      
                    </select>
                  </th>
                  <th>#</th>
                  <th><div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" class="btn btn-default" id="depAdd">添加</button>
                  </div></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>科协</td>
                  <td>网络部</td>
                  <td>电子部</td>
                  <td></td>
                  <td><div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" class="btn btn-default" id="depChange">修改</button>
                    <button type="button" class="btn btn-default" id="depDelete">删除</button>
                  </div></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>社团</td>
                  <td>部门</td>
                  <td>部门</td>
                  <td>录取</td>
                  <td><div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" class="btn btn-default">修改</button>
                    <button type="button" class="btn btn-default">删除</button>
                  </div></td>
                </tr>
              </tbody>
          </table>
     
      </div> <!-- /container -->
    </div>
    <div class="footer">
      <div class="container bottom">
      <p class="test-muted">&copy; 校科协</p>
    </div>
    </div>
    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/index.js"></script>
    <!--<script src="../../../../public/js/ajax.js"></script>-->

  </body>
</html>