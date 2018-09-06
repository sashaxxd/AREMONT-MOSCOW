<?php

?>
<div id="articles_hlebnye">
    <div id="hlebnye">
        <div class="row">
            <div class="col-1">
                <div id="articles_Text14">
                    <span id="articles_uid0"><h1><?= 'Привет администратор!' ?></h1></span>
                </div>
            </div>
            <div class="col-2">
                <div id="articles_Text15">
                    <span id="articles_uid1"><?= 'Версия PHP ' . phpversion() ?>
                    </span>
                    <div id='clock' style="color: #B22222; font-size: 30px; font-family: 'Roboto Medium';"></div> <br>


                    <script>


                        window.setInterval(
                            function(){
                                var d = new Date();
                                document.getElementById("clock").innerHTML =     d.toLocaleTimeString();

                            }
                            , 1000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
