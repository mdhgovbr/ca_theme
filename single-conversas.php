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
