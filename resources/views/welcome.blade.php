@extends('layouts.plantilla')

@section('title', 'Bienvenidos a BoomsClean');

@section('content')

<div class="container-full">


    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box bg-primary-light">
                  <div class="box-header no-border" style="background-color: white;">
                      <h4 class="box-title text-primary">Bienvenido a BoomsClean</h4>
                  </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card overflow-hidden">
                    <div class="card-body p-0" dir="ltr">
                        <div id="sales-spark" class="apex-charts"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-6">
                <div class="card overflow-hidden">
                    <div class="card-body p-0" dir="ltr">
                        <div id="profit-spark" class="apex-charts"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-6">
                <div class="card overflow-hidden">
                    <div class="card-body p-0" dir="ltr">
                        <div id="expenses-spark" class="apex-charts"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="row">
                <div class="col-12">
                    <div class="box bg-primary-light">
                      <div class="box-header no-border" style="background-color: white;">
                          <h4 class="box-title text-primary">Redes Sociales</h4>
                      </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="box box-inverse bg-twitter">
                    <div class="box-header no-border">
                      <span class="fa fa-twitter fs-30"></span>
                        <div class="box-tools pull-right">
                          <h5 class="box-title">Ultimos Tweets X</h5>
                        </div>
                    </div>
                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                      <p>¡Tu hogar, tu espacio seguro! ✨

                        Elimina la suciedad y las bacterias con los productos de limpieza de BoomsClean.

                        Compra ahora y disfruta de un hogar más limpio y saludable.

                        #BoomsClean #Limpieza #Hogar #Saludable</p>
                      <div class="flexbox">
                        <time class="text-white" datetime="2023-11-21 20:00">13 Febrero, 2024</time>
                        <span><i class="fa fa-heart"></i> 45</span>
                      </div>
                    </blockquote>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="box box-inverse bg-facebook">
                    <div class="box-header no-border">
                      <span class="fa fa-facebook fs-30"></span>
                        <div class="box-tools pull-right">
                          <h5 class="box-title">Facebook Noticias</h5>
                        </div>
                    </div>

                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                      <p>¿Sabías que un hogar limpio es un hogar más saludable?

                        BoomsClean te ofrece una amplia gama de productos de limpieza para que puedas mantener tu hogar impecable y libre de bacterias.

                        ¡Visita nuestra tienda online y descubre nuestros productos!

                        #BoomsClean #Limpieza #Hogar #Saludable</p>
                      <div class="flexbox">
                        <time class="text-white" datetime="2023-11-21 20:00">13 Febrero, 2024</time>
                        <span><i class="fa fa-heart"></i> 75</span>
                      </div>
                    </blockquote>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="box box-inverse box-carousel slide bg-twitter">
                    <div class="box-header no-border">
                      <span class="fa fa-twitter fs-30"></span>
                        <div class="box-tools pull-right">
                          <h5 class="box-title">Carousel Noticias</h5>
                        </div>
                    </div>
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>¡Dile adiós a la suciedad con BoomsClean!
                                        <br>
                                        1. Limpieza profunda: Elimina la suciedad y las bacterias de todas las superficies de tu hogar.
                                        <br>
                                        2. Productos de alta calidad: Formulados con ingredientes de alta calidad para un mejor rendimiento.</p>
                                    <div class="flexbox">
                                      <time class="text-white" datetime="2023-11-22 20:00">13 Frebreo, 2024</time>
                                      <span><i class="fa fa-heart"></i> 62</span>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>3. Amplia gama de productos: Encuentra el producto perfecto para cada necesidad de limpieza.
                                        <br>
                                        4. Precios accesibles: Limpieza efectiva sin sacrificar tu presupuesto.

                                        </p>
                                    <div class="flexbox">
                                      <time class="text-white" datetime="2023-11-22 20:00">13 Frebreo, 2024</time>
                                      <span><i class="fa fa-heart"></i> 45</span>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>¡Visita nuestra tienda online y descubre todo lo que BoomsClean puede hacer por tu hogar!

                                        #BoomsClean #Limpieza #Hogar #Saludable</p>
                                    <div class="flexbox">
                                      <time class="text-white" datetime="2023-11-22 20:00">13 Frebreo, 2024</time>
                                      <span><i class="fa fa-heart"></i> 65</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
    </section>

</div>


@endsection()
