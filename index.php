<?php
    require_once("header.php");
?>
<?php
    $birthDate = date("d.m.Y",mktime(0, 0, 0, 9, 12, 1975));
    $currentDate = date("d.m.Y");
    $contentArray = [
        "fio" => "Шайдулин Илья Александрович",
        "info1" => "Приветствую.<br>",
        "info2" => "Работаю в сфере ИТ более 25 лет. <br>" .
                "Направления - системное администрирование, программирование. <br>" .
                "В данный момент работаю программистом 1С. <br>" .
                "Люблю биллиард и музыку (особенно тяжелую). <br>",
        "info3" => "Здесь, возможно, что-то появится. Но позже.",
        "sign1" => "HTML",
        "phototext1" => "Собака",
        "phototext2" => "Машина",
        "phototext3" => "Тигр",
        "phototext4" => "Косатка",
    ];

    function changecolor($string) {
        $array = explode(' ', $string);
        $i=0;
        foreach ($array as $value) {
            if($i%2==0){
                $stringOut = $stringOut."<span class='red'>".$array[$i]."</span> ";
                } else{
                $stringOut = $stringOut."<span class='blue'>".$array[$i]."</span> ";
            }
            $i++;
           }
        return $stringOut; 
    }
 
    function countword($contentArray) {
        $countWord = 0;
        foreach($contentArray as $string) {
            $array = explode(' ', $string);
            $count = 0;
            foreach ($array as $key => $value) {
                if ($key == 'phototext1' or $key == 'phototext2' or $key == 'phototext3' or $key == 'phototext4') {
                    $count = $count + 4;
                } else{
                    $count++;
                }
            }
            $countWord += $count;
        }
        return $countWord;
    }

    function countvowel($contentArray) {
        $countVowelLetters = 0;
        foreach($contentArray as $key => $value) {
            $count = 0;
            if ($key == 'phototext1' or $key == 'phototext2' or $key == 'phototext3' or $key == 'phototext4') {
                $count = preg_match_all('/[ауеэоыяиюё]/i', $value) * 4;
            } else{
                $count = preg_match_all('/[ауеэоыяиюё]/i', $value);
            }
            $countVowelLetters += $count;
        }
        return $countVowelLetters;
    }

    function differencedate($birthDate, $currentDate){
        $diffDate = strtotime($currentDate) - strtotime($birthDate);
        $result = round($diffDate / (60 * 60 * 24));
      return  $result;       
    }

?>
    <main>
        <div class="main">
            <div class="main-photo photo_img">
                <img src="images/photo1.png" alt="">
            </div>
            <div class="main-info-fio">
                <h2><?php echo $contentArray["fio"] ?></h2>
            </div>
            <div class="main-info-text-left">
                <p>
                    <strong class = "info1"><?php echo $contentArray["info1"] ?></strong>
                    <?php echo $contentArray["info2"] ?>  
                </p>
            </div>
            <div class="main-info-text-right">
                <p> <?php echo changecolor($contentArray["info3"]); ?> </p>
            </div>
        </div>
        <h3>FLEX-секция</h3>
        <div class="section-photo">
            <section class="container-photo">
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo1.jpg" alt="dog">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext1"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo2.jpg" alt="car">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext2"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo3.jpg" alt="tiger">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext3"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo4.jpg" alt="killerwhale">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext4"] ?></p>
                    </div>
                </div>
            </section>
            <section class="container-photo">
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo1.jpg" alt="dog">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext1"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo2.jpg" alt="car">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext2"] ?></p>
                    </div>
                </div>
            </section>
            <section class="container-photo">
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo3.jpg" alt="tiger">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext3"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo4.jpg" alt="killerwhale">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext4"] ?></p>
                    </div>
                </div>
            </section>
        </div>
        <h3>GRID-секция</h3>
        <div class="grid-section-photo">
            <section class="grid-container-photo">
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo1.jpg" alt="dog">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext1"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo2.jpg" alt="car">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext2"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo3.jpg" alt="tiger">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext3"] ?></p>
                    </div>
                </div>
                <div class="photo-div">
                    <div class="photo photo_img">
                        <img src="images/photo4.jpg" alt="killerwhale">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext4"] ?></p>
                    </div>
                </div>
                <div class="photo-div-span">
                    <div class="photo photo_img">
                        <img src="images/photo1.jpg" alt="dog">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext1"] ?>Собака</p>
                    </div>
                </div>
                <div class="photo-div-span">
                    <div class="photo photo_img">
                        <img src="images/photo2.jpg" alt="car">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext2"] ?></p>
                    </div>
                </div>
                <div class="photo-div-span">
                    <div class="photo photo_img">
                        <img src="images/photo3.jpg" alt="tiger">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext3"] ?></p>
                    </div>
                </div>
                <div class="photo-div-span">
                    <div class="photo photo_img">
                        <img src="images/photo4.jpg" alt="killerwhale">
                    </div>
                    <div class="photo-text">
                        <p><?php echo $contentArray["phototext4"] ?></p>
                    </div>
                </div>
            </section>
        </div>
        <br>
    </main>
    </body>
</html>
<?php
    include_once("footer.php");
