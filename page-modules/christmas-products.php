<?php
//** Kits en français */

$kit = [
    'Ensemble diamant',
    'Diamond Kit',
    'https://res.cloudinary.com/prospection/image/upload/v1574865030/boiteabijoux/kit1.png',
    '',
    ''
];

// Déclarations des produits
//  1 - itemName FR, 2 - itemName EN, 3 - itemImage, 4 - itemURl FR, 5 - itemUrl EN
//


$items = [
    [
        'Bague saphirs multicolore, 18K or jaune',
        'Multicolored sapphires, 18K yellow gold ring',
        'https://laboiteabijoux.ca/wp-content/uploads/2018/11/B6144-1.jpg',
        'https://laboiteabijoux.ca/boutique/saphirs-multicolore-18k-or-jaune/',
        'https://laboiteabijoux.ca/en/shop/multicolored-sapphires-18k-yellow-gold-ring/'
    ], [
        'Bague Péridot et diamants, 14K jaune',
        'Peridot and diamonds, 14K yellow gold ring',
        'https://laboiteabijoux.ca/wp-content/uploads/2019/10/B6693-1.jpg',
        'https://laboiteabijoux.ca/boutique/bague-peridot-et-diamants-14k-jaune/',
        'https://laboiteabijoux.ca/en/shop/peridot-and-diamonds-14k-yellow-gold-ring/'

    ],
    [
        'Bague Améthystes et diamants, 14K or jaune',
        'Amethysts and diamonds, 14K yellow gold',
        'https://laboiteabijoux.ca/wp-content/uploads/2018/07/B3076-1-1.jpg',
        'https://laboiteabijoux.ca/boutique/amethystes-et-diamants-14k-jaune',
        'https://laboiteabijoux.ca/en/shop/amethysts-and-diamonds-14k-yellow-gold/'
    ]
];

                //** Kits en anglais */
                
                if (ICL_LANGUAGE_CODE == 'en') :
                    kit('en', $kit, $items);
                elseif (ICL_LANGUAGE_CODE == 'fr') :
                    kit('fr', $kit, $items);
                endif;
