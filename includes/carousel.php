    <!-- iframe Carousel -->
    <div class="master">
        <div class="prev"></div>
        <div class="carousel">
            <div class="inner">
                <?php
                    include('includes/showcases.php');
                    $frames = $showcases[$name]; //get the list of src's from array
                    //add each showcase to carousel
                    foreach($frames as $frame){
                        echo '<iframe width="640px" height="420px" src=' . 
                                $frame . ' frameborder="0" allowfullscreen></iframe>';
                    }
                ?>
            </div>
        </div>
        <div class="next"></div>
        <div class="bubbles"></div>
    </div>
    
    
    <script src="html/js/carousel.js"></script>

</body>

</html>