<?php
$conn = new PDO("mysql:host=db;dbname=tst", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
