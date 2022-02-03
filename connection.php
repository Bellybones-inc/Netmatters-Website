<?php
    //open connection to mysql db
    $dbServername = "127.0.0.1";
    $dbUsername = "will";
    $dbPassword = "maine";
    $dbName = "test";

    $conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'test');

    //fetch table rows from mysql db
    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
    $news_array = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $news_array[] = $row;
    }
    echo json_encode($news_array);
    file_put_contents("data.json", $news_array);
    
    //close the db connection
    mysqli_close($conn);
?>
