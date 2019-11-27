
<?php
function kit($lang, $kit, $items)
{
    $kithtml = '';
    $kitName = '';
    if ($lang == 'en') :
        $kitName = esc_html($kit[0]);
    elseif ($lang == 'fr') :
        $kitName = esc_html($kit[0]);
    endif;

    $kithtml .= '<div class="ball--first ball ball--big ball--empty">
    <a href="' . esc_html($kit[2]) . '"><img src="' . esc_html($kit[1]) . '" alt=""></a>
    <a class="kit__name kit--big" href="">' . $kitName . '</a><span class="ball__shadow"></span>
</div>';



    foreach ($items as $item) {
        $kithtml .= '<div class="ball ball--small ball--empty ball--one">
    <a href="' . esc_html($item[2]) . '"><img src="' . esc_html($item[1]) . '" alt="' . esc_html($item[0]) . '"></a>
    <a class="kit__name kit--one" href="">' . esc_html($item[0]) . '</a><span class="ball__shadow"></span>
</div>';
    }
    echo $kithtml;
};
?>