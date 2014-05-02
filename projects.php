        <?php require('header.php'); ?>

        <div class="nat-projects container-fluid">

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h2 class="modal-title feature-title" id="myModalLabel">Modal title</h2>
                        </div>
                        <div class="modal-body">

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

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                            <br /><br />
                            <button class="btn btn-default feature-desc-button"><span class="glyphicon glyphicon-plus-sign"></span> Read about this project</button>
                            <a href="#" class="btn btn-default feature-linkage" target="_blank">
                                <span class="glyphicon glyphicon-new-window"></span> Visit this site
                            </a>
                            <br />
                            <br />
                            <div class="feature-desc"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-6 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="6">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-3 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="3">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-2 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="2">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-1 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="1">
                            &nbsp;
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-0 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="0">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-4 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="4">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-5 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="5">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-8 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="8">
                            &nbsp;
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-7 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="7">
                            &nbsp;
                        </div>
                    </div>

                    <!--
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-4 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="4">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-5 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="5">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="feature-box feature-box-7 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="7">
                            &nbsp;
                        </div>
                    </div>

                    -->
                </div>

            </div>

        </div>

        <script>
        $(".projects").addClass('active');
        // get the projects and assign to variable 'projects'
        var projects;
        $.getJSON('js/projects.json', function(data) {
            projects = data;
        });

        $(document).ready(function() {
            $(".feature-click").click(function() {
                var theId = $(this).attr('id');
                $('.carousel').carousel(0);
                $(".feature-title").text(projects.pieces[theId].title);
                $(".feature-desc").html(projects.pieces[theId].description);
                $(".feature-preview-1").attr('src', "img/features/preview/1/" + projects.pieces[theId].id + ".png");
                $(".feature-preview-2").attr('src', "img/features/preview/2/" + projects.pieces[theId].id + ".png");
                $(".feature-preview-3").attr('src', "img/features/preview/3/" + projects.pieces[theId].id + ".png");
                $(".feature-linkage").attr('href', projects.pieces[theId].link);
                $(".panel").css("background-color", projects.pieces[theId].bg);
                $(".panel").css("color", projects.pieces[theId].color);
                $(".feature-desc").hide();
            });
            $(".feature-desc-button").click(function() {
                $(".feature-desc").toggle();
            });
        });

        $.fn.preload = function() {
            this.each(function() {
                $('<img/>')[0].src = this;
            });
        };

        $([
            'img/features/0.png',
            'img/features/1.png',
            'img/features/2.png',
            'img/features/3.png',
            'img/features/4.png',
            'img/features/5.png',
            'img/features/6.png'
        ]).preload();
        </script>

<?php
include('footer.php');
?>