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
                order: [ [ 0, 'asc' ]]
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
      
        <thead>
            <tr >
                <th  > 編號</th>
                <th align="center">平時/學期</th>
                <th align="center">日期(星期)</th>
                <th align="center">時間</th>
                <th align="center">空間類型</th>
                <th align="center">借用教室</th>
                <th align="center">用途/課程名稱</th>
                <th align="center">取消預約</th>
                
            </tr>
        </thead>
        <tbody>
            <tr  class="table-success">
                <td align="center">1</td>
                <td align="center">平時</td>
                <td align="center">2021-10-27(三)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">SL研討室</td>
                <td align="center">SL200-3</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                   
                    <input type="button" value="取消" onclick="delRow()">
                </td>
            </tr>
            <tr  class="table-success">
                <td align="center">2</td>
                <td align="center">平時</td>
                <td align="center">2021-10-08(五)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">SL研討室</td>
                <td align="center">SL200-3</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                    <input type="button" value="取消" onclick="delRow()">
                   
                </td>
            </tr>
            <tr class="table-warning">
                <td align="center">3</td>
                <td align="center">學期</td>
                <td align="center">上學期(三)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">會議室</td>
                <td align="center">LM201</td>
                <td align="center">教學上課</td>
               
                
                <td align="center">
                    <input type="button" value="取消" onclick="delRow()">
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">4</td>
                <td align="center">平時</td>
                <td align="center">2021-04-12(一)</td>
                <td align="center">18:30~19:30</td>
                <td align="center">會議室</td>
                <td align="center">LM200</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                   
                    已逾時 
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">5</td>
                <td align="center">平時</td>
                <td align="center">2021-04-12(一)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">會議室</td>
                <td align="center">LM200</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                  已逾時 
                   
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">6</td>
                <td align="center">平時</td>
                <td align="center">2021-04-12(四)</td>
                <td align="center">18:30~19:30</td>
                <td align="center">SL研討室</td>
                <td align="center">SL200-3</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                    已逾時 
                  
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">7</td>
                <td align="center">平時</td>
                <td align="center">2021-04-12(四)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">SL研討室</td>
                <td align="center">SL200-3</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                    已逾時 
                  
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">8</td>
                <td align="center">平時</td>
                <td align="center">2021-03-03(三)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">SL研討室</td>
                <td align="center">SL200-3</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                   
                    已逾時 
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">9</td>
                <td align="center">平時</td>
                <td align="center">2021-02-08(一)</td>
                <td align="center">18:30~19:30</td>
                <td align="center">會議室</td>
                <td align="center">LM200</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                    已逾時 
                   
                </td>
            </tr>
            <tr class="table-secondary">
                <td align="center">10</td>
                <td align="center">平時</td>
                <td align="center">2021-02-08(一)</td>
                <td align="center">19:30~20:30</td>
                <td align="center">會議室</td>
                <td align="center">LM200</td>
                <td align="center">碩士生討論</td>
               
                
                <td align="center">
                    已逾時 
                    
                </td>
            </tr>
            
            
            
        </tbody>
    </table>
</body>
</html>