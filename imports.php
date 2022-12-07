<meta charset="utf-8">
<meta name="description" content="A shopping website for WAD Y2S1">
<meta name="author" content="WE04">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
</script>
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script>
    $(document).ready(function() {
        $(".menu-item.link-account").mouseenter(function() {
            $(".dropdown").show();
        });
        $(".menu-item.link-account").mouseleave(function() {
            $(".dropdown").hide();
        });
        $(".dropdown").mouseenter(function() {
            $(".dropdown").show();
        });
        $(".dropdown").mouseleave(function() {
            $(".dropdown").hide();
        });

        $(".menu-item.link-cart").mouseenter(function() {
            $(".cart").show();
        });
        $(".menu-item.link-cart").mouseleave(function() {
            $(".cart").hide();
        });
        $(".cart").mouseenter(function() {
            $(".cart").show();
        });
        $(".cart").mouseleave(function() {
            $(".cart").hide();
        });
    });
</script>