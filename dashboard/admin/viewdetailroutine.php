<?php
require '../../include/db_conn.php';
page_protect();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>SPORTS CLUB | Detail Routine</title>
    <link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" rel="stylesheet" type="text/css">
    <style>
        .page-container .sidebar-menu #main-menu li#routinehassubopen>a {
            background-color: rgb(80, 152, 176);
            color: #ffffff;
        }
    </style>
    <script>
        function myFunction() {
            var prt = document.getElementById("print");
            var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
            WinPrint.document.write(prt.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
            setPageHeight("297mm");
            setPageWidth("210mm");
            setHtmlZoom(100);
            //window.location.replace("index.php?query=");
        }
    </script>

</head>

<body class="page-body  page-fade" onload="collapseSidebar()">

    <div class="page-container sidebar-collapsed" id="navbarcollapse">

        <div class="sidebar-menu">

            <header class="logo-env">
                <div class="logo">
                    <a href="main.php">
                        <img src="logo1.png" alt="" width="192" height="80" />
                    </a>
                </div>
                <div class="sidebar-collapse" onclick="collapseSidebar()">
                    <a href="#"
                        class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>



            </header>
            <?php include('nav.php'); ?>
        </div>

        <div class="main-content">

            <div class="row">

                <!-- Profile Info and Notifications -->
                <div class="col-md-6 col-sm-8 clearfix">

                </div>


                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                    <ul class="list-inline links-list pull-right">

                        <li>Welcome
                            <?php echo $_SESSION['full_name']; ?>
                        </li>

                        <li>
                            <a href="logout.php">
                                Log Out <i class="entypo-logout right"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
            <h2>Routine Detail</h2>
            <hr />

            <?php
            $id = $_GET['id'];
            $sql = "Select * from sports_timetable t Where t.tid=$id";
            $res = mysqli_query($con, $sql);
            if ($res) {
                $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

            }

            ?>

            <div id=print>
                <table width="619" height="500" border="1" align="center">
                    <tr>
                        <td height="50" colspan="2">Routine Name:
                            <?php echo $row['tname'] ?>
                            &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;
                            &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            &ensp;&ensp;&ensp;&ensp;&ensp;
                        </td>
                    </tr>
                    <tr>
                        <td width="186" height="50">Day 1:</td>
                        <td width="417">
                            <?php echo $row['day1'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Day 2:</td>
                        <td>
                            <?php echo $row['day2'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Day 3:</td>
                        <td>
                            <?php echo $row['day3'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Day 4:</td>
                        <td>
                            <?php echo $row['day4'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Day 5:</td>
                        <td>
                            <?php echo $row['day5'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Day 6:</td>
                        <td>
                            <?php echo $row['day6'] ?>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- <input type="button" class="a1-btn a1-blue" value="PRINT ROUTINE" onclick="myFunction()"> -->










        </div>

</body>
<footer><img src="bk.png" width="100%" height="100%">
</footer>
<footer><img src="bk.png" width="100%" height="100%">
</footer>

</html>