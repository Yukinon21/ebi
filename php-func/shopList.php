<html>
    <head>postgres_shopList.php</head>
    <body>
        <?php
        //
        $dbconn = pg_connect("port=5432 user=postgres password=postgres dbname=postgres");
        //
        $sql = "SELECT id FROM mybook";
        //
        $result = pg_query_params($dbconn,$sql)

        //
        $cnt = pg_numrows($result);
        print("<h2>$cnt 件取得しました。</h2>");
        //
        pg_close($dbconn);
        ?>
    </body>
</html>