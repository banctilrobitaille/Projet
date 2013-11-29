
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="calendar/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        function initMenu() {
            var block = $(".day");
            block.addClass("clickable");
            block.hover(function(){window.status = $(this)}, function(){window.status = ""});

            $('.open1').hide();
            block.click(
                function() {
                    $(this).parents('div:eq(0)').find('.open1').slideToggle('fast');
                }
            );}
        $(document).ready(function() {initMenu();});
    </script>
</head>

<body>
<div id="wrap">
    <div class="container-fluid">
        <?php
        include("Header.html");
        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">
                <div class="span9">
                    <center><h2>Novembre 2013</h2></center>
                    <div id="calendar">
                        <div id="calcontainer">
                            <div id="daysweek">
                                <div class="dayweek"><p>Lundi</p></div>
                                <div class="dayweek"><p>Mardi</p></div>
                                <div class="dayweek"><p>Mercredi</p></div>
                                <div class="dayweek"><p>Jeudi</p></div>
                                <div class="dayweek"><p>Vendredi</p></div>
                                <div class="dayweek"><p>Samedi</p></div>
                                <div class="dayweek brn"><p>Dimanche</p></div>
                            </div>
                <div id="daysmonth">
                <!---------------------------------------- week 1 ---------------------------------------->
                <div class="week">
                    <div class="day">
                        <div class="daybar"><p>28</p></div>
                        <div class="dots">
                            <ul>

                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>29</p></div>
                        <div class="dots">
                            <ul>

                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>30</p></div>
                        <div class="dots">
                            <ul>

                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>31</p></div>
                        <div class="dots">
                            <ul>

                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>1</p></div>
                        <div class="dots">
                            <ul>

                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>2</p></div>
                        <div class="dots">
                                <ul>
                                    <li class="blue"</li>
                                </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                                <ul>
                                    <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Samedi</a></li>
                                </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day brn">
                        <div class="daybar"><p>3</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                </div>
                <!---------------------------------------- week 2 ---------------------------------------->
                <div class="week">
                    <div class="day">
                        <div class="daybar"><p>4</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>5</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>6</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Mercredi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>7</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>8</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>9</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Samedi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day brn">
                        <div class="daybar"><p>10</p></div>
                        <div class="dots">
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                        </div>
                        <!-- slide closed -->
                    </div>
                </div>
                <!---------------------------------------- week 3 ---------------------------------------->
                <div class="week">
                    <div class="day">
                        <div class="daybar"><p>11</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>12</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>13</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Mercredi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>14</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>15</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>16</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Samedi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day brn">
                        <div class="daybar"><p>17</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                </div>
                <!---------------------------------------- week 4 ---------------------------------------->
                <div class="week">
                    <div class="day">
                        <div class="daybar"><p>18</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>19</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>20</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Mercredi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>21</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>22</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>23</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Samedi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day brn">
                        <div class="daybar"><p>24</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                </div>
                <!---------------------------------------- week 5 ---------------------------------------->
                <div class="week">
                    <div class="day">
                        <div class="daybar"><p>25</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>26</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>27</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Mercredi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>28</p></div>
                        <div class="dots">

                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>29</p></div>
                        <div class="dots">
                            <ul>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day">
                        <div class="daybar"><p>30</p></div>
                        <div class="dots">
                            <ul>
                                <li class="blue"</li>
                            </ul>
                        </div>
                        <!-- slide open -->
                        <div class="open1">
                            <ul>
                                <li class="blue l3 a18"><a style="color: #ffffff" href="Ateliers.php">18:00 Atelier du Samedi</a></li>
                            </ul>
                        </div>
                        <!-- slide closed -->
                    </div>
                    <div class="day brn">
                        <div class="daybar"><p>1</p></div>
                        <div class="dots">
                        </div>
                        <!-- slide open -->
                        <div class="open1">

                        </div>
                        <!-- slide closed -->
                    </div>
                </div>
                <!---------------------------------------- week 5 end ---------------------------------------->
                </div>
                </div>
                <div id="calcat">
                    <div class="caldot blue"></div><p>Atelier de Vélo</p>
                    <div class="caldot yellow"></div><p>Réunion</p>
                    <div class="caldot green"></div><p>Ateliers mécanique</p>
                </div>
<!--                </div>-->
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="push"></div>
</div>
<?php
include("Footer.php")
?>
</body>
</html>


