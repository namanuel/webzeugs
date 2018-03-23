<nav class='navbar navbar-expand-md bg-primary navbar-dark' id="mainnav">
    <div class="container">
        <ul class="navbar-nav ml-auto">

            <?php
            /*
            $menu = array(
                "home"=>"Home",
                "bedroom"=>"Schlafzimmer",
                "living-room"=>"Wohnzimmer",
                "dining-room"=>"Esszimmer",
                "kitchen"=>"Kueche",
                "exterior"=>"Aussenbereich",
                "contakt"=>"Kontakt",
            );

            foreach ($menu as $key => $value) {
                echo "<li class='nav-item'><a class='nav-link' href='index.php?selectedMenu=$key'>$value</a></li>";
            }

            */

            $nav = array("Home", "Schlafzimmer", "Wohnzimmer", "Esszimmer", "Küche", "Außenbereich", "Kontakt", "Impressum");

            $length = count($nav);


            for($i = 0; $i < $length; $i++) {

                $selectedMenu[] = $nav[$i];


                if($selectedMenu[$i] == "Kontakt") {

                    echo "<li class='nav-item' id='".$selectedMenu[$i]."' role='presentation' onclick=''><a class='nav-link' href='mailto:ron.lindner@hotmail.com'" .$selectedMenu[$i]. "'>" .$nav[$i]. "</a></li>";

                } else {

                    echo "<li class='nav-item' id='".$selectedMenu[$i]."' role='presentation' onclick=''><a class='nav-link' id='".$selectedMenu[$i]."' href='index.php?selectedMenu=" .$selectedMenu[$i]. "'>" .$nav[$i]. "</a></li>";
                }

            }
            ?>

        </ul>
    </div>
</nav>
<script type="text/javascript">

    var get_var = "<?php echo $_GET['selectedMenu']; ?>";


    var selectedMenu = document.getElementById(get_var);
    console.log(selectedMenu);
    console.log(get_var);

    if( get_var = selectedMenu) {


        selectedMenu.classList.add("active");

    } else {


    }



</script>
