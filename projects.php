<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
            var open = false;
            var data = {
                "pieces": [
                    {// City of Warrensburg 
                        "id": 0,
                        "title": "The City of Warrensburg Website",
                        "description": "<p>I had the opportunity to re-build my hometown's city website, so I made the most of the opportunity. I built the website alongside the System Administrator using Wordpress CMS, MySQL, PHP and jQuery.</p>",
                        "link": "http://www.warrensburg-mo.com",
                        "bg": "#471c6c",
                        "color": "white"
                    },
                    {
                        "id": 1,
                        "title": "Tickets Application",
                        "description": "This was a little project for UCM Collegiate DECA.",
                        "link": "http://www.nathanfrancy.com/decatickets",
                        "bg": "black",
                        "color": "white"
                    },
                    {
                        "id": 2,
                        "title": "Hoorfar Law Website",
                        "description": "This was a little project for Camron Hoorfars Law Business in Lee's Summit, MO.",
                        "link": "http://www.hoorfarlaw.com",
                        "bg": "#f0ad4e",
                        "color": "white"
                    },
                    {
                        "id": 3,
                        "title": "UCM Bookstore Website",
                        "description": "This is a bookstore project. Duh",
                        "link": "http://www.ucmbookstore.com",
                        "bg": "#ed1c24",
                        "color": "white"
                    },
                    {
                        "id": 4,
                        "title": "UCM Collegiate DECA Website",
                        "description": "This is a cool website, I guess.",
                        "link": "http://www.ucmdeca.org",
                        "bg": "#00539b",
                        "color": "white"
                    }
                ]
            };

            $(document).ready(function() {
                $(".feature-click").click(function() {
                    var theId = $(this).attr('id');
                    $(".feature-title").text(data.pieces[theId].title);
                    $(".feature-desc").html(data.pieces[theId].description);
                    $(".feature-preview").attr('src', "img/features/preview/" + data.pieces[theId].id + ".png");
                    $(".feature-linkage").attr('href', data.pieces[theId].link);
                    $(".panel").css("background-color", data.pieces[theId].bg);
                    $(".panel").css("color", data.pieces[theId].color);
                });
            });

            $.fn.preload = function() {
                this.each(function() {
                    $('<img/>')[0].src = this;
                });
            };

            $([
                'img/features/preview/0.png',
                'img/features/preview/2.png',
                'img/features/preview/3.png',
                'img/features/preview/4.png'
            ]).preload();
        </script>
    </head>
    <body>

        <div class="nat-projects container-fluid push">

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2 class="feature-title"></h2>
                            <div class="feature-desc"></div>
                            <img src="" class="feature-preview" />
                            <br /><br />
                            <a href="#" class="btn btn-default feature-linkage">
                                <span class="glyphicon glyphicon-new-window"></span> Visit this site
                            </a>
                        </div>
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
                    <div class="feature-box feature-box-1 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="1">
                        &nbsp;
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature-box feature-box-2 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="2">
                        &nbsp;
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature-box feature-box-3 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="3">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="feature-box feature-box-4 img-responsive feature-click" data-toggle="modal" data-target="#myModal" id="4">
                        &nbsp;
                    </div>
                </div>
            </div>

        </div>

    </body>

</html>