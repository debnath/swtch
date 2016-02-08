<!DOCTYPE html>
<html>
<head>
    <title> TITLE</title>
</head>
<body>
<div class="container">
    <div class="plainTileWrap">
        <div class="row">
            <div class="col-xs-6">
                <div class="btn-group">
                    <select id='sort-dropdown'>
                        <option value="first_name">First Name</option>
                        <option value="last_name">Last Name</option>
                        <option value="role">Role</option>
                        <option value="email">Email</option>
                        <option value="department">Department</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder=" " aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">Keyword Search</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tileWrap">
        <div class="row tableDivide">
            <div class="col-xs-2"><h4>First Name</h4></div>
            <div class="col-xs-2"><h4>Last Name</h4></div>
            <div class="col-xs-3"><h4>Email</h4></div>
            <div class="col-xs-2"><h4>Role</h4></div>
            <div class="col-xs-2"><h4>Department</h4></div>
        </div>
        <div id="userrows">
        </div>
        <div>
            <nav>
                <ul class="pagination">
                </ul>
            </nav>
        </div>

    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="table.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
      integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>


</html>
