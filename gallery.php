<html>
    <header>
        <?php
            include('includes/header.php');
            //get the name of the gallery provided
            $name = 'Activities';
            if(isset($_GET['name'])){
                $name = $_GET['name'];
            }
        ?>
    <title> Gallery: <?php echo $name; ?></title>
    <meta charset="utf-8"/>
</header>


<body>
    <div id="content">
        
        <?php 
            include('includes/sidebar.php');
        ?>
	//actual page content
        <div id="subcontent">
            <!-- Gallery Name -->
            <div class="galName"><?php echo $name; ?></div>

            <?php include('includes/carousel.php'); ?>
        </div>
        <style>
            #content {
                display: inline-flex;
                width: 80%;
                margin: auto;
                position: relative;
            }
            #subcontent {
                display: block;
                text-align: center;
                width: 80%;
                position: relative;
                margin: auto;
            }
        </style>
    </div>

    <?php include('includes/footer.php'); ?>

</body>
<html>
