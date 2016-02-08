//@todo an ajax spinner gif would be good while waiting for data to load

$(document).ready(function() {
    var apiHost = "http://ec2-52-25-86-49.us-west-2.compute.amazonaws.com";
    if (localStorage.getItem('orderby') === null) {
        localStorage.setItem('orderby', 'user_id');
    }

    if (localStorage.getItem('offset') === null) {
        localStorage.setItem('offset', 0);
    }

    $( "#sort-dropdown" ).change(function(data) {
        var dropdownOrderBy = $( "#sort-dropdown  option:selected" ).val();
        localStorage.setItem('orderby', dropdownOrderBy);
        localStorage.setItem('offset', 0);
        fetchAndRenderTableData();
    });

    renderTableData = function (data) {
        $( "#userrows" ).empty();
        var users = data.users;
        var length = users.length;
        for (var i = 0; i < length; i++) {
            //@todo do this in a more elegant way
            var userRow = '<div class="row tableDivide"><div class="col-xs-2">' + users[i]['first_name'] +'</div><div class="col-xs-2">' + users[i]['last_name'] +'</div><div class="col-xs-2">' + users[i]['email'] +'</div><div class="col-xs-2">' + users[i]['role'] +'</div><div class="col-xs-2">' + users[i]['department'] +'</div></div>';
            $( "#userrows" ).append(userRow);
        }
    };

    renderPagination = function (data) {
        $( ".pagination" ).empty();
        var count = parseInt(data.count);
        var pageCount = Math.ceil(count / 10);
        for (var i = 1; i <= pageCount; i++) {
            console.log('adding list item ');
            $( ".pagination" ).append('<li><a href="#" class="pag-item" value=' + i + '>' + i + '</a></li>');
        }
        $('.pag-item').on('click', function(e){
            e.preventDefault();
            $offset = (parseInt(e.target.attributes.value.nodeValue) - 1) * 10;
            localStorage.setItem('offset', $offset);
            fetchAndRenderTableData();
        });
    };

    fetchAndRenderTableData = function() {
        var offset = localStorage.getItem('offset');
        var orderby = localStorage.getItem('orderby');
        $.ajax({
            url: apiHost + '/switchservice/v1/users?offset=' + offset + '&orderby=' + orderby,
            context: document.body
        }).done(function(data) {
            renderTableData(data);
            renderPagination(data);
        });
    };

    fetchAndRenderTableData();
});