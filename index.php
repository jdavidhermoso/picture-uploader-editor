<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style/main.css" />
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="pu-container">
            <section>
                <h1> Bootstrap Pictures Uploader </h1>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2">
                        <div class="pu-image-container">
                            <img src="" class="img-responsive" id="pu-image" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                        <form id="pu-form">
                            <div class="form-group">
                                <input type="file" class="form-control" id="pu-image-input" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default">
                                    Upload image!
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </body>
</html>