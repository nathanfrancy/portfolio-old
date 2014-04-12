        <?php require('header.php'); ?>

        <div class="nat-nav">
            <a href="projects.php">projects</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="about.php">about</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="contact.php" class="active">contact</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="clippings.php">clippings</a>
        </div>

        <div class="nat-projects container">
            
            <form action="sendmail.php" method="POST" id="sendmemail">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control" placeholder="Name*" size="40" maxlength="40">
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">
                        <input type="text" name="email" class="form-control" placeholder="Email*" size="40" maxlength="40" id="email">
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" size="20" maxlength="20">
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">
                        <textarea name="message" class="form-control mailmessage" placeholder="Message*" rows="6" size="300" maxlength="300"></textarea>
                        <br />
                        <div class="counter"><span>300</span> characters left</div>
                        <br />
                        <button type="submit" class="btn btn-default sendmemail">Send me mail</button>
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>
            </form>
        </div>

    </body>
    
    <script>
        $('.sendmemail').click(function(e){
            e.preventDefault();
            var email = $("#email").val();
            
            if ( email.indexOf("@") >= 0 ) {
                $('#sendmemail').submit();
            }
            else {
                alert("Invalid email");
            }
        });
        
        jQuery('.mailmessage').on('input', function() {
            var count = 300 - $(".mailmessage").val().length;
            $(".counter span").text(count);
        });
    </script>
</html>