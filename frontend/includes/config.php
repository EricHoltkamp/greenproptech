<?php
/* Change Path if page is on Server */
//$root = '/';
$root = '/tannhaeuser/greenproptech/';

$company    = 'Green Property Technologies GmbH & Co. KG';
$phone      = '0209 730 876 87';
$phoneLink  = '+020973087687';
$fax        = 'XXXXXXX';
$mail       = 'mail@greenproptech.de';

$country    = 'Deutschland';
$city       = 'Gelsenkirchen';
$plz        = '45896';
$street     = 'Talmuldenweg 29';

/* Header Navigation   */
$navHeader = array(
    array(
        'nav-link' => 'Startseite',
        'link'  => $root . 'index.php',
        'title' => 'Startseite | Nachhaltige Immobilienplanung',
        'description' => 'Planung und Koordination von nachhaltigen Projekten für die Immobilienwirtschaft.',
        'target' => '_self'
    ),
    array(
        'nav-link' => 'Kontakt',
        'link'  => 'kontakt.php',
        'title' => 'Kontakt | Nachhaltige Immobilienplanung',
        'description' => 'Wir einen innovativen, ganzheitlichen Ansatz für Ihr Immobilienprojekt.',
        'target' => '_self'
    ),
);

/* Footer Navigation */
$navFooter = array(
    array(
        'nav-link' => 'Kontakt',
        'link'  => 'kontakt.php',
        'title' => 'Kontakt | Nachhaltige Immobilienplanung',
        'description' => 'Wir einen innovativen, ganzheitlichen Ansatz für Ihr Immobilienprojekt.',
        'target' => '_self'
    ),
    array(
        'nav-link' => 'Datenschutz',
        'link'  => 'datenschutz.php',
        'title' => 'Planung und Koordination von Projekten für die Immobilienwirtschaft.',
        'description' => 'Organisation von Bauherrenbesprechungen und Protokollführung',
        'target' => '_self'
    ),
    array(
        'nav-link' => 'Impressum',
        'link'  => 'impressum.php',
        'title' => 'Impressum | Nachhaltige Immobilienplanung',
        'description' => 'Mit Green Property Technologies effizient und nachhaltig optimieren und betreiben',
        'target' => '_self'
    )
);

?>
<?php

function createNavigation($menuArray, $currentPage) {

    foreach ($menuArray as $node) {
        $liClasses = [];
        $aClasses = [];
        $toggleDropdown = [];
        $checkParent = (isset($node['sub']) && !empty($node['sub'])) ? checkInChildArray($currentPage, $node['sub']) : '';
        $isCurrentPage = $node['nav-link'] == $currentPage ? true : false;
        ($checkParent === true || $isCurrentPage) ? array_push($aClasses, 'active') : null;
        (isset($node['sub']) && !empty($node['sub'])) ? array_push($liClasses, 'dropdown') : null;
        (isset($node['sub']) && !empty($node['sub'])) ? array_push($aClasses, 'dropdown-toggle') : null;
        (isset($node['sub']) && !empty($node['sub'])) ? array_push($toggleDropdown,'data-bs-toggle="dropdown"') : null;

        echo "<li class='nav-item " . implode(" ", $liClasses) . "'><a " . implode(" ", $toggleDropdown) . "  title='" . $node['title'] ."' class='nav-link " . implode(" ", $aClasses) . " " . $node['nav-link'] ."' target='" . ((!empty($node['target'])) ? $node['target'] : 'self') . "'  href='" . $node['link'] . "'>" . $node['nav-link'] . "</a>";
        if (isset($node['sub']) && !empty($node['sub'])) {

            echo "<ul class='dropdown-menu'> ";
            foreach ($node['sub'] as $subMenu) {
                $liClasses = [];
                $subMenu['nav-link'] == $currentPage ? array_push($liClasses, 'active') : null;
                echo "<li class=' " . implode(" ", $liClasses) . "'><a class='dropdown-item' title='" . $subMenu['title'] ."' href='" . $subMenu['link'] . "'>" . $subMenu['nav-link'] . "</a></li>";
            }
            echo "</ul>";
        }
        echo "</li>";
    }
}

// Checking if selected menu inside sub array.

function checkInChildArray($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item['link'] === $needle : $item == $needle) || (is_array($item) && checkInChildArray($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}

function getPageTitle($navs, $currentPage) {
    $navs_array = [];

    foreach ($navs as $nav) {
        foreach ($nav as $nav_item) {
            if (array_key_exists('sub', $nav_item)) {
                foreach ($nav_item['sub'] as $subitem) {
                    $navs_array[] = $subitem;
                }
            }

            $navs_array[] = $nav_item;
        }
    }

    $key = array_search($currentPage, array_column($navs_array, 'nav-link'));

    if ($key !== false) {
        return $navs_array[$key]['title'];
    }
}

function getPageDesc($navs, $currentPage) {
    $navs_array = [];

    foreach ($navs as $nav) {
        foreach ($nav as $nav_item) {
            if (array_key_exists('sub', $nav_item)) {
                foreach ($nav_item['sub'] as $subitem) {
                    $navs_array[] = $subitem;
                }
            }

            $navs_array[] = $nav_item;
        }
    }

    $key = array_search($currentPage, array_column($navs_array, 'nav-link'));

    if ($key !== false) {
        return $navs_array[$key]['description'];
    }
}

?>
