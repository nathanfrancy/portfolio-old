<?php require( 'header.php'); ?>

<div class="container">
	<h1 style="text-align: center;">one-liners <small>my idea of a blog</small></h1>
	
	<div id="oneliners-data"></div>
	
</div>

<script>
$(".oneliners").addClass('active');
var onelinerdata = null;
	
$.getJSON('js/oneliners.json', function(data) {
	onelinerdata = data;
	
	var linertext = "";
	var code = "";
	
	for (var i = onelinerdata.length - 1; i >= 0; i--) {
		var tags = onelinerdata[i].tags;
		
		if (onelinerdata[i].html === 'true') {
			code = replaceSpecialCharsHTML(onelinerdata[i].code);
		}
		else {
			code = onelinerdata[i].code;
		}
		
		var tagtext = "";
		for (var j = 0; j < tags.length; j++) {
			tagtext += '<small><span class="label label-default" style="display: inline-block;">'+ tags[j] +'</span>&nbsp;</small>';
		}
		
		linertext += "<div class='row code-post' postid='" + onelinerdata[i].id + "'><div class='col-sm-3'><small class='pull-right'><p class='lead'>" + onelinerdata[i].date + "</p></small></div><div class='col-sm-9'><h3>" + onelinerdata[i].title + "</h3><code>" + code + "</code><div class='code-post-body'><small>"+ onelinerdata[i].body +"</small>" + tagtext + "</div></div></div>";
	}
	
	$(linertext)
	.hide()
	.appendTo("#oneliners-data")
	.fadeIn();
});
	
function replaceSpecialCharsHTML(string) {
	var str = string;
	str = str.replaceAll("<", "&lt;");
	str = str.replaceAll(">", "&gt;");
	return str;
}
	
String.prototype.replaceAll = function(str1, str2, ignore) {
	return this.replace(new RegExp(str1.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&])/g,"\\$&"),(ignore?"gi":"g")),(typeof(str2)=="string")?str2.replace(/\$/g,"$$$$"):str2);
}
</script>

<?php include( 'footer.php'); ?>