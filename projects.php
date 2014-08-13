        <?php require('header.php'); ?>

        <div class="nat-projects container-fluid">
			<h1 style="text-align: center;">projects <small>my work</small></h1>
            
            <div id="overlay"></div>
            
            <div id="project-pop">
                <div class="projectDetails">
                    <h2 class="feature-title"></h2>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="" alt="" class="feature-preview-1">
                            </div>
                            <div class="item">
                                <img src="" alt="" class="feature-preview-2">
                            </div>
                            <div class="item">
                                <img src="" alt="" class="feature-preview-3">
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <br />
                    <button class="btn btn-default btn-sm feature-desc-button">
                        <span class="glyphicon glyphicon-plus-sign"></span> Read
                    </button>
                    <a href="#" class="btn btn-default btn-sm feature-linkage" target="_blank">
                        <span class="glyphicon glyphicon-new-window"></span> Visit
                    </a>
                    <button class="btn btn-default btn-sm feature-close pull-right">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                    <br />
                    <br />
                    <div class="feature-desc">
                        <p class="feature-desc-body"></p>
                        <div class="feature-skills"></div>
                    </div>
                </div>
                    
            </div>
            
            <div class="box"></div>
            
        </div>
            
            <div class="interested">
                <h2>Interested in doing a project with me?</h2>
                <a href="contact.php" class="btn btn-default">
                    Get in touch &nbsp;
                    <span class="glyphicon glyphicon-arrow-right"></span>
                </a>
            </div>

        <script>
        var projectData;

        $(document).ready(function() {
            $(".projects").addClass('active');

            $.getJSON('js/projects.json', function(data) {
                // put the projects in projectData
                projectData = data;
        
                // build the project html from json object
                var projectHTML = "";
                for (index = 0; index < projectData.length; ++index) {
                    projectHTML += getPieceTemplate(projectData[index].id);            
                }
                
                // place the project html into the view
                $(".box").html(projectHTML);
                
                // formatting, placing .row around every four .col-sm-3 columns per bootstrap requirements
                var divs = $(".box > .col-sm-3");
                for(var i = 0; i < divs.length; i+=4) {
                    divs.slice(i, i+4).wrapAll("<div class='row'></div>");
                }
                $(".row").prepend('<div class="projectInfo"></div>');
            });
            
            $("#overlay").click(function() {
                $(this).fadeOut();
                $("#project-pop").slideUp();
            });

            // update the dom in .box when .feature-click is clicked, because manipulating it above
            // handler will update the modal window with the correct values (title, images, description, link, etc.)
            $(".box").on('click', '.feature-click', function() {
                $("#project-pop").slideDown();
                $("#overlay").show();
                var theId = $(this).attr('id');
                $('.carousel').carousel(0);
                $(".feature-title").text(projectData[theId].title);
                $(".feature-desc-body").html(projectData[theId].description);
                $(".feature-preview-1").attr('src', "img/features/preview/1/" + projectData[theId].id + ".png");
                $(".feature-preview-2").attr('src', "img/features/preview/2/" + projectData[theId].id + ".png");
                $(".feature-preview-3").attr('src', "img/features/preview/3/" + projectData[theId].id + ".png");
                $(".feature-linkage").attr('href', projectData[theId].link);
                $("#project-pop").css("background-color", projectData[theId].bgColor);
                $(".feature-desc, .feature-title").css("color", projectData[theId].color);
                $(".feature-desc").hide();
                
                // build skillstring and place into feature box
                var skillString = "Related Skills: &nbsp;";
                for (index = 0; index < projectData[theId].skills.length; ++index) {
                    skillString += '&nbsp;<span class="label label-default" style="display: inline-block;">' + projectData[theId].skills[index].name + '</span>';            
                }
                $(".feature-skills").html(skillString);
            });
            
            // show and hide the description
            $(".feature-desc-button").click(function() {
                $(".feature-desc").fadeToggle();
            });
            
            $(".feature-close").click(function() {
                $("#overlay").fadeOut();
                $("#project-pop").slideUp();
            });

            // template used for generating HTML for each project
            function getPieceTemplate(id) {
                return '<div class="col-sm-3"><div class="feature-box feature-box-'+ id +' img-responsive feature-click" id="'+ id +'">&nbsp;</div></div>';
            }
            
            // preload images in each
            $.fn.preload = function() {
                this.each(function() {
                    $('<img/>')[0].src = this;
                });
            };

            $([
                'img/features/1.png',
                'img/features/2.png',
                'img/features/3.png',
                'img/features/4.png',
                'img/features/5.png',
                'img/features/6.png',
                'img/features/7.png',
                'img/features/8.png',
                'img/features/9.png',
                'img/features/10.png'
            ]).preload();
        });
        </script>

<?php
include('footer.php');
?>