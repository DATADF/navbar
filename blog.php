<?php /* template name: blog */ ?>

<?php get_header(); ?>
 
<body data-spy='scroll' data-target='#scroll' data-offset="100">

    <!-- nav -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="image/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler"><i class="fas fa-bars"></i></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#cat01">Categoria 01</a>
                            <a class="dropdown-item" href="#cat02">Categoria 02</a>
                            <a class="dropdown-item" href="">Categoria 03</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav -->

    <section class="py-5">
        <div class="container">
            <hr>
            <h2 class="py-5"><strong class="text-primary">My</strong> Personal <strong class="text-primary">Blog</strong></h2>
            <hr>

            <div class="row">
                <div class="container">
                    <div class="flex-container">

                        <!-- Start Articles -->
                        <div class="articles">
                            <article class="article">
                                <a href="single.html"><h3>Lorem ipsum dolor sit amet consectetur.</h3></a>
                                <small><p>Date: 23/07/2019</p></small>
                                <small>
                                    <p>Categories: <a href="#">tecnology</a> / <a href="#">server</a></p>
                                </small>
                                <small>
                                    <p>Tags: <a href="#">hd</a> / <a href="#">cloud</a></p>
                                </small>
                                <figure>
                                    <img src="http://lorempixel.com/1200/400/technics/" alt="image article">
                                </figure>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, molestias hic laborum quis similique ipsam, officiis et eaque necessitatibus voluptatem praesentium blanditiis porro harum tempore impedit a assumenda minima numquam...</p>
                                <a class="btn my-btn-primary" href="single.html">read more</a>
                            </article>

                            <article class="article">
                                <a href="#">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                </a>
                                <small>
                                    <p>Date: 23/07/2019</p>
                                </small>
                                <small>
                                    <p>Categories: <a href="#">tecnology</a> / <a href="#">server</a></p>
                                </small>
                                <small>
                                    <p>Tags: <a href="#">hd</a> / <a href="#">cloud</a></p>
                                </small>
                                <figure>
                                    <img src="http://lorempixel.com/1200/400/technics/2/" alt="image article">
                                </figure>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut molestias, doloribus quod quia minima ex eligendi eius excepturi dolore sed voluptates illum? Dolorum ex amet suscipit architecto error!..</p>
                                <a class="btn my-btn-primary" href="#">read more</a>
                            </article>

                            <article class="article">
                                <a href="#">
                                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                                </a>
                                <small>
                                    <p>Date: 23/07/2019</p>
                                </small>
                                <small>
                                    <p>Categories: <a href="#">tecnology</a> / <a href="#">server</a></p>
                                </small>
                                <small>
                                    <p>Tags: <a href="#">hd</a> / <a href="#">cloud</a></p>
                                </small>
                                <figure>
                                    <img src="http://lorempixel.com/1200/400/technics/3/" alt="image article">
                                </figure>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga iusto itaque, qui dolore atque quo minus sequi, mollitia labore veritatis vitae quasi odit, earum quam...</p>
                                <a class="btn my-btn-primary" href="#">read more</a>
                            </article>

                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Articles -->


                        <!-- Start Aside -->
                        <aside class="sidebar">
                            <div class="marketing">
                                <h2>Publicidade</h2>
                                <figure>
                                    <img src="http://lorempixel.com/300/450/sports/" alt="">
                                </figure>
                            </div>
                            <div class="last-posts">
                                <h2>latest articles</h2>

                                <div>
                                    <a href="single.html"><small>01. </small>Consectetur adipisicing elit. Alias, non.</a>
                                    <a href="single.html"><small>02. </small>Totam corporis veritatis magnam.</a>
                                    <a href="single.html"><small>03. </small>Excepturi neque libero aliquam deleniti amet animi distinctio reiciendis.</a>
                                    <a href="single.html"><small>04. </small>Lorem, ipsum dolor.</a>
                                    <a href="single.html"><small>05. </small>Amet consectetur adipisicing elit.</a>
                                </div>
                            </div>
                        </aside>
                        <!-- End Aside -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Footer -->
    <section id="footer" class="text-light footer">
        <div class="container">
            <small>&#169; koli.tech 2019</small>
        </div>
    </section>
    <!-- End Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/scroll-suave.js"></script>
  </body>
</html>