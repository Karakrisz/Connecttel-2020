<?php

/******************** Home content start **********************/

function homeController()
{

    // if (array_key_exists("user", $_SESSION)) {
    //     $_SESSION["user"]["name"];
    //     unset($_SESSION["user"]);
    // } else {
    //     return [
    //         "redirect:/login", []
    //     ];
    // }

    $shops = [

        "kaposvartesco" => [
            "phone" => "+36203441288",
            "name" => "Connecttel Kaposvár Tesco",
            "cim" => "Kaposvár, Berzsenyi u. 13, 7400",
        ],

        "kaposvarplaza" => [
            "phone" => "+36203441288",
            "name" => "Connecttel Kaposvár Plaza",
            "cim" => "Kaposvár, Berzsenyi u. 1-3, 7400",
        ],

        "keszthely" => [
            "phone" => "+36205162367",
            "name" => "Connecttel Keszthely",
            "cim" => "Csapás út. 27 Keszthely 8360",
        ],

        "tapolca" => [
            "phone" => "+36205796654",
            "name" => "Connecttel Tapolca",
            "cim" => "Veszprémi út 5. Tapolca 8300",
        ],

        "zalaegerszeg" => [
            "phone" => "+36203961850",
            "name" => "Connecttel Zalaegerszeg",
            "cim" => "Sport utca 1. Zalaegerszeg",
        ],

        "balatonboglar" => [
            "phone" => "+36303871111",
            "name" => "Connecttel Balatonboglár Tesco",
            "cim" => "Klapka utca 30 Balatonboglár 8630",
        ],

    ];

    if (array_key_exists("shop", $_SESSION)) {
        $shop = $shops[$_SESSION["shop"]];
    } else {
        return [
            "redirect:/shop", [],
        ];
    }


    return [
        "home",
        [
            "title" => $shop["name"],
            "shop" => $shop,
        ],
    ];
}

/******************** Login function start **********************/

function LoginFormController()
{
    $containsError = array_key_exists("containsError", $_SESSION);
    unset($_SESSION["containsError"]);
    return [
        "login", [
            "title" => "login",
            "containsError" => $containsError,
        ],
    ];
}

function LoginSubmitController()
{
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $user = LoginUser(getConnection(), $email, $password);
    if ($user != null) {
        $_SESSION["user"] = [
            "name" => $user["name"],
        ];
        $view = "redirect:/";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/login";
    }
    return [
        $view, [],
    ];
}

/********************  Logout function start **********************/

function LogoutSubmitController()
{
    unset($_SESSION["user"]);
    return [
        "redirect:/", [],
    ];
}

/********************  Shop content start **********************/

function shopController()
{

    if (array_key_exists("shop", $_SESSION)) {
        return [
            "redirect:/", [],
        ];
    }

    return [
        "shop",
        [
            "title" => "Válassz Üzleteink közül",
        ],
    ];
}

function shopParamsController($params)
{
    $_SESSION["shop"] = $params["shop"];
    return [
        "redirect:/",
        [],
    ];
}

function shopSessionController()
{
    $shop_session = $_POST['event'];
    $_SESSION["shop"] = $shop_session;
    return [
        "redirect:/shop/$shop_session",
        [],
    ];
}


function mobileChangeChoiceController()
{

    return [
        "csereprogram",
        [
            "title" => "A MOBILCSERE PROGRAM",
        ],
    ];
}

// function mobileChangeSessionControllerBoglar() {
//     $shop_session = $_POST['event'];
//     $_SESSION["shop"] = $shop_session;
//     $_SESSION["mobileChange"] = $mobileChangeSession;
//     return [
//         "redirect:/shop/$shop_session",
//         [],
//     ];
// }

function mobileChangeController()
{

    return [
        "mobilcsereprogram",
        [
            "title" => "A MOBILCSERE PROGRAM",
        ],
    ];
}

/********************  404 content start **********************/

function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található.",
        ],
    ];
}