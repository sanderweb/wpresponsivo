<?php get_header(); ?>

<!--SLIDER BOOTSTRAP-->
<div class="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
       
                <!--    PARA POSTS INFINITO EM 'SHOWPOSTS'=>-1   -->
        <?php
            $args= array('post_type'=>'slider', 'showposts'=>5);
            $my_slider = get_posts( $args );
            $count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
        ?>
      
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?>class="active"<?php endif;?>></li>
        <?php
            $count ++ ;  
            endforeach;
            endif;
        ?>
        
      </ol>
      
      

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      
        <?php            
            $count = 0; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post);
        ?>
       
        <div class="item <?php if ($count == 0) echo "active"; ?>">
            <?php the_post_thumbnail('full'); ?> 
          
          <div class="carousel-caption">
            <h2><?php the_title(); ?></h2>
            <a href="<?php the_field('link_do_slider'); ?>" class="leia-mais">leia mais</a>
          </div>
        </div>
          
        <?php
            $count ++ ;  
            endforeach;
            endif;
        ?> 
           
            
      </div><!--      END CAROUSEL-->
      
      
      

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div><!--FIM SLIDER-->




<!--SERVIÇOS-->
<div class="servicos">  
    <div class="container">
        <div class="row">
           
            <?php
                $args= array('post_type'=>'servicos', 'showposts'=>3);
                $my_servicos = get_posts( $args );
                if($my_servicos) : foreach($my_servicos as $post) : setup_postdata( $post );
            ?>
                
            <div class="col-md-4 col-lg-4">
                <i class="<?php the_field('icones'); ?>"></i>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?><!-- "THE_EXCERPT" EXIBE SÓ UM RESUMO DO TEXTO DE SERVIÇO -->
            </div>
            
            <?php                  
                endforeach;
                endif;
            ?>
            
        </div><!--    FIM ROW-->
    </div><!--FIM CONTAINER-->
</div><!--FIM SERVICOS     -->



<div class="sobre">
    <div class="container">
        <div class="row">
        
            <?php
                $args= array('post_type'=>'page', 'pagename'=>'sobre');
                $my_sobre = get_posts( $args );
                if($my_sobre) : foreach($my_sobre as $post) : setup_postdata( $post );
            ?>

                <div class="col-md-12 col-lg-12">    
                    <h2><?php the_title(); ?></h2>
                </div>


                <div class="col-md-6 col-lg-6">                
                    <?php the_content(); ?><!--MOSTRA TODO O CONTEÚDO-->
                </div>


                <div class="col-md-6 col-lg-6">
                    <?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
                </div>  

            <?php                  
                endforeach;
                endif;
            ?>       
            
        </div><!--        FIM ROW-->
    </div><!--    FIM CONTEINER-->
</div><!--FIM SOBRE-->




<div class="blog">
    <div class="container">
           <h2 class="title-blog">BLOG</h2>
        <div class="row">
            
            <?php
                $args= array('post_type'=>'post', 'showposts'=>3);
                $my_posts = get_posts( $args );
                if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
            ?>
                
            <div class="col-md-4 col-lg-4">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
                </a>
                
                <h2>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a>
                </h2>
                
                <?php the_excerpt(); ?><!-- "THE_EXCERPT" EXIBE SÓ UM RESUMO DO TEXTO DE SERVIÇO -->
            </div>
            
            <?php                  
                endforeach;
                endif;
            ?>
            <div class="clear"></div>
            <div class="link"><a class="leia-mais" href="">VEJA TODOS</a></div>
            
        </div><!--        FIM ROW-->
    </div><!--    FIM CONTAINER-->
</div><!--FIM BLOG-->


<?php get_footer(); ?>