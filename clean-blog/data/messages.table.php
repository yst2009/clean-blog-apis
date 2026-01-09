<?php 


$sql = "CREATE TABLE IF NOT EXISTS `messages`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `subject` VARCHAR(20) NOT NULL,
    `content` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)"; 

// execution 
$result = mysqli_query($conn,$sql);

if($result){
    echo "Table messages created successfully <br>";
}