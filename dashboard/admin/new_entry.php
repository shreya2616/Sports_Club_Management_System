<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>SPORTS CLUB | New User</title>
    <link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" type="text/css" rel="stylesheet">
    <link href="dashMain.css" type="text/css">
    <style>
        .page-container .sidebar-menu #main-menu li#regis>a {
            background-color: rgb(80, 152, 176);
            color: #ffffff;
        }

        #boxx {
            width: 220px;
        }
    </style>

</head>

<body class="page-body  page-fade" onload="collapseSidebar()">

    <div class="page-container sidebar-collapsed" id="navbarcollapse">

        <div class="sidebar-menu">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="main.php">
                        <img src="logo1.png" alt="" width="192" height="80" />
                    </a>
                </div>

                <!-- logo collapse icon -->
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


            <h3>New Registration</h3>
            <hr />
            <div class="a1-container a1-small a1-padding-32" style="margin-top:1px; margin-bottom:1px;">
                <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
                    <div class="a1-container a1-dark-gray a1-center">
                        <h6>NEW ENTRY</h6>
                    </div>
                    <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
                        <table width="100%" border="0" align="center">
                            <tr>
                                <td height="35">
                                    <table width="100%" border="0" align="center">
                                        <tr>
                                            <td height="30">MEMBER ID:</td>
                                            <td height="35">
                                                <?php
                                                function getRandomWord($len = 6)
                                                {
                                                    $word = array_merge(range('A', 'Z'));
                                                    shuffle($word);
                                                    return substr(implode($word), 0, $len);
                                                }

                                                ?>
                                                <input type="text" name="m_id" id="boxx" readonly
                                                    value="<?php echo getRandomWord(); ?>">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td height="30">NAME:</td>
                                            <td height="30"><input name="u_name" id="boxx" required /></td>
                                        </tr>
                                        <tr>
                                            <td height="30">STREET NAME:</td>
                                            <td height="30"><input name="street_name" id="boxx" required /></td>
                                        </tr>
                                        <tr>
                                            <td height="30">CITY:</td>
                                            <td height="30"><input <input type="text" name="city" id="boxx" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="30">ZIPCODE:</td>
                                            <td height="30"><input type="number" name="zipcode" id="boxx" maxlength="6"
                                                    required /></td>
                                        </tr>
                                        <tr>
                                            <td height="30">STATE:</td>
                                            <td height="30"><input type="text" name="state" id="boxx" required/
                                                    size="30"></td>
                                        </tr>
                                        <tr>
                                            <td height="30">GENDER:</td>
                                            <td height="30"><select name="gender" id="boxx" required>

                                                    <option value="">--Please Select--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td height="30">DATE OF BIRTH:</td>
                                            <td height="30"><input type="date" name="dob" id="boxx" required/ size="30"
                                                    max="2004-12-31">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="30">PHONE NO:</td>
                                            <td height="30"><input type="tel" name="phone" id="boxx" maxlength="10"
                                                    required/ size="30"></td>
                                        </tr>
                                        <tr>
                                            <td height="30">EMAIL ID:</td>
                                            <td height="30"><input type="email" name="email" id="boxx" required/
                                                    size="30"></td>
                                        </tr>
                                        <tr>
                                            <td height="30">JOINING DATE:</td>
                                            <td height="30"><input type="date" name="jdate" id="boxx" required
                                                    size="30"></td>
                                        </tr>
                                        <tr>
                                            <td height="30">SPORTS PLAN:</td>
                                            <td height="30"><select name="plan" id="boxx" required
                                                    onchange="myplandetail(this.value)">
                                                    <option value="">--Please Select--</option>
                                                    <?php
                                                    $query = "select * from plan where active='yes'";
                                                    $result = mysqli_query($con, $query);
                                                    if (mysqli_affected_rows($con) != 0) {
                                                        while ($row = mysqli_fetch_row($result)) {
                                                            echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                                                        }
                                                    }

                                                    ?>

                                                </select></td>
                                        </tr>

                                        <tbody id="plandetls">

                                        </tbody>

                                        <tr>
                                        <tr>
                                            <td height="30">&nbsp;</td>
                                            <td height="30"><input class="a1-btn a1-blue" type="submit" name="submit"
                                                    id="submit" value="Register">
                                                <input class="a1-btn a1-blue" type="reset" name="reset" id="reset"
                                                    value="Reset">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <script>
                function myplandetail(str) {

                    if (str == "") {
                        document.getElementById("plandetls").innerHTML = "";
                        return;
                    } else {
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        }
                        xmlhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("plandetls").innerHTML = this.responseText;

                            }
                        };

                        xmlhttp.open("GET", "plandetail.php?q=" + str, true);
                        xmlhttp.send();
                    }

                }
            </script>


            <footer><img src="bk.png" width="100%" height="100%">
            </footer>
        </div>

</body>

</html>