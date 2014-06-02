        <?php require('header.php'); ?>

        <div class="container nat-about">
            
            <div class="row ">
                <div class="col-sm-1 placer">&nbsp;</div>
                <div class="col-sm-7">

                    <div class="about-tabs">
                        <div class="row">
                            <div class="col-sm-3 about-label">
                                <strong>random facts</strong>
                            </div>
                            <div class="col-sm-9 about-content">
                                <span id="0">student at ucm, studying cis.</span>&nbsp;<br />
                                <span id="2">enjoy creating great websites.</span>&nbsp;<br />
                                <span id="3">currently in warrensburg, mo.</span>&nbsp;<br />
                                <span id="6">obsessed with web.</span>&nbsp;<br />
                                <span id="7">lover of coca-cola.</span>&nbsp;<br />
                                <span id="8">happy boyfriend of 3 years.</span>&nbsp;<br />
                                <span id="9">chipotle addict.</span>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3 about-label">
                                <strong>i'm great with</strong>
                            </div>
                            <div class="col-sm-9 about-content">
                                <span id="10">html5.</span>&nbsp;<br />
                                <span id="11">css3.</span>&nbsp;<br />
                                <span id="12">php.</span>&nbsp;<br />
                                <span id="13">java, jsp, servlets.</span>&nbsp;<br />
                                <span id="14">javascript.</span>&nbsp;<br />
                                <span id="15">jquery, jquery ui, & jquery mobile.</span>&nbsp;<br />
                                <span id="16">sass.</span>&nbsp;<br />
                                <span id="17">terminal.</span>&nbsp;<br />
                                <span id="18">grunt.</span>&nbsp;<br />
                                <span id="19">apache.</span>&nbsp;<br />
                                <span id="20">git.</span>&nbsp;<br />
                                <span id="21">wordpress.</span>&nbsp;<br />
                                <span id="22">mysql & sql.</span>&nbsp;<br />
                                <span id="23">mobile & responsive design.</span>&nbsp;<br />
                                <span id="24">subversion.</span>&nbsp;<br />
                                <span id="25">creative suite.</span>&nbsp;<br />
                                <span id="27">eclipse.</span>&nbsp;<br />
                                <span id="28">bootstrap.</span><br />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3 about-label">
                                <strong>interested in</strong>
                            </div>
                            <div class="col-sm-9 about-content">
                                <span id="31">kansas city sports.</span>&nbsp;<br />
                                <span id="32">new technology.</span>&nbsp;<br />
                                <span id="33">twitter.</span>&nbsp;<br />
                                <span id="34">good music.</span><br />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3 about-label">
                                <strong>currently rocking</strong>
                            </div>
                            <div class="col-sm-9 about-content">
                                <span id="35">samsung galaxy note 3.</span>&nbsp;<br />
                                <span id="36">macbook pro with retina display.</span>&nbsp;<br />
                                <span id="37">windows 8 desktop.</span>&nbsp;<br />
                                <span id="38">ipad mini.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" data-spy="affix" data-offset-top="100">
                    <center>
                        <div class="littlenathan img-responsive"></div>
                        <br />
                        <a href="contact.php" class="btn btn-default">
                            Get in touch &nbsp;
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                    </center>
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

        <script>
        $(".about").addClass("active");

        var little = $(".littlenathan");

        $(".about-content span").on('mouseenter',function(){
            //little.stop().delay(5000);
            $(".littlenathan").css("background-image", "url(img/about/" + $(this).attr('id') + ".png)");
        });
        $(".about-content span").on('mouseleave',function(){
            //little.stop();
            //$(".littlenathan").css("background-image", "url(img/itslittlenathan.png)");
        });

        $.fn.preload = function() {
            this.each(function() {
                $('<img/>')[0].src = this;
            });
        };

        $([
            'img/about/0.png',
            'img/about/2.png',
            'img/about/3.png',
            'img/about/6.png',
            'img/about/7.png',
            'img/about/8.png',
            'img/about/9.png',
            'img/about/10.png',
            'img/about/11.png',
            'img/about/12.png',
            'img/about/13.png',
            'img/about/14.png',
            'img/about/15.png',
            'img/about/16.png',
            'img/about/17.png',
            'img/about/18.png',
            'img/about/19.png',
            'img/about/20.png',
            'img/about/21.png',
            'img/about/22.png',
            'img/about/23.png',
            'img/about/24.png',
            'img/about/25.png',
            'img/about/27.png',
            'img/about/28.png',
            'img/about/31.png',
            'img/about/32.png',
            'img/about/33.png',
            'img/about/34.png',
            'img/about/35.png',
            'img/about/36.png',
            'img/about/37.png',
            'img/about/38.png',
        ]).preload();
        </script>
        </script>
    
 <?php
 include('footer.php');
 ?>




