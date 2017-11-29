<!DOCTYPE html>
<html>
    <head>
        <style> @import url("styles.css"); </style>
        <script type="text/javascript" src="info.js"></script>
    </head>
    <body>
        <div id = "formInfo" />
            <form method = "post">
                <br>
               Operation - (Simplify, factor, derive)
                <br>
                <input type="text" id = "number" name = "number"/>
                <br>
                Expression - (x =  1 + 2, ...)
                <br>
                <input type = "text" id = "type" name = "type" />
                <br>
                <button type="button" onclick="getInfo()">Submit</button>
            </form>
        </div>
        <div id = "results">
        </div>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>