<?php include('video-link-upload.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload Video</title>
        <link rel="stylesheet" type="text/css" href="style/video-upload.css">
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
  	        <h2>Upload Video</h2>
        </div>
        <form method="post" enctype="multipart/form-data">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label for="email">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
            </div>
            <div class="input-group">
                <label for="pwd">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $description;?>">
            </div>
            <div class="input-group">
                <label for="pwd">Youtube URL</label>
                <input type="text" class="form-control" id="url" name="url" value="<?php echo $url;?>">
            </div>
            <div class="input-group">
                <label for="pwd">Mediafire URL</label>
                <input type="text" class="form-control" id="media-url" name="media-url" value="<?php echo $media_url;?>">
            </div>
            <div class="input-group">
                <label for="pwd">Choose Thumbnail</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
                            
            <button type="submit" class="btn btn-default" value="add-video-link" name="add-video-link">Submit</button>
        </form>
    </body>
</html>