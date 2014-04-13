	<div id="nat-footer">
		<div class="social-box">
            <div class="social social-f"><a href="http://www.facebook.com/nathanfrancy">f</a></div>
            <div class="social social-t"><a href="https://twitter.com/nathanfrancy">t</a></div>
            <div class="social social-l"><a href="http://www.linkedin.com/pub/nathan-francy/50/547/862/">l</a></div>
            <div class="clear"></div>
        </div>
	</div>

    </body>

<script>
var circle = $(".circle span");

$(".projects").on('mouseenter',function(){
  circle.stop();
  $(".circle span").addClass("glyphicon-th");
  $(".circle span").fadeIn();
});
$(".projects").on('mouseleave',function(){
	circle.stop();
  $(".circle span").removeClass("glyphicon-th");
  $(".circle span").fadeOut();
});

$(".about").on('mouseenter',function(){
	circle.stop();
  $(".circle span").addClass("glyphicon-info-sign");
  $(".circle span").fadeIn();
});
$(".about").on('mouseleave',function(){
	circle.stop();
  $(".circle span").removeClass("glyphicon-info-sign");
  $(".circle span").fadeOut();
});

$(".contact").on('mouseenter',function(){
	circle.stop();
  $(".circle span").addClass("glyphicon-earphone");
  $(".circle span").fadeIn();
});
$(".contact").on('mouseleave',function(){
	circle.stop();
  $(".circle span").removeClass("glyphicon-earphone");
  $(".circle span").fadeOut();
});

$(".clippings").on('mouseenter',function(){
	circle.stop();
  $(".circle span").addClass("glyphicon-bookmark");
  $(".circle span").fadeIn();
});
$(".clippings").on('mouseleave',function(){
	
  $(".circle span").removeClass("glyphicon-bookmark");
  $(".circle span").fadeOut();
});
</script>

</html>