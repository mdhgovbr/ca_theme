<?php get_header(); ?>

    <div class="box-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-internal">
                        <p><a href="<?php echo get_site_url(); ?>/category/conversas"><span>«</span> Conversas</a></p>
                    </div>
                    <!--/.title-internal-->
                </div>

            </div>
        </div>
    </div>

    <div class="content">
        <div class="featured-box">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <h1><span>Tema:</span> <?php the_title() ?></h1>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="featured-content">
                                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                                    <li data-target="#quote-carousel" data-slide-to="3"></li>
                                    <li data-target="#quote-carousel" data-slide-to="4"></li>
                                    <li data-target="#quote-carousel" data-slide-to="5"></li>
                                    <li data-target="#quote-carousel" data-slide-to="6"></li>
                                </ol>

                                    <!-- Carousel Slides / Quotes -->
                                    <div class="carousel-inner">

                                    <!-- Quote 1 -->
                                    <div class="item active">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_1'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_1'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_1'); ?>">
                                                        <a href="<?php the_field('link_slide_1'); ?>" role="presentation" target="_blank">
                                                        <?php the_field('link_slide_1'); ?></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <!-- Quote 2 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_2'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_2'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_2'); ?>">
                                                        <a href="<?php the_field('link_slide_2'); ?>" role="presentation" target="_blank">
                                                            <?php the_field('link_slide_2'); ?>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <!-- Quote 3 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_3'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_3'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_3'); ?>">
                                                        <a href="<?php the_field('link_slide_3'); ?>" role="presentation" target="_blank">
                                                            <?php the_field('link_slide_3'); ?>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <!-- Quote 4 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_4'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_4'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_4'); ?>">
                                                        <a href="<?php the_field('link_slide_4'); ?>" role="presentation" target="_blank">
                                                            <?php the_field('link_slide_4'); ?>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <!-- Quote 5 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_5'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_5'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_5'); ?>">
                                                        <a href="<?php the_field('link_slide_5'); ?>" role="presentation" target="_blank">
                                                            <?php the_field('link_slide_5'); ?>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                     <!-- Quote 6 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_6'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_6'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_6'); ?>">
                                                        <a href="<?php the_field('link_slide_6'); ?>" role="presentation" target="_blank">
                                                        <?php the_field('link_slide_6'); ?></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <!-- Quote 7 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <img src="<?php the_field('imagem_slide_7'); ?>" class="img-responsive">
                                                </div>
                                                <div class="col-sm-12 col-xs-12 text-center">
                                                    <p>
                                                        <?php the_field('frase_slide_7'); ?>
                                                    </p>
                                                    <span class="<?php the_field('fonte_da_informacao_slide_7'); ?>">
                                                        <a href="<?php the_field('link_slide_7'); ?>" role="presentation" target="_blank">
                                                            <?php the_field('link_slide_7'); ?>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                            </div>

                                            <!-- Carousel Buttons Next/Prev -->
                                            <!--<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>-->
                                        </div>

                                        <!-- Conversa section -->
                                        <section class="section conversa" id="conversa">

                                            <div class="row">
                                                <div class="col-md-12 board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#escuta" aria-controls="escuta" role="tab" data-toggle="tab" title="Opine">
                                                                    <span class="round-tabs one">
                              <span>1</span>
                                                                    <h3 class="head text-center">Opine</h3>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#dialogo" aria-controls="dialogo" role="tab" data-toggle="tab" title="Diálogo">
                                                                    <span class="round-tabs two">
                                                       <span>2</span>
                                                                    <h3 class="head text-center">Diálogo</h3>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#resposta" aria-controls="resposta" role="tab" data-toggle="tab" title="Resposta">
                                                                    <span class="round-tabs three">
                        <span>3</span>
                                                                    <h3 class="head text-center">Resposta</h3>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="escuta">
                                                            <?php the_field('campo_opine'); ?>

                                                        </div>
                                                        <div class="tab-pane fade" id="dialogo">
                                                            <?php the_field('campo_dialogo'); ?>

                                                        </div>
                                                        <div class="tab-pane fade" id="resposta">
                                                            <?php the_field('campo_resposta'); ?>

                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>

                                                </div>
                                            </div>

                                            <span class="share-item"><span>Divulgue!</span> <?php echo do_shortcode('[Sassy_Social_Share style=""]') ?></span>


                                        </section>
                                        <!-- /conversa -->
                                    </div>

                                </div>
                                <!-- /.content-featured-->

                            </div>
                            <!-- /.row-->
                    </div>
                    <!-- /.container-->

                    <?php endwhile; else: ?>
                        <h2>Nada Encontrado</h2>
                        <p>Erro 404</p>
                        <?php endif; ?>

                </div>
                <!-- /.row-->
            </div>
            <!-- /.container-->

        </div>
        <!-- /.featured-box -->

        <?php get_footer(); ?>
