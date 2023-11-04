<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#gamer').DataTable( {
                order: [[ 0, 'desc' ]]
            } );
        } );
    </script>
    
    <style type="text/css">
  /*
 CSS for the main interaction
*/
.tabset > input[type="radio"] {
  position: absolute;
  left: -200vw;
}

.tabset .tab-panel {
  display: none;
}

.tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
.tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
.tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
.tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
.tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
.tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
  display: block;
}

/*
 Styling
*/
body {
  font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
  color: #333;
  font-weight: 300;
}

.tabset > label {
  position: relative;
  display: inline-block;
  padding: 15px 15px 25px;
  border: 1px solid transparent;
  border-bottom: 0;
  cursor: pointer;
  font-weight: 600;
}

.tabset > label::after {
  content: "";
  position: absolute;
  left: 15px;
  bottom: 10px;
  width: 22px;
  height: 4px;
  background: #8d8d8d;
}

.tabset > label:hover,
.tabset > input:focus + label {
  color: #06c;
}

.tabset > label:hover::after,
.tabset > input:focus + label::after,
.tabset > input:checked + label::after {
  background: #06c;
}

.tabset > input:checked + label {
  border-color: #ccc;
  border-bottom: 1px solid #fff;
  margin-bottom: -1px;
 
}

.tab-panel {
  padding: 30px 0;
  border-top: 1px solid #ccc;
}

/*
 Demo purposes only
*/
*,
*:before,
*:after {
  box-sizing: border-box;
}

body {
  padding: 30px;
}

.tabset {
  max-width: 65em;
  
}</style>

<body>
<!-- 
  
  Radio version of tabs.

  Requirements:
  - not rely on specific IDs for CSS (the CSS shouldn't need to know specific IDs)
  - flexible for any number of unkown tabs [2-6]
  - accessible

  Caveats:
  - since these are checkboxes the tabs not tab-able, need to use arrow keys

  Also worth reading:
  http://simplyaccessible.com/article/danger-aria-tabs/
-->

<div class="tabset">
    <!-- Tab 1 -->
    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
    <label for="tab1">帳號權限設定</label>
    <!-- Tab 2 -->
    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
    <label for="tab2">學期區間設定</label>
    <!-- Tab 3 -->
  
    <div class="tab-panels">
      <section id="marzen" class="tab-panel">
       
        <table id="gamer" class="table table-hover display" cellspacing="0" width="100%">
      
            <thead  >
                <tr style="text-align: center;" >
                    <th  > 編號</th>
                    <th align="center">使用者帳號</th>
                    <th align="center">使用者權限</th>
                    <th align="center">使用者名稱</th>
                   
                    
                    <th align="center">權限管理</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr  class="table-success">
                    <td align="center">１</td>
                    <td align="center">0904kk＠mail.fju.edu.tw</td>
                    <td align="center"><form action="" >
                        
                            <select name="account" id="account">
                              <option value="一般使用者">一般使用者</option>
                           
                              <option value="系統管理者">系統管理者</option>
                            
                            </select>
                            <br><br>
                          
                          </form></td>
                    <td align="center">王大強</td>
                   
                    
                    <td align="center">
                       
                        <input type="button" value="修改" onclick="delRow()">
                        <input type="button" value="刪除" onclick="delRow()">
                    </td>
                </tr>
                <tr  class="table-success">
                    <td align="center">2</td>
                    <td align="center">sdgsg＠mail.fju.edu.tw</td>
                    <td align="center"> <select name="account" id="account">
                        <option value="一般使用者">一般使用者</option>
                     
                        <option value="系統管理者">系統管理者</option>
                      
                      </select></td>
                    <td align="center">李翠花</td>
                   
                    
                    <td align="center">
                       
                        <input type="button" value="修改" onclick="delRow()">
                        <input type="button" value="刪除" onclick="delRow()">
                    </td>
                </tr>
               
                
                
                
            </tbody>
        </table> </section>



      <section id="rauchbier" class="tab-panel">
        <div class="box" >
           
            學期區間: <br><br>
            上學期

            <input type="date" name="semester_time" id="">~<input type="date" name="semester_time" id="">
          
              <input type="button" value="確認" onclick="delRow()" class="btn btn-secondary active">
               
              <input type="button" value="修改" onclick="delRow()" class="btn btn-secondary active"><br><br>
            下學期

            <input type="date" name="semester_time" id="">~<input type="date" name="semester_time" id="">
            <input type="button" value="確認" onclick="delRow()" class="btn btn-secondary active">
             
            <input type="button" value="修改" onclick="delRow()" class="btn btn-secondary active"><br><br>
            
      
        <iframe src="https://calendar.google.com/calendar/embed?src=secret%40gapp.fju.edu.tw&ctz=Asia%2FTaipei" style="border: 0 ;margin-left: 100px;" width="800" height="600" frameborder="0" scrolling="no" ></iframe></section>
     
    </div>
    
  </div>
  
 
</body>
</html>

