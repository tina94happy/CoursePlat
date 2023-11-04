<!DOCTYPE html>
<html lang="en">
<head>
    <title>登入</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
.card-body{
    border-style:outset;
    position: center;
   
}
#book{
    position:center;
    margin-left: 117.6px;
    margin-right: 117.6px;
    padding-left: 500px;
}
    #loginplace{
        border-style: solid;
        border-color: #99a5a5;
        position: center;
        height: 590px;
        width: 1080px;
   
    }
     ul { /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
    }

    ul.drop-down-menu {
        
        display: inline-block;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 13px;
        color: white;
        background-color: white;

    }

    ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        border-right: lightgreen 1px solid;
    }

    ul.drop-down-menu > li:last-child {
        border-right: none;
    }

    ul.drop-down-menu > li {
        float: left; /* 只有第一層是靠左對齊*/
    }

     ul.drop-down-menu a {
        
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 40px;
        background-color: white;

    }
    ul.drop-down-menu a:hover { /* 滑鼠滑入按鈕變色*/
        background-color: lightgreen;
        color: white;

    }
    ul.drop-down-menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
        background-color: lightgreen;
        color: white;
        
    }
     ul.drop-down-menu ul {
        border: #ccc 1px solid;
        position: absolute;
        z-index: 99;
        left: -1px;
        top: 100%;
       min-width: 180px;
    }

    ul.drop-down-menu ul li {
        border-bottom: #ccc 1px solid;
    }

    ul.drop-down-menu ul li:last-child {
        border-bottom: none;
    }

    ul.drop-down-menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
        z-index: 999;
        top: 10px;
        left: 90%;
    }
      ul.drop-down-menu ul { /*隱藏次選單*/
        display: none;
    }

    ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
        display: block;
    }
    body {
   width: 100vw;
   
   font-family: helvetica;
}

.about {
  
   display: flex;
  
}

.wrapper {
   width: 100vw;
   margin: 0 auto;
   height: 400px;
   background-color: #161616;
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
   transition: all 0.3s ease;
}

.content {
   max-width: 1024px;
   width: 100%;
   padding: 0 4%;
   
   margin: 0 auto;
   display: flex;
   justify-content: center;
   align-items: center;
}


.card {
   width:100%;
   max-width: 900px;
   min-width: 600px;
   height: 500px;
   background-color: #292929;
   margin: 20px;
   border-radius: 10px;
   box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
   border: 2px solid rgba(7, 7, 7, 0.12);
   font-size: 30px;   
   transition: all 0.3s ease;
   position: relative;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   cursor: pointer;
   transition: all 0.3s ease;
}

.icon1 {
   margin: 0 auto;
   width: 100%;
   height: 80px;
   max-width:80px;
   background: linear-gradient(90deg, #FF7E7E 0%, #FF4848 40%, rgba(0, 0, 0, 0.28) 60%);
   border-radius: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   color: white;
   transition: all 0.8s ease;
   background-position: 0px;
   background-size: 200px;
}
#tag{
    margin-right: 400px;
}

</style>
</head>
<body class="contact-page">
    
    <div class="page-header">
       
        <div class="page-header-overlay">
            
            <div class="container">
              
                <div class="row">
                    <div class="col-12">
                        
                                <h1 class="site-title"><a href="index.php" rel="home">輔仁大學管理學院<span><br>空間預借系統</span></a></h1>
                          
                          </div>
                        
                    </div><!-- .col -->
                    <div class="box" ><div class="row" style="margin-left:700px ;"><div  align=right><svg xmlns="http://www.w3.org/2000/svg" style="color:white" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                      </svg><a href="http://www.management.fju.edu.tw/" style="color: honeydew;">輔仁大學管理學院</a>&nbsp;&nbsp;</div>
                      <div align=right><svg xmlns="http://www.w3.org/2000/svg" style="color:white" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                      </svg><a href="" style="color: honeydew;">聯絡我們</a>&nbsp;&nbsp;</div>
                      <div align=right><svg xmlns="http://www.w3.org/2000/svg" style="color:white" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                      </svg><a href="" style="color: honeydew;">回首頁</a>&nbsp;&nbsp;</div></div>
                    
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container" >
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="index.php"><i class="fa fa-home"></i> 首頁</a></li>
                        <li id = "tag">ROOM BOOKING</li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
                            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
                          </svg><a href="authority.php">基本資料維護</a>&nbsp;&nbsp;
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
                            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
                          </svg> <a href="my_booking.php">我的預借紀錄</a>&nbsp;&nbsp;

                          <a href="authority.php"> <button type="button" class="btn btn-info" style="margin: 10px;">帳號管理</button></a>  
                          <a href="login.php"> <button type="button" class="btn btn-success">登出</button></a>  
                          <a href="book_room_2.php"> <button type="button" class="btn btn-warning" style="margin-left: 10px;">返回</button></a>  
                    </ul>
                </div><!-- .breadcrumbs -->
                
            </div><!-- .col -->
        </div><!-- .row -->

       


            

    </div><!-- .container -->
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- about -->
    <div class="about">
       <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
          <span class="icon"></span>
       </a>
       <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
          <span class="icon"></span>
       </a>
       <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
          <span class="icon"></span>
       </a>
       <a class="bg_links logo"></a>
    </div>
    <!-- end about -->
    <!-- 按鈕區 -->
    <div style="margin-left: 218px;margin-top: 15px;">
        
		
		請選擇類型: <button type="button" class="btn btn-success "id="btn1"style="margin-left:10px" >會議室</button>
        
		<button class="btn btn-info">教室</button>
		<button class="btn btn-danger">MD教室</button>
		<button class="btn btn-warning">SL研討室</button><br>
		請選擇期次: <input type="radio"style="margin:6px;"name="semester" checked>第一學期<input type="radio"style="margin:6px;" name="semester">第二學期<br>
       <form action="" style="position: relative;top: 13px;">
        請選擇教室: 
            <select name="cars" id="classroom">
              <option value="SL220">SL220</option>
           
              <option value="SL221">SL221</option>
              <option value="SL222">SL222</option>
              <option value="MD1001">MD1001</option>  
               <option value="LM101">LM101</option>
               <option value="LM102">LM102</option>
            </select>
            <br><br>
          
          </form>
        請選擇用途: <input type="text"><input type="button" value="送出">
	</div>
    <!-- table區 -->
    <iframe src="n\新資料夾\index_semester.html" scrolling="no" id="common_table" frameborder="0" width="100%" height="1000px" ></iframe>
    <div style="position: relative;left:30%;">預約使用空間須知:</div>
   <div class="clients-logo">
    <div class="container">
        <div class="row">
            <div class="col-12 flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
                <div class="logo-wrap">
                    <img src="" alt="">
                </div><!-- .logo-wrap -->

                <div class="logo-wrap">
                    <img src="" alt="">
                </div><!-- .logo-wrap -->

                <div class="logo-wrap">
                    <img src="" alt="">
                </div><!-- .logo-wrap -->

                <div class="logo-wrap">
                    <img src="" alt="">
                </div><!-- .logo-wrap -->

                <div class="logo-wrap">
                    <p align="right">Copyright ©2021-2028. College of Management, Fu Jen Catholic University<br>Design by 蘇琬婷</p>
    
                </div><!-- .logo-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .clients-logo -->
      
    

        

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>