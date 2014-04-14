        <?php require('header.php'); ?>

        <div class="nat-projects container">
            
            <form action="sendmail.php" method="POST" id="sendmemail">

                <div class="row" style="margin-top: 50px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-9">
                                          <input name="name" type="text" class="form-control" id="name" maxlength="40">
                                        </div>
                                      </div>
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">

                                        <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                          <input name="email" type="email" class="form-control" id="email" maxlength="40">
                                        </div>
                                      </div>

                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Phone</label>
                                        <div class="col-sm-9">
                                          <input name="phone" type="text" class="form-control" id="phone" maxlength="20">
                                        </div>
                                      </div>
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-sm-3 placer">&nbsp;</div>
                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Message</label>
                                        <div class="col-sm-9">
                                          <textarea name="message" class="form-control mailmessage" id="message" rows="6" maxlength="300"></textarea>
                                            <div class="counter"><span>300</span> characters left</div>
                                             <button type="submit" class="btn btn-default sendmemail pull-right">Send me mail</button>
                                        </div>
                                        
                                      </div>
                    </div>
                    <div class="col-sm-3 placer">&nbsp;</div>
                </div>
            </form>
        </div>

        <script>
        $('.contact').addClass('active');
        $('.sendmemail').click(function(e){
            e.preventDefault();
            var email = $("#email").val();
            
            if ( email.indexOf("@") >= 0 ) {
                $('#sendmemail').submit();
            }
            else {
                $("#email").addClass("bg-danger");
            }
        });
        
        jQuery('.mailmessage').on('input', function() {
            var count = 300 - $(".mailmessage").val().length;
            $(".counter span").text(count);
        });
        </script>

<?php
include('footer.php');
?>