@extends('layout.Platilla')

@section('css')
    <link rel="stylesheet" href="static/assets/css/tarjetas.css">
@endsection
@section('presentacion')
    <div id="page-wrapper">

        <!-- Header -->
        <section id="header">
            
            <div id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-12-medium">

                            <!-- Banner Copy -->
                            <p>Trenes de Carretera</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features">
            <div class="container">
                <h2>Conoce los vehículos que te ofrecemos!</h2><br>
                <div class="row">

                    <!-- flip-card-container #1-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/tren-carretera.jpg" />
                                    <figcaption>Tren de Carretera</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/tren-carretera.jpg" />
                                </figure>

                                <button>Reerva !</button>

                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #2-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/TrenCarretera1.jpg">
                                    <figcaption>Tren de Carretera</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/TrenCarretera1.jpg">
                                </figure>

                                <button>Reserva !</button>

                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #3-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Tren-de-carretera-2.jpg">
                                    <figcaption>Trenes de carretera</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <!-- only if the image is necessary -->
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Tren-de-carretera-2.jpg">
                                </figure>

                                <button>Reserva !</button>

                                <!-- can add svg here and remove these eight spans -->
                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                </div>
        </section>

        @endsection