
<link type="text/css" href="css/smoothness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>

<style>
.date {
height: 30px;
width: 100px;
background: green;
display: block;
}

.clicked {
background: red;
}
</style>

<div class="date" date_str="today">click me</div>
<div class="date" date_str="tomorrow">not me</div>

<script type="text/javascript">

$(".date").click(function () {
        $(this).toggleClass("clicked");

                var clicked_dates = $(".clicked").map(function() {
                        return $(this).attr('date_str');
                        }).get();

                alert(clicked_dates.join(", "));
        }
);
</script>
