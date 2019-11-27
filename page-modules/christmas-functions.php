
<?php
function kit($lang, $kit, $items)
{
    // Déclarations des variables
    $kithtml = '';
    $kitName = '';
    $kitImage = esc_html($kit[1]);
    $kitUrl = esc_html($kit[2]);

    // Déclarations des variables en fonction de la langue
    if ($lang == 'en') :
        $kitName = esc_html($kit[0]);
    elseif ($lang == 'fr') :
        $kitName = esc_html($kit[0]);
    endif;
    // Le Kit
    $kithtml = '<div class="ball--first ball ball--big ball--empty">
    <a href="' . $kitUrl . '"><img src="' . $kitImage . '" alt="' . $kitName . '"></a>
    <a class="kit__name kit--big" href="">' . $kitName . '</a><span class="ball__shadow"></span>
</div>';
    // Les items appartenant au kit
    foreach ($items as $item) {
        // Déclarations des variables en fonction de la langue
        //  1 - itemName FR, 2 - itemName EN, 3 - itemImage, 4 - itemURl FR, 5 - itemUrl EN
        $itemImage = esc_html($item[2]);
        $itemUrl = '';
        $itemName = '';
        if ($lang == 'en') :
            $itemName = esc_html($item[1]);
            $itemUrl = esc_html($item[4]);
        elseif ($lang == 'fr') :
            $itemName = esc_html($item[0]);
            $itemUrl = esc_html($item[3]);
        endif;

        $kithtml .= '<div class="ball ball--small ball--empty ball--one">
    <a href="' . $itemUrl . '"><img src="' . $itemImage . '" alt="' . $itemName . '"></a>
    <a class="kit__name kit--one" href="">' . $itemName . '</a><span class="ball__shadow"></span>
</div>';
    }
    // Affichage de l'ensemble
    echo $kithtml;
};
?>