
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/mystyle.css">
    <link rel="icon" href="images/logo1.jpeg" sizes="32x32" />
    <script src="js/myscripts.js"></script>
</head>
<body>

    <div class="container">
        <h2>Admin Dashboard</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li value="1" onclick="showUser(this.value)"><a data-toggle="tab" href="#menu1" >Media Fire Links</a></li>
            <li value="2" onclick="showLink(this.value)"><a data-toggle="tab" href="#menu2">Video Links</a></li>
            <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <!-- <h3>HOME</h3> -->
                <h1>Welcome Admin!</h1>
                <ul class="nav nav-tabs">
                    <!-- <li class="active"><a data-toggle="tab" href="#home">Home</a></li> -->
                    <li value="3"><a data-toggle="tab" href="#menu3">Add Media Fire Links</a></li>
                    <li value="4"><a  href="video-upload.php">Add Video Links</a></li>
                    <li value="3"><a data-toggle="tab" href="#menu5">Add Recent Video</a></li>
                    <li value="4"><a data-toggle="tab" href="#menu4">Add Most View Video</a></li>
                    <!-- <li><a data-toggle="taVideob" href="#menu3">Menu 3</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="menu3" class="tab-pane fade">
                        <h3>Add Videos Link</h3>
                        <form action="add-resource.php">
                            <div class="form-group">
                                <label for="email">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Description</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="pwd">URL</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            <button type="submit" class="btn btn-default" value="add-video-link" name="action">Submit</button>
                        </form>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                    <?php include('errors.php'); ?>
                        <h3 class="header">Add Videos Link</h3>
                        
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $description;?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">URL</label>
                                <input type="text" class="form-control" id="url" name="url" value="<?php echo $url;?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Choose Thumbnail</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            
                            <button type="submit" class="btn btn-default" value="add-video-link" name="add-video-link">Submit</button>
                        </form>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <h3>Videos List</h3>
                        
                    </div>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade" style="overflow-x:auto;">
                <h3>Resource List</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">URL</th>
                        </tr>
                    </thead>
                    <tbody id="txtHint">
    
                    </tbody>
                </table>
            </div>

            <div id="menu2" class="tab-pane fade">
                <h3>Videos List</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">URL</th>
                        </tr>
                    </thead>
                    <tbody id="txtLink">
    
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>

</body>
</html>
