<?php include('media-fire-link-upload.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload Resources</title>
        <link rel="stylesheet" type="text/css" href="/technical-sujit-v1/style/video-upload.css">
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }
            body {
                font-size: 120%;
                background: #F8F8FF;
            }


        </style>
    </head>
    <body>
        <div class="header">
  	        <h2>Upload Media Fire Link</h2>
        </div>
        <form method="post" enctype="multipart/form-data">
            <?php include('C:/xampp/htdocs/technical-sujit-v1/errors.php'); ?>
            <div class="input-group">
                <label for="email">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
            </div>
            <div class="input-group">
                <label for="pwd">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $description;?>">
            </div>
            <div class="input-group">
                <label for="pwd">Media Fire URL</label>
                <input type="text" class="form-control" id="url" name="url" value="<?php echo $url;?>">
            </div>
                            
            <button type="submit" class="btn btn-default" value="add-media-link" name="add-media-link">Submit</button>
        </form>
    </body>
</html>