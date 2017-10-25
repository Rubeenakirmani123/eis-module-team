<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="EIS Admin Panel">
        <meta name="author" content="EIS Developers - EAO IT SERVICES PVT LTD">
        <link rel="icon" href="../../favicon.ico">

        <title>EIS Admin Panel</title>

        <link href="deps/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="deps/bootstrap4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="deps/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
        <link href="css/main-style.css" rel="stylesheet" type="text/css"/>
        <link href="css/eis-ui.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!--
            Include Scripts
        -->
        <script src="deps/jquery/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="deps/bootstrap4.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">EIS Panel</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <div class="eis-menu-item" id="eis-top-menuitem"> 
                                <div class="eis-menu-icon">
                                    <span class="fa fa-group"></span>
                                </div>
                                <div class="eis-menu-label">
                                    <a id="idListMembers" class="nav-link" href="#">&nbsp;  List Members</a>
                                    <label> Show all Members</label>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="eis-menu-item"> 
                                <div class="eis-menu-icon">
                                    <span class="fa fa-plus"></span>
                                </div>
                                <div class="eis-menu-label">
                                    <a id="idAddMember" class="nav-link" href="#">&nbsp;  Add Members</a>
                                    <label> Add New Members</label>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="eis-menu-item"> 
                                <div class="eis-menu-icon">
                                    <span class="fa fa-pencil"></span>
                                </div>
                                <div class="eis-menu-label">
                                    <a id="idUpdateMember" class="nav-link" href="#">&nbsp; Update Members</a>
                                    <label> Update Existing Members</label>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="eis-menu-item"> 
                                <div class="eis-menu-icon">
                                    <span class="fa fa-pencil"></span>
                                </div>
                                <div class="eis-menu-label">
                                    <a  id="idDelMember" class="nav-link" href="#">&nbsp;  Delete Members</a>
                                    <label> Delete Existing Members</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </body>
</html>


