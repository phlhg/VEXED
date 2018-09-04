<?php

    Core\Router::set("/","Home/index");
    Core\Router::set("/p/{username}/","Profile/index")->where(["username" => 'nickname']);
    Core\Router::set("/signup/","Signup/index");
    Core\Router::set("/signup/{actcode}/{step}/","Signup/advanced")->where(["actcode" => '[A-Z0-9]+','step' => 'int']);

?>