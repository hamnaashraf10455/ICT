<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin view</title>
    <link rel="stylesheet" href="adminv.css" type="text/css">
</head>
<body>



<div id="main"><a href="assigment%203.html"><img class="ilog" src="logo.png"></a>

    <div id="menu"><strong>
            <ul>

                <li><a href="page2.html">ADMIN</a>

                    <ul>
                        <li><a href="admini.html">INSERT</a></li>
                        <li><a href="adminu.html">UPDATE</a></li>
                        <li><a href="adminv.php">VIEW</a>
                            <ul>
                                <li><a href="adminv.php">Admin</a></li>
                                <li><a href="user view a.php">User</a></li>
                                <li><a href="dv developer.php">developer</a></li></ul>
                        </li>
                        <li><a href="admind.html">DELETE</a></li>

                    </ul>

                </li>

                <li>DEVELOPER</a>
                    <ul>
                        <li><a href="di.html">INSERT</a></li>
                        <li><a href="du.html">UPDATE</a></li>
                        <li>VIEW
                            <ul>
                                <li><a href="uv.php">User</a></li>
                                <li><a href="developer view.php">Developer</a></li>
                                <li><a href="dv user.php">Website</a></li></ul>
                        </li>
                        <li><a href="dd.html">DELETE</a></li>

                    </ul>
                </li>

                <li>USER</a>
                    <ul>
                        <li><a href="ui.html">INSERT</a></li>
                        <li><a href="user upd.html">UPDATE</a></li>

                        <li>VIEW
                            <ul>
                                <li><a href="user v.php">User</a></li>
                                <li><a href="dv user.php">Website</a></li></ul>
                        </li>
                        <li><a href="ud.html">DELETE</a></li>


                    </ul>
                </li>
                <li><a href="page1.html">MORE</a></li>

            </ul></strong>
    </div>

    <div id="fasla"></div>


    <div class="search-conta">

        <input class="search-te" type="text" placeholder="Type..." >
        <button class="bton" type="submit">Search</button>


    </div>

<div class="faptt"><img class="fap" src="adminv.jpg">

    <div class="centro">
        <img class="pnng" src="aa.png"><h1 class="clubi">Admin View</h1><br><br>

        <table class="aba" border="2" border-color="white"  cellpadding="15xp" cellspacing="19xp"  style="border-collapse: collapse" >
            <tr>
                <th>Serial No.</th>
                <th>Month</th>
                <th>Year</th>
                <th>Majority Users Region</th>
                <th>Frequent User Request</th>
                <th>Director Name</th>
                <th>Content Genre</th>
                <th>Content Type</th>
                <th> Website Rating</th>
                <th> Website Traffic</th>

            </tr>

            <?php
            include "ui c.php";

            $query = "select serialn,mmonth,yyear,region,urequest,dname,vtype,ctype,wrating,wtraffic from adminn";
            $result = mysqli_query($connection,$query);

            while($record = mysqli_fetch_assoc($result)){?>


                <tr>
                    <td><?php  echo $record['serialn']; ?></td>
                    <td><?php  echo $record['mmonth']; ?></td>
                    <td><?php  echo $record['yyear']; ?></td>
                    <td><?php  echo $record['region']; ?></td>
                    <td><?php  echo $record['urequest']; ?></td>
                    <td><?php  echo $record['dname']; ?></td>
                    <td><?php  echo $record['vtype']; ?></td>
                    <td><?php  echo $record['ctype']; ?></td>
                    <td><?php  echo $record['wrating']; ?></td>
                    <td><?php  echo $record['wtraffic']; ?></td>
                </tr>
                <?php
            }
            ?>


        </table>
    </div>
</div>




<div class="thir1">
    <hr>
    <input class="search-text" type="text" placeholder="Type..." >
    <button class="bton" type="submit">Search</button>

</div>

<div >
    <div class="last"><img class="blog" src="logo.png"> </div>
</div>

<div class="space">
    <h4><a href="h" class="hov">About Disney  &nbsp</a> <a href="h" class="hov">&nbsp Disney Help  </a>
        <a href="h" class="hov">&nbsp &nbsp Careers  </a> <a href="h" class="hov">&nbsp &nbsp Contact Us  </a>
        <a href="h" class="hov">&nbsp &nbsp Advertise With Us  </a>
        <h4>

</div>


<div class="space-sec">
    <h4><a href="h" class="hov">Terms of Use  &nbsp</a> <a href="h" class="hov">&nbsp Privacy Policy  </a>
        <a href="h" class="hov">&nbsp &nbsp Additional Content</a><a href="h" class="hov">&nbsp &nbsp Interest-Based Ads</a>
        <a href="h" class="hov">&nbsp &nbsp  Do Not Sell My Info </a>
        <a href="h" class="hov">&nbsp &nbsp  Children's Online Privacy Policy </a>
        <h4>

</div>

<div class="laasst"><h5>© Disney, All Rights Reserved<h5></div>





</body>
</html>