@extends('layouts.master')

@section('content')

    

        <div class="jumbotron header-faq">
            <div class="row container col-md-12 h-100 justify-content-center m-0">

                <h2 class="text-white my-auto titulos-importantes">
                    <strong>
                        PREGUNTAS FRECUENTES
                    </strong>
                </h2>

            </div>
        </div>

        <div class="container mb-4">



            <div class="row card-faq">

                <div class="col">

                    <div id="acordion" role="tablist" aria-multiselectable="true">

                        <div class="card">
                            <div class="card-header" role="tab" id="heading1">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse1" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse1">
                                        ¿Como me puedo enterar de las nuevas ofertas?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse1" class="collapse  texto-parrafo" role="tabpanel" aria-labelledby="heading1">
                                <div class="card-block">
                                    A traves de la pagina web o visitandonos en la tienda.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading2">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse2" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse2">
                                        ¿Como puedo financiar mis compras?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse2" class="collapse texto-parrafo " role="tabpanel" aria-labelledby="heading2">
                                <div class="card-block">
                                    Con el objetivo de adecuarnos a las necesidades de cada cliente, tenemos diferentes
                                    planes de financiacion. Las condiciones de cada financiacion varian dependiendo de los
                                    terminos en los que se tramita.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading3">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse3" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse3">
                                        ¿Que formas de pago puedo elegir?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse3" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading3">
                                <div class="card-block">
                                    En efectivo, con tarjeta o con financiacion.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading4">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse4" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse4">
                                        ¿Puedo ser medido para determinar la talla correcta de cuadro para mi?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse4" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading4">
                                <div class="card-block">
                                    Si. Medimos tu altura, asÃ­ como la distancia de la entrepierna hasta el suelo. De esta
                                    manera somos capaces de calcular y determinar que talla de cuadro es la mejor para ti,
                                    dependiendo del modelo seleccionado.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading5">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse5" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse5">
                                        Â¿Puedo probar las bicicletas en la tienda?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse5" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading5">
                                <div class="card-block">
                                    Si. Disponemos de un espacio en frente de la tienda donde podrÃ¡s probarla
                                    tranquilamente.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading6">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse6" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse6">
                                        Â¿El uso de casco es obligatorio?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse6" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading6">
                                <div class="card-block">
                                    La Ley de TrÃ¡nsito en su ArtÃ­culo 80 seÃ±ala que: â€œTodo conductor de motocicletas,
                                    motonetas, bicimotos y su acompaÃ±ante deberÃ¡n usar casco protector reglamentario. El uso
                                    de casco protector, en el caso de las bicicletas, serÃ¡ exigible sÃ³lo en las zonas
                                    urbanasâ€.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading7">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse7" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse7">
                                        Â¿En las calles que son paseos peatonales se podrÃ¡ andar en bicicleta?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse7" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading7">
                                <div class="card-block">
                                    No. Los paseos peatonales son de uso exclusivo de los peatones, por lo tanto, en caso de
                                    circular por uno de ellos debes descender de la bicicleta y transitar junto a ella.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading8">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse8" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse8">
                                        Â¿QuÃ© hago cuando descubro una fisura o algÃºn problema con mi bici?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse8" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading8">
                                <div class="card-block">
                                    Ven a la tienda con la bicicleta y te tramitamos la garantÃ­a, en caso de seguir sujeto
                                    al periodo de la misma, siempre y cuando nos sea por una caÃ­da o mal uso. Si es un fallo
                                    que podamos arreglar, trataremos de solucionarlo de inmediato.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->

                        <div class="card">
                            <div class="card-header" role="tab" id="heading9">
                                <h5 class="mb-0 subtitulos">
                                    <a href="#collapse9" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                        aria-controls="collapse9">
                                        Â¿QuÃ© garantÃ­as ofrece NOE?
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse9" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading9">
                                <div class="card-block">
                                    Las garantÃ­as que ofrecemos en NOE van determinadas por nuestros proveedores y marcas
                                    con las que trabajamos. A nivel de taller, si algo que hemos arreglado falla por un
                                    error nuestro y vienes en un plazo lÃ³gico te lo solucionamos sin ningÃºn coste.
                                </div>

                            </div>
                        </div>
                        <!--fin div card -->




                    </div>

                </div>
                <!--fin div col -->

            </div>
            <!--fin div row -->

        </div>
        <!--fin div container -->








@endsection
