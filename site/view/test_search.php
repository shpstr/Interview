
<html>
    <head>
        <title> Search</title>
        <script src="http://ajax.googleeapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="typeahead.min.js"></script>
    </head>
    <body>
        <input type="text" name="typeahead">
<!--        <form action="search.php" method="POST">
            <input type="text" name="first_name" id="first_name">
            <input type="submit" value="Search">
        </form>-->

<script>
    $(document).ready(function(){
        $('input.typeahead').typeahead({
            name:'typeahead',
            remote:'search.php?key=%QUERY',
            limit: 10
        });
    });
</script>
    </body>
</html>

