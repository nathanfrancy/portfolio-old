<?php require( 'header.php'); ?>

<div class="nat-projects container">

    <form method="POST" id="sendmemail">

        <div class="row" style="margin-top: 50px;">
            <div class="col-sm-2 placer">&nbsp;</div>
            <div class="col-sm-8">

                <div class="form-group">
                    <div class="alert alert-success alert-dismissible" role="alert" id="successalert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div id="successmessage"></div>
                    </div>
                    
                    <label for="inputEmail3" class="col-sm-3 control-label">Name <span style="color: #a94442;">*</span></label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="name" maxlength="40">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 placer">&nbsp;</div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-2 placer">&nbsp;</div>
            <div class="col-sm-8">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email <span style="color: #a94442;">*</span></label>
                    <div class="col-sm-9">
                        <input name="email" type="email" class="form-control" id="email" maxlength="40">
                    </div>
                </div>

            </div>
            <div class="col-sm-2 placer">&nbsp;</div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-2 placer">&nbsp;</div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Phone <span style="color: #a94442;">*</span></label>
                    <div class="col-sm-9">
                        <input name="phone" type="text" class="form-control" id="phone" maxlength="20">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 placer">&nbsp;</div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-2 placer">&nbsp;</div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Message <span style="color: #a94442;">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="message" class="form-control mailmessage" id="message" rows="6" maxlength="300"></textarea>
                        <div class="counter"><span>300</span> characters left</div>
                        <button type="submit" class="btn btn-default sendmemail pull-right disabled">Send me mail &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>

                </div>
            </div>
            <div class="col-sm-2 placer">&nbsp;</div>
        </div>
    </form>
</div>

<script>
    $(".contact").addClass("active");
    
    // key off to submit the form, will only be true if all fields are satisfied
    var formValid = false;
    
    // booleans that keep track of which fields are valid
    var nameValid = false;
    var emailValid = false;
    var phoneValid = false;
    var messageValid = false;
    
    /*====
      ==== On keypress and focusout each input, validate that field */
    $("#name").on("keyup", validateName);
    $("#name").on("focusout", validateName);
    //$("#email").on("keyup", validateEmail); // this is brutally annoying by turning red before a key is even pressed
    $("#email").on("focusout", validateEmail);
    $("#phone").on("keyup", validatePhone);
    $("#phone").on("focusout", validatePhone);
    $("#message").on("keyup", validateMessage);
    $("#message").on("focusout", validateMessage);
    
    function validateName() {
        var nameInput = $("#name").val().trim();
        
        if (nameInput !== "") {
            nameValid = true;
            $("#name").removeClass("danger-errors");
        }
        else {
            nameValid = false;
            $("#name").addClass("danger-errors");
            $("#name").attr("placeholder", "Please provide your name.");
        }
        checkValidForm();
    }
    
    function validateEmail() {
        var emailInput = $("#email").val().trim();
        
        if (emailInput === "") {
            emailValid = false;
            $("#email").addClass("danger-errors");
            $("#email").attr("placeholder", "Please provide an email address.");
        }
        else if (emailInput.indexOf("@") < 0) {
            emailValid = false;
            $("#email").addClass("danger-errors");
            $("#email").attr("placeholder", "Please provide a valid email address.");
        }
        else {
            emailValid = true;
            $("#email").removeClass("danger-errors");
           
        }
        checkValidForm();
    }
    
    function validatePhone() {
        var phoneInput = $("#phone").val().trim();
        
        if (phoneInput !== "") {
            phoneValid = true;
            $("#phone").removeClass("danger-errors");
        }
        else {
            phoneValid = false;
            $("#phone").addClass("danger-errors");
            $("#phone").attr("placeholder", "Please provide a phone number.");
        }
        checkValidForm();
    }
    
    function validateMessage() {
        var messageInput = $("#message").val().trim();
        var count = 300 - $(".mailmessage").val().length;
        $(".counter span").text(count);
        
        if (messageInput !== "") {
            messageValid = true;
            $("#message").removeClass("danger-errors");
        }
        else {
            messageValid = false;
            $("#message").addClass("danger-errors");
            $("#message").attr("placeholder", "Please provide a short message.");
        }
        checkValidForm();
    }
    
    function checkValidForm() {
        if (nameValid && emailValid && phoneValid && messageValid) {
            $(".sendmemail").removeClass("disabled");
            $(".sendmemail").addClass("btn-success");
        }
        else {
            $(".sendmemail").addClass("disabled");
            $(".sendmemail").removeClass("btn-success");
        }
    }
    
    $('.sendmemail').click(function (e) {
        e.preventDefault();
        submitEmail();
    });
    
    function submitEmail() {
        var contactform = $("#sendmemail").serialize();
        
        if (nameValid && emailValid && phoneValid && messageValid) {
             $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: contactform,
                success: function() {
                    $("#successmessage").html("Thanks for the message! I'll get back with you as soon as I can.");
                    $("#successalert").slideDown();
                    $("#name, #email, #phone, #message").removeClass("danger-errors");
                    $("#name, #email, #phone, #message").val('');
                    $("#name, #email, #phone, #message").attr("placeholder", "");
                    $(".sendmemail").addClass("disabled");
                },
                error: function() {
                    $("#successmessage").html("Something went wrong. Please try again.");
                    $("#successalert").slideDown();
                }
            });
        }
    }
</script>

<?php include( 'footer.php'); ?>