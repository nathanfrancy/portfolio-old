        <?php require('header.php'); ?>

        <div class="nat-nav">
            <a href="projects.php">projects</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="about.php" class="active">about</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="contact.php">contact</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="clippings.php">clippings</a>
        </div>

        <div class="container nat-about">
            
            <div class="row ">
                <div class="col-sm-1 placer">&nbsp;</div>
                <div class="col-sm-3">
                    <img src="img/itslittlenathan.png" style="width: 400px; border-radius: 100px;" class="img-responsive" />
                </div>
                <div class="col-sm-7">
                    <h2 style='padding-top: 0px; margin-top: 0px;'>a little about me...</h2>
                    <p>Senior at <a href="http://ucmo.edu">UCM</a>. Studying Computer Information Systems. Enjoy making awesome websites and applications.<br />Skilled. Logical. Resourceful.</p>
                    
                    <div class="nat-component">
                        skillz
                    </div>
                    <div class="nat-component-body">
                        Hello 2
                    </div>
                    <div class="nat-component">
                        interests
                    </div>
                    <div class="nat-component-body">
                        Hello 2
                    </div>
                </div>
                <div class="col-sm-1 placer">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-sm-2 placer">&nbsp;</div>
                <div class="col-sm-8">
                    
                </div>
                <div class="col-sm-2 placer">&nbsp;</div>
            </div>
            
            
        </div>

    </body>
    
    <script>
    $(".nat-component").click(function() {
        $(".nat-component-body").slideUp();
        $(".nat-component").removeClass("nat-component-active");
        
        if ( $(this).next(".nat-component-body").is(":visible") ) {
            $(this).next(".nat-component-body").slideUp();
        }
        else {
            $(this).next(".nat-component-body").slideDown();
            $(this).addClass("nat-component-active");
        }
        
    });
    </script>

</html>