<?php include_once('database/db_query.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Questions</title>
</head> 

<body>
    <?php 
    include('components/navbar.php');
    ?>
    <div class="container p-5 my-5 border">
    <h1>Questions</h1>
    <div class="accordion" id="accordionQuestion">
        <?php foreach ($rows as $row): ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['content_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $row['content_id']; ?>">
                        Question <?php echo $row['content_id']; ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $row['content_id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionQuestion">
                    <div class="accordion-body">
                        <h3 class="question-title"><?php echo $row['question']; ?></h3>
                        <p class="question-description"><?php echo $row['description']; ?></p>
                        <p class="question-answer"><?php echo $row['answer']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>