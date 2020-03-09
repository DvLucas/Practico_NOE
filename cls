[33mcommit d9bf8911d094ec82e582b563798ad6de2456f36e[m[33m ([m[1;36mHEAD -> [m[1;32msprint_laravel[m[33m)[m
Author: Lucas <luka_182@hotmail.es>
Date:   Sun Mar 8 21:54:37 2020 -0300

    Carrito funcional

 app/Http/Controllers/CartController.php            | 141 [32m+++++++++++++++++++++[m
 database/seeds/DatabaseSeeder.php                  |   2 [32m+[m[31m-[m
 ...{ProductsSeeder.php => ProductsTableSeeder.php} |   2 [32m+[m[31m-[m
 public/images/products/1583702026.jpeg             | Bin [31m0[m -> [32m249768[m bytes
 public/images/products/1583715062.jpeg             | Bin [31m0[m -> [32m248700[m bytes
 resources/views/cart.blade.php                     |  57 [32m+++[m[31m------[m
 resources/views/layouts/master.blade.php           |  53 [32m+++++++[m[31m-[m
 resources/views/layouts/master_dashboard.blade.php |   3 [32m+[m[31m-[m
 .../views/shop/includes/header_shop.blade.php      |   1 [32m+[m
 .../views/shop/includes/products_shop.blade.php    |   8 [32m+[m[31m-[m
 resources/views/shop/shop.blade.php                |   1 [31m-[m
 routes/web.php                                     |   7 [32m+[m[31m-[m
 12 files changed, 228 insertions(+), 47 deletions(-)

[33mcommit f6551205910d54b3cd14cc6cb0958109e073de0f[m[33m ([m[1;32mlucas[m[33m)[m
Author: Leo Lazcano <lazcano.leonel@gmail.com>
Date:   Wed Mar 4 20:33:04 2020 -0300

    asd

 public/images/products/1583362896.jpeg    | Bin [31m0[m -> [32m249768[m bytes
 public/images/products/1583362900.jpeg    | Bin [31m0[m -> [32m37508[m bytes
 public/images/products/1583362909.jpeg    | Bin [31m0[m -> [32m57697[m bytes
 resources/views/includes/header.blade.php |  22 [32m++[m[31m--------------------[m
 resources/views/item.blade.php            |  12 [32m++++++[m[31m------[m
 routes/web.php                            |   2 [32m+[m[31m-[m
 6 files changed, 9 insertions(+), 27 deletions(-)

[33mcommit 96a08fc69e20b4dc265d5276579deb8e90279e94[m
Merge: cae55a2 5a5cfc5
Author: Leo Lazcano <lazcano.leonel@gmail.com>
Date:   Wed Mar 4 19:50:49 2020 -0300

    sda

[33mcommit cae55a213f3bd9e71aa21d48239d8f481abe7e6c[m
Author: Leo Lazcano <lazcano.leonel@gmail.com>
Date:   Wed Mar 4 19:47:44 2020 -0300

    correccion login

 resources/views/dashboard/products/list.blade.php | 10 [32m++[m[31m--[m
 resources/views/includes/header.blade.php         | 64 [32m+++++++++++++++[m[31m--------[m
 2 files changed, 46 insertions(+), 28 deletions(-)

[33mcommit 5a5cfc57f7fd260215c98f633abbffd78a2d45a0[m
Author: fabianabarrionuevo <fabibarrionuevo1@gmail.com>
Date:   Wed Mar 4 19:38:21 2020 -0300

    asset en header

 resources/views/includes/header.blade.php | 16 [32m++++++++[m[31m--------[m
 routes/web.php                            |  2 [31m--[m
 2 files changed, 8 insertions(+), 10 deletions(-)

[33mcommit e2e9edefe7eed7af03d7ee74c19d74dd44eb175f[m
Author: JAlexsse <de.lite.alexssa@gmail.com>
Date:   Wed Mar 4 17:35:36 2020 -0300

    sprint_lavarel

 app/Comments.php                                   | 14 [32m+++++++++[m
 app/Http/Controllers/CommentsController.php        | 23 [32m+++++++++++++++[m
 app/Http/Controllers/ProductsController.php        |  1 [32m+[m
 app/Products.php                                   |  3 [32m++[m
 .../2020_03_04_201005_create_comments_table.php    | 34 [32m++++++++++++++++++++++[m
 5 files changed, 75 insertions(+)

[33mcommit b2fc21d7ebc19df5bf9c55a651b5e989dbf5ad53[m
Merge: 6b873ae 0a5f8bf
Author: JAlexsse <de.lite.alexssa@gmail.com>
Date:   Wed Mar 4 02:40:02 2020 -0300

    sprint_laravel

[33mcommit 6b873ae3610f4cdedf373e50f7701b57b5674a51[m
Author: JAlexsse <de.lite.alexssa@gmail.com>
Date:   Wed Mar 4 02:36:50 2020 -0300

    sprint_lavarel

 composer.lock                                     |  45 [32m++[m[31m---[m
 database/seeds/DatabaseSeeder.php                 |   1 [32m+[m
 database/seeds/ProductsSeeder.php                 |  37 [32m++++[m
 public/css/stylehome.css                          |   5 [32m+[m
 public/images/products/1583287495.jpeg            | Bin [31m0[m -> [32m249768[m bytes
 public/images/products/1583287510.jpeg            | Bin [31m0[m -> [32m57697[m bytes
 resources/views/dashboard/products/list.blade.php |   4 [32m+[m[31m-[m
 resources/views/item.blade.php                    | 221 [32m+++++++++++[m[31m-----------[m
 8 files changed, 176 insertions(+), 137 deletions(-)

[33mcommit 0a5f8bfcff36011a4021e0c3dc358ad299490e10[m
Author: marcoa001 <marcosacu@outlook.com>
Date:   Wed Mar 4 02:28:44 2020 -0300

    home-faq-contacto

 .env                                      |   2 [32m+[m[31m-[m
 composer.lock                             |  45 [32m+++[m[31m---[m
 public/css/stylehome.css                  |   4 [32m+[m[31m-[m
 resources/views/contacto.blade.php        | 120 [32m+++++++++++++++[m
 resources/views/faq.blade.php             | 243 [32m++++++++++++++++++++++++++++++[m
 resources/views/home.blade.php            | 109 [32m+++++++++++[m[31m---[m
 resources/views/includes/header.blade.php | 105 [32m+++++[m[31m--------[m
 routes/web.php                            |   8 [32m+[m
 8 files changed, 528 insertions(+), 108 deletions(-)

[33mcommit 66f8831b2f7d599a2630b15478375b39b474bd8f[m
Author: marcoa001 <marcosacu@outlook.com>
Date:   Wed Mar 4 01:39:23 2020 -0300

    imagenes

 public/img/imagenes/COLORES/Recurso 12.png         | Bin [31m0[m -> [32m464[m bytes
 public/img/imagenes/ICONOS/LOGO/Recurso 11.svg     |   1 [32m+[m
 public/img/imagenes/ICONOS/LOGO/logo_blanco.svg    |   1 [32m+[m
 public/img/imagenes/ICONOS/Maria-Sharapova.jpg     | Bin [31m0[m -> [32m1615451[m bytes
 public/img/imagenes/ICONOS/SVG/Maria-Sharapova.jpg | Bin [31m0[m -> [32m1615451[m bytes
 public/img/imagenes/ICONOS/SVG/SVG/Recurso 10.svg  |   1 [32m+[m
 public/img/imagenes/ICONOS/SVG/SVG/Recurso 4.svg   |   1 [32m+[m
 public/img/imagenes/ICONOS/SVG/SVG/Recurso 5.svg   |   1 [32m+[m
 public/img/imagenes/ICONOS/SVG/SVG/Recurso 6.svg   |   1 [32m+[m
 public/img/imagenes/ICONOS/SVG/SVG/Recurso 9.svg   |   1 [32m+[m
 public/img/imagenes/ICONOS/SVG/slider1.jpg         | Bin [31m0[m -> [32m302725[m bytes
 public/img/imagenes/ICONOS/SVG/slider2.jpg         | Bin [31m0[m -> [32m361171[m bytes
 public/img/imagenes/ICONOS/SVG/slider3.jpg         | Bin [31m0[m -> [32m983614[m bytes
 .../imagenes/ICONOS/UTILIDAD AMARILLOS/bolsa.svg   |   1 [32m+[m
 .../ICONOS/UTILIDAD AMARILLOS/busqueda.svg         |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD AMARILLOS/canasta.svg |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD AMARILLOS/carrito.svg |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD AMARILLOS/envios.svg  |   1 [32m+[m
 .../ICONOS/UTILIDAD AMARILLOS/etiqueta.svg         |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD AMARILLOS/tarjeta.svg |   1 [32m+[m
 .../img/imagenes/ICONOS/UTILIDAD NEGROS/bolsa.svg  |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD NEGROS/busqueda.svg   |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD NEGROS/canasta.svg    |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD NEGROS/carrito.svg    |   1 [32m+[m
 .../img/imagenes/ICONOS/UTILIDAD NEGROS/envios.svg |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD NEGROS/etiqueta.svg   |   1 [32m+[m
 .../imagenes/ICONOS/UTILIDAD NEGROS/tarjeta.svg    |   1 [32m+[m
 public/img/imagenes/ICONOS/bag.png                 | Bin [31m0[m -> [32m1332[m bytes
 public/img/imagenes/ICONOS/facebook-brands.svg     |   1 [32m+[m
 public/img/imagenes/ICONOS/facebook.svg            |   1 [32m+[m
 public/img/imagenes/ICONOS/heart.svg               |   1 [32m+[m
 public/img/imagenes/ICONOS/huella.svg              | 114 [32m+++++++++++++++++++++[m
 public/img/imagenes/ICONOS/huella_2.svg            |   1 [32m+[m
 public/img/imagenes/ICONOS/huella_yellow.svg       |   1 [32m+[m
 public/img/imagenes/ICONOS/instagram-brands.svg    |   1 [32m+[m
 public/img/imagenes/ICONOS/instagram.svg           |   1 [32m+[m
 public/img/imagenes/ICONOS/mail.svg                |   1 [32m+[m
 public/img/imagenes/ICONOS/search.png              | Bin [31m0[m -> [32m1339[m bytes
 public/img/imagenes/ICONOS/telefono.svg            |   1 [32m+[m
 public/img/imagenes/ICONOS/twitter.svg             |   1 [32m+[m
 public/img/imagenes/ICONOS/ubicacion.svg           |   1 [32m+[m
 .../img/imagenes/ICONOS/utilidades redes/chat.ico  | Bin [31m0[m -> [32m16958[m bytes
 .../imagenes/ICONOS/utilidades redes/facebook.ico  | Bin [31m0[m -> [32m67646[m bytes
 .../imagenes/ICONOS/utilidades redes/instagram.svg |  53 [32m++++++++++[m
 .../imagenes/ICONOS/utilidades redes/locate.ico    | Bin [31m0[m -> [32m67646[m bytes
 .../imagenes/ICONOS/utilidades redes/twitter.ico   | Bin [31m0[m -> [32m67646[m bytes
 .../imagenes/ICONOS/utilidades redes/youtube.ico   | Bin [31m0[m -> [32m67646[m bytes
 public/img/imagenes/ICONOS/youtube.svg             |   1 [32m+[m
 public/img/imagenes/IMAGENES/ACCESORIOS.jpg        | Bin [31m0[m -> [32m184722[m bytes
 public/img/imagenes/IMAGENES/AGUA.jpeg             | Bin [31m0[m -> [32m466498[m bytes
 public/img/imagenes/IMAGENES/BICICLETAS.jpg        | Bin [31m0[m -> [32m211874[m bytes
 public/img/imagenes/IMAGENES/CUBIERTAS.jpg         | Bin [31m0[m -> [32m262165[m bytes
 .../img/imagenes/IMAGENES/HEADER_USUARIO-100.jpg   | Bin [31m0[m -> [32m679174[m bytes
 public/img/imagenes/IMAGENES/HeaderFaq.jpg         | Bin [31m0[m -> [32m2339294[m bytes
 public/img/imagenes/IMAGENES/REPUESTOS.jpg         | Bin [31m0[m -> [32m227446[m bytes
 public/img/imagenes/IMAGENES/header principal.jpg  | Bin [31m0[m -> [32m4420202[m bytes
 public/img/imagenes/IMAGENES/of11.jpg              | Bin [31m0[m -> [32m64199[m bytes
 public/img/imagenes/IMAGENES/of22.jpg              | Bin [31m0[m -> [32m66936[m bytes
 public/img/imagenes/IMAGENES/of33.jpg              | Bin [31m0[m -> [32m78102[m bytes
 public/img/imagenes/INDEX/CIUDAD-100.jpg           | Bin [31m0[m -> [32m252635[m bytes
 public/img/imagenes/INDEX/FIXED-100.jpg            | Bin [31m0[m -> [32m312694[m bytes
 "public/img/imagenes/INDEX/MONTA\303\221A-100.jpg" | Bin [31m0[m -> [32m416766[m bytes
 public/img/imagenes/INDEX/RUTA-100.jpg             | Bin [31m0[m -> [32m419262[m bytes
 public/img/imagenes/INDEX/carousel/PROMO 1-100.jpg | Bin [31m0[m -> [32m1743104[m bytes
 public/img/imagenes/INDEX/carousel/PROMO 2-100.jpg | Bin [31m0[m -> [32m701267[m bytes
 public/img/imagenes/INDEX/carousel/PROMO 3-100.jpg | Bin [31m0[m -> [32m744747[m bytes
 public/img/imagenes/INDEX/carousel/PROMO 4-100.jpg | Bin [31m0[m -> [32m795557[m bytes
 public/img/imagenes/INDEX/carousel/of11.jpg        | Bin [31m0[m -> [32m64199[m bytes
 public/img/imagenes/INDEX/carousel/of22.jpg        | Bin [31m0[m -> [32m66936[m bytes
 public/img/imagenes/INDEX/carousel/of33.jpg        | Bin [31m0[m -> [32m78102[m bytes
 public/img/imagenes/INDEX/carousel/oferta1.jpg     | Bin [31m0[m -> [32m394727[m bytes
 public/img/imagenes/INDEX/carousel/oferta3.jpeg    | Bin [31m0[m -> [32m319064[m bytes
 public/img/imagenes/INDEX/carousel/section1.jpeg   | Bin [31m0[m -> [32m162379[m bytes
 public/img/imagenes/INDEX/carousel/section2.jpg    | Bin [31m0[m -> [32m231467[m bytes
 public/img/imagenes/INDEX/carousel/section3.jpg    | Bin [31m0[m -> [32m239998[m bytes
 .../img/imagenes/PRODUCTOS/BICICLETAS/aventura.jpg | Bin [31m0[m -> [32m249768[m bytes
 .../imagenes/PRODUCTOS/BICICLETAS/carretera.jpg    | Bin [31m0[m -> [32m241041[m bytes
 .../img/imagenes/PRODUCTOS/BICICLETAS/ciudad.jpg   | Bin [31m0[m -> [32m248700[m bytes
 public/img/imagenes/PRODUCTOS/BICICLETAS/item1.jpg | Bin [31m0[m -> [32m37508[m bytes
 public/img/imagenes/PRODUCTOS/BICICLETAS/item2.jpg | Bin [31m0[m -> [32m71862[m bytes
 public/img/imagenes/PRODUCTOS/BICICLETAS/item3.jpg | Bin [31m0[m -> [32m57697[m bytes
 public/img/imagenes/PRODUCTOS/BICICLETAS/item4.jpg | Bin [31m0[m -> [32m145719[m bytes
 .../imagenes/PRODUCTOS/BICICLETAS/velocidad.jpg    | Bin [31m0[m -> [32m71536[m bytes
 ...avic-ksyrium-125th-anniversary-wts-wheelset.jpg | Bin [31m0[m -> [32m203112[m bytes
 .../WheelSet_Gold_700c_40_3rd_web_1200x.jpg        | Bin [31m0[m -> [32m131096[m bytes
 .../PRODUCTOS/CUBIERTAS/gold_wheel_set.jpg         | Bin [31m0[m -> [32m262165[m bytes
 .../mavic-ksyrium-elite-wts-red-shimano.jpg        | Bin [31m0[m -> [32m142020[m bytes
 .../bluelineornotwomensfront_1200x.jpg             | Bin [31m0[m -> [32m94082[m bytes
 .../PRODUCTOS/EQUIPO Y ACCESORIOS/casco1.jpg       | Bin [31m0[m -> [32m86346[m bytes
 .../PRODUCTOS/EQUIPO Y ACCESORIOS/casco2.jpg       | Bin [31m0[m -> [32m73490[m bytes
 .../PRODUCTOS/EQUIPO Y ACCESORIOS/casco3.jpg       | Bin [31m0[m -> [32m57444[m bytes
 .../EQUIPO Y ACCESORIOS/jerseyblack1_1200x.jpg     | Bin [31m0[m -> [32m63555[m bytes
 public/img/imagenes/PRODUCTOS/Online/1images.jpg   | Bin [31m0[m -> [32m3386[m bytes
 public/img/imagenes/PRODUCTOS/Online/1img14.jpg    | Bin [31m0[m -> [32m71536[m bytes
 public/img/imagenes/PRODUCTOS/Online/1img2.jpg     | Bin [31m0[m -> [32m249768[m bytes
 public/img/imagenes/PRODUCTOS/Online/1img4.jpg     | Bin [31m0[m -> [32m241041[m bytes
 public/img/imagenes/PRODUCTOS/Online/1img8.jpg     | Bin [31m0[m -> [32m248700[m bytes
 public/img/imagenes/PRODUCTOS/Online/1img9.jpg     | Bin [31m0[m -> [32m38209[m bytes
 public/img/imagenes/PRODUCTOS/Online/2img10.jpg    | Bin [31m0[m -> [32m63555[m bytes
 public/img/imagenes/PRODUCTOS/Online/2img3.jpg     | Bin [31m0[m -> [32m94082[m bytes
 public/img/imagenes/PRODUCTOS/Online/2img4.jpg     | Bin [31m0[m -> [32m241041[m bytes
 public/img/imagenes/PRODUCTOS/Online/2img6.jpg     | Bin [31m0[m -> [32m73490[m bytes
 .../img/imagenes/PRODUCTOS/REPUESTOS/Asiento.jpeg  | Bin [31m0[m -> [32m45237[m bytes
 .../PRODUCTOS/REPUESTOS/Drop_Bar_Gold_1200x.jpg    | Bin [31m0[m -> [32m38209[m bytes
 public/img/imagenes/PRODUCTOS/REPUESTOS/Pedal1.jpg | Bin [31m0[m -> [32m68817[m bytes
 ..._4d4a9eb9-77f8-48d6-a9c2-27d7f9834de0_1200x.jpg | Bin [31m0[m -> [32m46702[m bytes
 .../silca-seat-roll-premio_0003_Layer_1_1200x.jpg  | Bin [31m0[m -> [32m86299[m bytes
 107 files changed, 200 insertions(+)

[33mcommit 12680888705527e80211af0623df2a21699f85a6[m
Merge: 2e48321 3b027cd
Author: JAlexsse <de.lite.alexssa@gmail.com>
Date:   Tue Mar 3 22:27:47 2020 -0300

    sprint_lavarel

[33mcommit 2e483217e37c08e8e208ca94a07654f48bd5b627[m
Author: JAlexsse <de.lite.alexssa@gmail.com>
Date:   Tue Mar 3 22:25:01 2020 -0300

    sprint_lavarel

 app/Http/Controllers/ProductsController.php |  15 [32m++[m[31m-[m
 composer.lock                               | 176 [32m+++++++++++++[m[31m---------------[m
 resources/views/item.blade.php              | 136 [32m+++++++++++++++++++++[m
 routes/web.php                              |   2 [32m+[m
 4 files changed, 226 insertions(+), 103 deletions(-)

[33mcommit 3b027cd40877f6602068ec53e17aaa169058999e[m
Author: Lucas <luka_182@hotmail.es>
Date:   Tue Mar 3 22:12:04 2020 -0300

    dashboard and shop feature 1.0

 app/Http/Controllers/GalleryController.php         |   3 [32m+[m
 app/Http/Controllers/ShopController.php            |  12 [32m++[m[31m--[m
 .../Controllers/dashboard/ProductsController.php   |  14 [32m++++[m[31m-[m
 app/Http/Requests/StoreProductPost.php             |   1 [32m+[m
 app/Products.php                                   |   4 [32m++[m
 public/images/products/1583242020.jpeg             | Bin [31m71536[m -> [32m0[m bytes
 public/images/products/1583242057.jpeg             | Bin [31m71536[m -> [32m0[m bytes
 public/images/products/1583242392.jpeg             | Bin [31m241041[m -> [32m0[m bytes
 public/images/products/1583243405.jpeg             | Bin [31m71536[m -> [32m0[m bytes
 public/images/products/1583274255.jpeg             | Bin [31m0[m -> [32m37508[m bytes
 public/images/products/1583274260.jpeg             | Bin [31m0[m -> [32m71862[m bytes
 public/images/products/1583274263.jpeg             | Bin [31m0[m -> [32m57697[m bytes
 public/images/products/1583274268.jpeg             | Bin [31m0[m -> [32m145719[m bytes
 .../products/{1583242388.jpeg => 1583274280.jpeg}  | Bin
 public/images/products/1583274426.jpeg             | Bin [31m0[m -> [32m248700[m bytes
 public/images/products/1583277704.jpeg             | Bin [31m0[m -> [32m73490[m bytes
 public/images/products/1583278745.jpeg             | Bin [31m0[m -> [32m86346[m bytes
 public/images/products/1583278826.jpeg             | Bin [31m0[m -> [32m248700[m bytes
 public/images/products/1583278893.jpeg             | Bin [31m0[m -> [32m86299[m bytes
 public/images/products/1583278966.jpeg             | Bin [31m0[m -> [32m63555[m bytes
 .../views/dashboard/products/create.blade.php      |  35 [32m++[m[31m---------[m
 resources/views/dashboard/products/image.blade.php |  18 [32m+++++[m[31m-[m
 .../views/dashboard/products/update.blade.php      |   2 [32m+[m[31m-[m
 .../views/shop/includes/header_shop.blade.php      |   6 [32m+[m[31m-[m
 resources/views/shop/includes/nav_shop.blade.php   |  64 [32m++++++++++++++[m[31m-------[m
 .../views/shop/includes/products_shop.blade.php    |  37 [32m++++++[m[31m------[m
 routes/web.php                                     |   1 [32m+[m
 27 files changed, 119 insertions(+), 78 deletions(-)

[33mcommit e9f48a1b23f4c5ef8e4bc133e5eb4763719ba124[m[33m ([m[1;31morigin/lucas[m[33m)[m
Author: Lucas <luka_182@hotmail.es>
Date:   Tue Mar 3 10:54:54 2020 -0300

    correcion imagenes dashboard

 app/Gallery.php                                    |   6 [32m++++[m
 app/Http/Controllers/GalleryController.php         |  20 [32m+++++++[m[31m----[m
 .../Controllers/dashboard/ProductsController.php   |  12 [32m++++[m[31m---[m
 public/images/products/1583192735.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583192893.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583192927.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193092.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193116.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193136.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193141.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193156.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193165.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193179.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193218.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193225.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193234.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193240.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193249.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193294.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193306.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193348.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193372.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193381.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193400.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193420.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193463.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193481.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193668.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193688.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193699.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193726.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193744.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193749.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193753.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583193989.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583194091.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583194156.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583194222.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583194239.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583194240.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583194247.png              | Bin [31m100357[m -> [32m0[m bytes
 public/images/products/1583241429.jpeg             | Bin [31m0[m -> [32m249768[m bytes
 public/images/products/1583242020.jpeg             | Bin [31m0[m -> [32m71536[m bytes
 public/images/products/1583242057.jpeg             | Bin [31m0[m -> [32m71536[m bytes
 public/images/products/1583242388.jpeg             | Bin [31m0[m -> [32m249768[m bytes
 public/images/products/1583242392.jpeg             | Bin [31m0[m -> [32m241041[m bytes
 public/images/products/1583243405.jpeg             | Bin [31m0[m -> [32m71536[m bytes
 resources/views/dashboard/dashboard.blade.php      |   2 [32m+[m[31m-[m
 resources/views/dashboard/products/image.blade.php |  40 [32m+++++++++++++++++++++[m
 resources/views/dashboard/products/list.blade.php  |   3 [32m+[m[31m-[m
 50 files changed, 69 insertions(+), 14 deletions(-)

[33mcommit 577a7cb5b77c05c71d904024dae575b0c068e0b4[m
Author: Lucas <luka_182@hotmail.es>
Date:   Mon Mar 2 23:10:08 2020 -0300

    dashboard 80%  funcional y tienda 50% funcional

 app/Http/Controllers/GalleryController.php         |  97 [32m+++++++++++++[m
 app/Http/Controllers/ProductsController.php        |  37 [32m+[m[31m----[m
 app/Http/Controllers/ShopController.php            |  87 [32m++++++++++++[m
 .../Controllers/dashboard/ProductsController.php   | 125 [32m+++++++++++++++++[m
 public/images/products/1583192735.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583192893.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583192927.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193092.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193116.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193136.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193141.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193156.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193165.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193179.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193218.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193225.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193234.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193240.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193249.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193294.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193306.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193348.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193372.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193381.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193400.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193420.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193463.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193481.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193668.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193688.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193699.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193726.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193744.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193749.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193753.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583193989.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583194091.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583194156.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583194222.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583194239.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583194240.png              | Bin [31m0[m -> [32m100357[m bytes
 public/images/products/1583194247.png              | Bin [31m0[m -> [32m100357[m bytes
 resources/views/dashboard/dashboard.blade.php      |   2 [32m+[m[31m-[m
 .../views/dashboard/includes/modal_image.blade.php |  44 [32m++++++[m
 .../views/dashboard/products/create.blade.php      |   2 [32m+[m[31m-[m
 resources/views/dashboard/products/list.blade.php  |  15 [32m+[m[31m-[m
 .../views/dashboard/products/update.blade.php      | 116 [32m+++++++++++++++[m
 resources/views/layouts/master.blade.php           |  19 [31m---[m
 resources/views/layouts/master_dashboard.blade.php |  80 [32m+++++++++++[m
 .../views/shop/includes/header_shop.blade.php      |   3 [32m+[m
 resources/views/shop/includes/nav_shop.blade.php   | 156 [32m+++++++++++++++++++++[m
 .../views/shop/includes/products_shop.blade.php    |  60 [32m++++++++[m
 resources/views/shop/shop.blade.php                |  40 [32m++++++[m
 routes/web.php                                     |   9 [32m+[m[31m-[m
 54 files changed, 833 insertions(+), 59 deletions(-)

[33mcommit 3124c82c1aa83f7235b4066eb3a4f8f980755a7a[m
Author: Lucas <luka_182@hotmail.es>
Date:   Mon Mar 2 00:09:44 2020 -0300

    Agregar Productos y Modificar el status en tienda

 app/Http/Controllers/ProductsController.php        |  27 [32m++[m[31m--[m
 app/Http/Requests/StoreProductPost.php             |  36 [32m+++++[m
 app/Products.php                                   |   6 [32m+[m[31m-[m
 composer.lock                                      | 176 [32m+++++++++[m[31m------------[m
 .../includes/modal_up_down_product.blade.php       |  31 [32m++++[m
 .../views/dashboard/products/create.blade.php      |   6 [32m+[m[31m-[m
 resources/views/dashboard/products/list.blade.php  |  48 [32m++++[m[31m--[m
 resources/views/layouts/master.blade.php           |  20 [32m+++[m
 8 files changed, 223 insertions(+), 127 deletions(-)

[33mcommit dac2c64f17244a1e28aa05ec37e5be5796bdd849[m
Author: Lucas <luka_182@hotmail.es>
Date:   Sun Mar 1 21:19:54 2020 -0300

    correciones dashboard

 app/Http/Controllers/ProductsController.php        |  22 [32m++++[m[31m-[m
 resources/views/dashboard/dashboard.blade.php      |   9 [32m+[m[31m-[m
 .../dashboard/includes/nav_dashboard.blade.php     |   2 [32m+[m[31m-[m
 .../views/dashboard/products/create.blade.php      | 110 [32m+++++++++++++++++++[m[31m--[m
 resources/views/dashboard/products/list.blade.php  |  75 [32m+++++++[m[31m-------[m
 5 files changed, 168 insertions(+), 50 deletions(-)

[33mcommit 21e13e8ec3f928735fccc52f884f7192429bd995[m
Author: Lucas <luka_182@hotmail.es>
Date:   Sat Feb 29 17:13:28 2020 -0300

    Correccion Migra

 app/{Brand.php => Brands.php}                      |   2 [32m+[m[31m-[m
 app/{Category.php => Categories.php}               |   2 [32m+[m[31m-[m
 app/Http/Controllers/ProductsController.php        |   8 [32m+[m[31m-[m
 app/Http/Controllers/panelController.php           |   2 [32m+[m[31m-[m
 app/Product.php                                    |  10 [31m--[m
 app/Products.php                                   |  21 [32m++++[m
 app/Province.php                                   |  22 [32m+++[m[31m--[m
 app/city.php                                       |  22 [32m+++[m[31m--[m
 .../2020_02_21_230803_tabla_categories.php         |   2 [32m+[m[31m-[m
 .../migrations/2020_02_21_232911_table_gallery.php |   2 [32m+[m[31m-[m
 ...0_02_22_002038_create_product_details_table.php |   4 [32m+[m[31m-[m
 ...020_02_22_003702_create_sales_details_table.php |   6 [32m+[m[31m-[m
 .../2020_02_22_182258_create_states_table.php      |   2 [32m+[m[31m-[m
 .../2020_02_22_210708_create_products_table.php    |   4 [32m+[m[31m-[m
 .../2020_02_29_001532_create_foreign_key.php       | 107 [32m+++++++++++++++++++++[m
 database/seeds/BrandsTableSeeder.php               |  33 [32m+++++++[m
 database/seeds/CategoriesTableSeeder.php           |  41 [32m++++++++[m
 database/seeds/CitiesTableSeeder.php               |   2 [32m+[m[31m-[m
 database/seeds/DatabaseSeeder.php                  |   3 [32m+[m[31m-[m
 database/seeds/ProvincesTableSeeder.php            |   2 [32m+[m[31m-[m
 resources/views/dashboard/dashboard.blade.php      |  27 [32m+++[m[31m---[m
 .../dashboard/includes/nav_dashboard.blade.php     |  13 [32m+++[m
 resources/views/dashboard/products/list.blade.php  |  39 [32m++++++++[m
 resources/views/includes/footer.blade.php          |  12 [32m+[m[31m--[m
 resources/views/includes/header.blade.php          |  16 [32m+[m[31m--[m
 resources/views/layouts/master.blade.php           |   4 [32m+[m[31m-[m
 26 files changed, 331 insertions(+), 77 deletions(-)

[33mcommit 79ac3abbf350660d7d507c539fe436619da7b383[m[33m ([m[1;31morigin/master[m[33m, [m[1;31morigin/HEAD[m[33m, [m[1;32mmaster[m[33m)[m
Author: Lucas <luka_182@hotmail.es>
Date:   Thu Feb 27 22:04:08 2020 -0300

    prueba

 resources/views/{panel.blade.php => dashboard/dashboard.blade.php} | 0
 resources/views/{ => dashboard}/products/create.blade.php          | 0
 2 files changed, 0 insertions(+), 0 deletions(-)

[33mcommit 37623e8910a617f48c768e1016a2afee64b469ef[m
Author: Lucas <luka_182@hotmail.es>
Date:   Thu Feb 27 21:31:16 2020 -0300

    prueba

 resources/views/products/create.blade.php | 1 [32m+[m
 1 file changed, 1 insertion(+)

[33mcommit 9fe32f64466bb30ad8206d031547cad9c4e92830[m
Author: Lucas <luka_182@hotmail.es>
Date:   Thu Feb 27 21:30:19 2020 -0300

    ajustes layout master

 resources/views/layouts/master.blade.php | 16 [32m++++++[m[31m----------[m
 1 file changed, 6 insertions(+), 10 deletions(-)

[33mcommit 495e9d0df1245ee4f69f2d43c995e6e0c5ba8d37[m
Author: Lucas <luka_182@hotmail.es>
Date:   Wed Feb 26 22:24:29 2020 -0300

    a

 asd | 1 [31m-[m
 1 file changed, 1 deletion(-)

[33mcommit f37da37e28c695b27039f0e49f3164461b2e2658[m
Merge: 4837ee6 1602360
Author: candelobayza <candelobayza@hotmail.com>
Date:   Wed Feb 26 20:54:38 2020 -0300

    panel

[33mcommit 4837ee6b3b820f1031086429db7b1496595ba3b2[m
Author: candelobayza <candelobayza@hotmail.com>
Date:   Wed Feb 26 20:50:10 2020 -0300

    panel

 app/Http/Controllers/Auth/LoginController.php      |  9 [32m+++[m
 app/Http/Controllers/ProductsController.php        | 85 [32m++++++++++++++++++++++[m
 app/Http/Controllers/panelController.php           | 21 [32m++++++[m
 app/Product.php                                    | 10 [32m+++[m
 composer.lock                                      | 34 [32m++++[m[31m-----[m
 .../2014_10_12_000000_create_users_table.php       |  2 [32m+[m[31m-[m
 ...4_10_12_100000_create_password_resets_table.php |  2 [32m+[m[31m-[m
 resources/views/panel.blade.php                    | 37 [32m++++++++++[m
 resources/views/products/create.blade.php          |  8 [32m++[m
 routes/web.php                                     |  8 [32m++[m
 10 files changed, 197 insertions(+), 19 deletions(-)

[33mcommit 160236012512cda814912d2ff040ef21784f0892[m
Author: fabianabarrionuevo <fabibarrionuevo1@gmail.com>
Date:   Wed Feb 26 20:32:24 2020 -0300

    modelos

 app/Brand.php                  |  13 [32m+++++[m
 app/Category.php               |  13 [32m+++++[m
 app/Favorite.php               |  13 [32m+++++[m
 app/Gallery.php                |  13 [32m+++++[m
 app/Payment_method.php         |  13 [32m+++++[m
 app/Product_detail.php         |  13 [32m+++++[m
 app/Province.php               |  13 [32m+++++[m
 app/Rol.php                    |  14 [32m+++++[m
 app/State.php                  |  13 [32m+++++[m
 app/city.php                   |  13 [32m+++++[m
 app/color.php                  |  13 [32m+++++[m
 app/color_product.php          |  13 [32m+++++[m
 app/sale_detail.php            |  13 [32m+++++[m
 composer.lock                  |  24 [32m++++[m[31m----[m
 resources/views/cart.blade.php | 126 [32m+++++++++++++++++++++++++++++++++++++++++[m
 routes/web.php                 |   4 [32m++[m
 16 files changed, 312 insertions(+), 12 deletions(-)

[33mcommit b01d266b95e3484aa56b7c0c13ed62e9b5ed8e5b[m[33m ([m[1;31morigin/Jessica[m[33m)[m
Author: Lucas <luka_182@hotmail.es>
Date:   Tue Feb 25 13:17:56 2020 -0300

    nullable users

 database/migrations/2014_10_12_000000_create_users_table.php | 12 [32m++++++[m[31m------[m
 1 file changed, 6 insertions(+), 6 deletions(-)

[33mcommit 4bd0bf038c80a5f8b894d44e2885e2dc74dfb8df[m
Author: Lucas <luka_182@hotmail.es>
Date:   Mon Feb 24 22:16:53 2020 -0300

    Registro y Login funcional + Template Master

 app/Http/Controllers/Auth/RegisterController.php |   2 [32m+[m
 app/User.php                                     |   2 [32m+[m[31m-[m
 public/css/fonts.css                             |  50 [32m++++[m
 public/css/stylehome.css                         | 360 [32m+++++++++++++++++++++++[m
 public/img/icons/bolsa_amarillo.svg              |   1 [32m+[m
 public/img/icons/busqueda_amarillo.svg           |   1 [32m+[m
 public/img/icons/facebook.svg                    |   1 [32m+[m
 public/img/icons/icon_footer.svg                 |   1 [32m+[m
 public/img/icons/instagram.svg                   |   1 [32m+[m
 public/img/icons/logo_blanco.svg                 |   1 [32m+[m
 public/img/icons/mail.svg                        |   1 [32m+[m
 public/img/icons/rueda.svg                       |   1 [32m+[m
 public/img/icons/telefono.svg                    |   1 [32m+[m
 public/img/icons/twitter.svg                     |   1 [32m+[m
 public/img/icons/ubicacion.svg                   |   1 [32m+[m
 public/img/icons/youtube.svg                     |   1 [32m+[m
 public/img/resources/login_register.jpg          | Bin [31m0[m -> [32m227446[m bytes
 resources/views/auth/login.blade.php             |  69 [32m++[m[31m---[m
 resources/views/auth/register.blade.php          |  70 [32m+++[m[31m--[m
 resources/views/includes/footer.blade.php        |  91 [32m++++++[m
 resources/views/includes/header.blade.php        | 220 [32m++++++++++++++[m
 resources/views/layouts/master.blade.php         |  42 [32m+++[m
 22 files changed, 861 insertions(+), 57 deletions(-)

[33mcommit b2e9cceda2a40bb669dae5f917ded24c74de3bdd[m
Author: Lucas <luka_182@hotmail.es>
Date:   Sun Feb 23 19:49:06 2020 -0300

    Migration database

 .../2014_10_12_000000_create_users_table.php       |     9 [32m+[m[31m-[m
 .../2015_04_04_000010_create_provinces_table.php   |    22 [32m+[m
 .../2015_04_04_000020_create_cities_table.php      |    25 [32m+[m
 .../2020_02_21_230803_tabla_categories.php         |     4 [32m+[m[31m-[m
 .../2020_02_21_232911_table_gallery.php            |     6 [32m+[m[31m-[m
 .../2020_02_22_001152_create_color_table.php       |     4 [32m+[m[31m-[m
 ...0_02_22_002038_create_product_details_table.php |     6 [32m+[m[31m-[m
 ...020_02_22_003702_create_sales_details_table.php |    10 [32m+[m[31m-[m
 .../2020_02_22_182258_create_states_table.php      |    31 [32m+[m
 .../2020_02_22_182528_create_favorites_table.php   |    32 [32m+[m
 ..._02_22_183125_create_payments_methods_table.php |    31 [32m+[m
 .../2020_02_22_203332_create_brands_table.php      |    31 [32m+[m
 ...0_02_22_205429_create_colors_products_table.php |    32 [32m+[m
 .../2020_02_22_205850_create_roles_table.php       |    31 [32m+[m
 .../2020_02_22_210708_create_products_table.php    |    38 [32m+[m
 .../2020_02_23_215947_create_shipments_table.php   |    31 [32m+[m
 .../2020_02_22_002647_foreign_table.php            |   109 [32m+[m
 .../2020_02_22_002647_foreign_table.php            |    42 [31m-[m
 database/seeds/CitiesTableSeeder.php               | 13600 [32m+++++++++++++++++++[m
 database/seeds/ProvincesTableSeeder.php            |    42 [32m+[m
 20 files changed, 14077 insertions(+), 59 deletions(-)

[33mcommit dcebe7c8b8a686e07d7cf269b1d937ae77e8a9bb[m
Author: unknown <sebastianaustrich@gmail.com>
Date:   Fri Feb 21 21:49:14 2020 -0300

    creacion de tablas base de datos migration en laravel

 ...0_02_22_002038_create_product_details_table.php | 35 [32m++++++++++++++++++[m
 ...020_02_22_003702_create_sales_details_table.php | 38 [32m++++++++++++++++++++[m
 .../2020_02_21_230803_tabla_categories.php         | 33 [32m+++++++++++++++++[m
 .../2020_02_21_232911_table_gallery.php            | 35 [32m++++++++++++++++++[m
 .../2020_02_22_001152_create_color_table.php       | 32 [32m+++++++++++++++++[m
 .../2020_02_22_002647_foreign_table.php            | 42 [32m++++++++++++++++++++++[m
 6 files changed, 215 insertions(+)

[33mcommit 225fd575d37d2f690be4f85f181993eb04c599dc[m
Author: unknown <sebastianaustrich@gmail.com>
Date:   Fri Feb 21 19:44:57 2020 -0300

    env

 .env       | 46 [32m++++++++++++++++++++++++++++++++++++++++++++++[m
 .gitignore |  1 [31m-[m
 2 files changed, 46 insertions(+), 1 deletion(-)

[33mcommit 2180ae4e7eb7b38a21c663e74702165dd3dc046a[m
Author: unknown <sebastianaustrich@gmail.com>
Date:   Fri Feb 21 19:26:35 2020 -0300

    auth

 .env.example     | 46 [31m----------------------------------------------[m
 composer.lock    | 10 [32m+++++[m[31m-----[m
 public/index.php |  3 [32m++[m[31m-[m
 3 files changed, 7 insertions(+), 52 deletions(-)

[33mcommit df8b77c1ab8269725e5d2380d7dd28ae4abe77e4[m
Author: Lucas <luka_182@hotmail.es>
Date:   Thu Feb 20 20:52:09 2020 -0300

    agregado de auth

 app/Http/Controllers/HomeController.php          |    28 [32m+[m
 composer.json                                    |     3 [32m+[m[31m-[m
 composer.lock                                    |    56 [32m+[m[31m-[m
 package-lock.json                                | 10053 [32m+++++[m
 package.json                                     |     9 [32m+[m[31m-[m
 public/css/app.css                               | 10886 [32m+++++[m
 public/js/app.js                                 | 49670 [32m+++++++++++++++++++++[m
 public/mix-manifest.json                         |     4 [32m+[m
 resources/js/app.js                              |    31 [32m+[m
 resources/js/bootstrap.js                        |    15 [32m+[m[31m-[m
 resources/js/components/ExampleComponent.vue     |    23 [32m+[m
 resources/sass/_variables.scss                   |    19 [32m+[m
 resources/sass/app.scss                          |     9 [32m+[m[31m-[m
 resources/views/auth/login.blade.php             |    73 [32m+[m
 resources/views/auth/passwords/confirm.blade.php |    49 [32m+[m
 resources/views/auth/passwords/email.blade.php   |    47 [32m+[m
 resources/views/auth/passwords/reset.blade.php   |    65 [32m+[m
 resources/views/auth/register.blade.php          |    77 [32m+[m
 resources/views/auth/verify.blade.php            |    28 [32m+[m
 resources/views/home.blade.php                   |    23 [32m+[m
 resources/views/layouts/app.blade.php            |    80 [32m+[m
 routes/web.php                                   |     8 [32m+[m
 webpack.mix.js                                   |     2 [32m+[m[31m-[m
 23 files changed, 71251 insertions(+), 7 deletions(-)

[33mcommit 51ded6b14d7a75ffa3466fffd58be7b725368805[m
Author: Lucas <luka_182@hotmail.es>
Date:   Thu Feb 20 18:25:47 2020 -0300

    laravel

 .editorconfig                                      |   15 [32m+[m
 .env.example                                       |   46 [32m+[m
 .gitattributes                                     |    5 [32m+[m
 .gitignore                                         |   12 [32m+[m
 .styleci.yml                                       |   13 [32m+[m
 README.md                                          |   78 [32m+[m
 app/Console/Kernel.php                             |   42 [32m+[m
 app/Exceptions/Handler.php                         |   55 [32m+[m
 .../Controllers/Auth/ConfirmPasswordController.php |   40 [32m+[m
 .../Controllers/Auth/ForgotPasswordController.php  |   22 [32m+[m
 app/Http/Controllers/Auth/LoginController.php      |   40 [32m+[m
 app/Http/Controllers/Auth/RegisterController.php   |   73 [32m+[m
 .../Controllers/Auth/ResetPasswordController.php   |   30 [32m+[m
 .../Controllers/Auth/VerificationController.php    |   42 [32m+[m
 app/Http/Controllers/Controller.php                |   13 [32m+[m
 app/Http/Kernel.php                                |   82 [32m+[m
 app/Http/Middleware/Authenticate.php               |   21 [32m+[m
 app/Http/Middleware/CheckForMaintenanceMode.php    |   17 [32m+[m
 app/Http/Middleware/EncryptCookies.php             |   17 [32m+[m
 app/Http/Middleware/RedirectIfAuthenticated.php    |   27 [32m+[m
 app/Http/Middleware/TrimStrings.php                |   18 [32m+[m
 app/Http/Middleware/TrustProxies.php               |   23 [32m+[m
 app/Http/Middleware/VerifyCsrfToken.php            |   24 [32m+[m
 app/Providers/AppServiceProvider.php               |   28 [32m+[m
 app/Providers/AuthServiceProvider.php              |   30 [32m+[m
 app/Providers/BroadcastServiceProvider.php         |   21 [32m+[m
 app/Providers/EventServiceProvider.php             |   34 [32m+[m
 app/Providers/RouteServiceProvider.php             |   80 [32m+[m
 app/User.php                                       |   39 [32m+[m
 artisan                                            |   53 [32m+[m
 bootstrap/app.php                                  |   55 [32m+[m
 bootstrap/cache/.gitignore                         |    2 [32m+[m
 composer.json                                      |   61 [32m+[m
 composer.lock                                      | 4994 [32m++++++++++++++++++++[m
 config/app.php                                     |  231 [32m+[m
 config/auth.php                                    |  117 [32m+[m
 config/broadcasting.php                            |   59 [32m+[m
 config/cache.php                                   |  103 [32m+[m
 config/database.php                                |  147 [32m+[m
 config/filesystems.php                             |   69 [32m+[m
 config/hashing.php                                 |   52 [32m+[m
 config/logging.php                                 |  104 [32m+[m
 config/mail.php                                    |  136 [32m+[m
 config/queue.php                                   |   88 [32m+[m
 config/services.php                                |   33 [32m+[m
 config/session.php                                 |  199 [32m+[m
 config/view.php                                    |   36 [32m+[m
 database/.gitignore                                |    2 [32m+[m
 database/factories/UserFactory.php                 |   28 [32m+[m
 .../2014_10_12_000000_create_users_table.php       |   36 [32m+[m
 ...4_10_12_100000_create_password_resets_table.php |   32 [32m+[m
 .../2019_08_19_000000_create_failed_jobs_table.php |   35 [32m+[m
 database/seeds/DatabaseSeeder.php                  |   16 [32m+[m
 package.json                                       |   21 [32m+[m
 phpunit.xml                                        |   37 [32m+[m
 public/.htaccess                                   |   21 [32m+[m
 public/favicon.ico                                 |    0
 public/index.php                                   |   60 [32m+[m
 public/robots.txt                                  |    2 [32m+[m
 public/web.config                                  |   28 [32m+[m
 resources/js/app.js                                |    1 [32m+[m
 resources/js/bootstrap.js                          |   28 [32m+[m
 resources/lang/en/auth.php                         |   19 [32m+[m
 resources/lang/en/pagination.php                   |   19 [32m+[m
 resources/lang/en/passwords.php                    |   22 [32m+[m
 resources/lang/en/validation.php                   |  151 [32m+[m
 resources/sass/app.scss                            |    1 [32m+[m
 resources/views/welcome.blade.php                  |  100 [32m+[m
 routes/api.php                                     |   18 [32m+[m
 routes/channels.php                                |   16 [32m+[m
 routes/console.php                                 |   18 [32m+[m
 routes/web.php                                     |   16 [32m+[m
 server.php                                         |   21 [32m+[m
 storage/app/.gitignore                             |    3 [32m+[m
 storage/app/public/.gitignore                      |    2 [32m+[m
 storage/framework/.gitignore                       |    8 [32m+[m
 storage/framework/cache/.gitignore                 |    3 [32m+[m
 storage/framework/cache/data/.gitignore            |    2 [32m+[m
 storage/framework/sessions/.gitignore              |    2 [32m+[m
 storage/framework/testing/.gitignore               |    2 [32m+[m
 storage/framework/views/.gitignore                 |    2 [32m+[m
 storage/logs/.gitignore                            |    2 [32m+[m
 tests/CreatesApplication.php                       |   22 [32m+[m
 tests/Feature/ExampleTest.php                      |   21 [32m+[m
 tests/TestCase.php                                 |   10 [32m+[m
 tests/Unit/ExampleTest.php                         |   18 [32m+[m
 webpack.mix.js                                     |   15 [32m+[m
 87 files changed, 8386 insertions(+)

[33mcommit e6bdc11e2156e3fbc2fec0cbfd9d226e46940d91[m
Author: DvLucas <57802520+DvLucas@users.noreply.github.com>
Date:   Wed Feb 19 23:16:03 2020 -0300

    Create asd

 asd | 1 [32m+[m
 1 file changed, 1 insertion(+)
