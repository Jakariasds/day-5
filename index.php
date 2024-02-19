<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php laravel</title>
</head>
<body>
    <?php
        // echo "hello bitm";
        class personalInfo{
            public $firstName;
            public $lastName;
            public $age;
        }
        $personalInfo = new personalInfo();
        $personalInfo->firstName="Jakaria";
        $personalInfo->lastName = "Habib";
        $personalInfo->age=28;
        
        echo "My first name is {$personalInfo->firstName} and last name is {$personalInfo->lastName}. My age is {$personalInfo->age}.";
    ?>
</body>
</html>