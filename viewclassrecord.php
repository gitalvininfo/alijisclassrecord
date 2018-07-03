<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.8.3/jquery.csv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/js/jquery.jexcel.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/css/jquery.jexcel.min.css" type="text/css" />
    </head>
    <body>
        <div id="my"></div>
        <?php
        require 'require/logincheck.php';
        require 'connection.php';
        $query = $conn->query("SELECT `user_username` FROM `tbluser` ") or die(mysqli_error());
        $fp = fopen('file.csv', 'w');
        while($fetch = $query->fetch_array()){
            fputcsv($fp, array_unique($fetch));
        }
        fclose($fp);
        ?>     
        <script>
            $('#my').jexcel({
                // Full CSV URL
                csv:'file.csv',
                colHeaders:  [ 'Student Name', 'W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10' ],
                // Headers
                colWidths: [ 200, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30 ]
            });


        </script>


    </body>

</html>