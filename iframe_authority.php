<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        .header{
            display: flex;
            align-items: center;
        }
        
    </style>
</head>
<body>
  
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
    </table>
</body>
</html>