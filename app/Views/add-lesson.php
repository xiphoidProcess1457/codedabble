<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ng-tags-input.min.css');?>">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ask-question.css');?>">
    <script type="text/javascript" src="<?= base_url('assets/js/ng-tags-input.min.js');?>"> </script>
    <title>Add Lesson</title>
</head>
<style>
    .container{
        padding-top: 10em;
    }
</style>
<body>
    <div class="container"> 
        <h1>
            Add Lesson
        </h1>
    <form  action="" method="POST">
    <div class="form-group">
        <input type="Title" class="form-control input-title" id="title-input" name="title" placeholder="Title">
    </div>
    
    <div class="form-group">
        <input type="Title" class="form-control input-title" id="title-input" name="" placeholder="Course">
    </div>

    
    <div class="form-group">
    <textarea id="text-editor" name="body"></textarea>
    </div>

    <div class="form-group">
    <button class="post-button" type="submit">POST</button>
    </div>
</form>
    </div>
</body>
<script type="text/javascript" src="<?= base_url('assets/js/text-editor-answer-forum.js');?>"> </script>
</html>