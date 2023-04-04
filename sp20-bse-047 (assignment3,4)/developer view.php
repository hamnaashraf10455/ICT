<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>view user records</title>
    <link rel="stylesheet" href="developer view.css" type="text/css">
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

</div>


<div class="faptt"><img class="fap" src="dvv.jpg">


    <div class="centro">

        <div class="asd"><img class="pnng" src="aa.png"><h1 class="clubi">developer View</h1></div>
        <form action="" method="POST">

            <input class="emain" name="email" type="text" placeholder="&nbsp Title " ><br><br>
            <input class="emain"  name="mobile" type="text" placeholder="&nbsp Serial No." ><br><br>
            <button class="btoon" type="submit" name="submit" value="submit">View Record</button>

        </form><br><br>
        <table class="aba" border="2" border-color="white"  cellpadding="15xp" cellspacing="15xp"  style="border-collapse: collapse" >
            <tr>
                <th>User Interest</th>
                <th>User Request</th>
                <th>Title</th>
                <th>Serial No.</th>
                <th>Director</th>
                <th>Release Date</th>
                <th>Budget</th>
                <th>Type</th>
                <th>Genres</th>
                <th>Language</th>
                <th>Running Time</th>
                <th>Rating</th>
                <th>Worldwide Gross</th>
            </tr>

            <?php
            include "ui c.php";
            if(isset($_POST['submit'])){
                $d = $_POST['mobile'];


                $query = "select * from developer where serial='$d'";
                $result = mysqli_query($connection,$query);

                while($record= mysqli_fetch_array($result)){?>


                    <tr>
                        <td><?php  echo $record['uinterest']; ?></td>
                        <td><?php  echo $record['urequest']; ?></td>
                        <td><?php  echo $record['title']; ?></td>
                        <td><?php  echo $record['serial']; ?></td>
                        <td><?php   echo $record['director']; ?></td>
                        <td><?php  echo $record['rdate']; ?></td>
                        <td><?php  echo $record['bud']; ?></td>
                        <td><?php  echo $record['mov']; ?></td>
                        <td><?php   echo $record['genre']; ?></td>
                        <td><?php  echo $record['lang']; ?></td>
                        <td><?php  echo $record['running']; ?></td>
                        <td><?php  echo $record['gross']; ?></td>
                        <td><?php   echo $record['rat']; ?></td>
                    </tr>
                    <?php
                }


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
<?php
