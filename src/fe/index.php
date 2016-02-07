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
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Sort <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">First Name</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Last Name</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Role</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Email</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Department</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder=" " aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">Search</span>
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
        <!--loop-->
        <div class="row tableDivide">
            <div class="col-xs-2">First Name</div>
            <div class="col-xs-2">Last Name</div>
            <div class="col-xs-3">Email</div>
            <div class="col-xs-2">Role</div>
            <div class="col-xs-2">Department</div>
        </div>
        <!-- end loop-->
    </div>
    <div>
        <nav>
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
      integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>


</html>
