<!-- require once calls go here-->
<?php
if(!isset($page_title)) { $page_title = 'Sewing PM - Logged In';}
?>
<!doctype html>

<html lang="en">
<head>

<meta charset="utf-8">

<!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/cd4524babb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"
        type="0088a5a519ac33cb9052c93b-text/javascript">
    </script>
<!--DYNAMIC HERE-->
    <link rel="icon" href="../../favicon.ico" type="favicon.ico" sizes="16x16">

<link rel="stylesheet" media="all" href="<?php echo url_for('/css/dashboard.css') ?>" />
<link rel="stylesheet" media="all" href="<?php echo url_for('/css/signin.css') ?>" />

</head>