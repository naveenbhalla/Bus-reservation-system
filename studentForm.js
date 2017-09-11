<html>
    <head><title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Column Sizing</h2>
            <p>The form below shows input elements with different widths using different .col-xs-* classes:</p>
            <form>
                <div class="form-group row">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="col-xs-4">
                        <label for="ex3">col-xs-4</label>
                        <input class="form-control" id="ex3" type="text">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>