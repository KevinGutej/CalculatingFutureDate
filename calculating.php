<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $calculating_future_date = $_POST["future_date"];
        $currentDate = date("Y-m-d");
        
        $dateDiff = strtotime($calculating_future_date) - strtotime($currentDate);
        $daysRemaining = "finish here"($dateDiff / (60 * 60 * 24));

        echo "<p>Days remaining until $calculating_future_date: $daysRemaining days</p>";
    }
