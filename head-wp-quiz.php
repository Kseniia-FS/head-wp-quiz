     <div class="main container">
        <div class="main__info">
          <?php if(get_field('selected')): ?>
          <div class="main__subtitle wow fadeInUp">
            <span class="main__subtitle--skew">
              <?php echo get_field('selected') ?>
            </span>
          </div>
          <?php endif ?>
          <h1 class="main__title wow fadeInUp">
          <?php echo get_field('title') ?>
          </h1>
			
			
			    <h3 class="main__title" style="font-size: 1.9rem;">
          <?php echo get_field('titlepod2') ?>
          </h3>
			

          <?php if (get_field('main_adv')): ?>
            <div class="main__advantages">
              <?php $advantages = get_field('main_adv');
              foreach ($advantages as $advantage):
              ?>
            <div class="main__advantage wow fadeInUp">
              <img src="<?php echo $advantage['img'] ?>" alt="">
              <p>
                <?php echo $advantage['text'] ?>
              </p>
            </div>
            <?php endforeach ?>
          </div>
          <?php endif ?>
                <h3 class="main__title" style="font-size: 1.9rem;">
          <?php echo get_field('titlepod') ?>
          </h3>
          <div class="main__vid_m">
            <?php echo get_field('iframe') ?>
          </div>
          <div class="main__btn-wrap">
            <button class="main__btn btn" 
                    onclick="
                        <?php if (get_field('quiz_type') == 'closed'): ?>
                         $('#quiz').fadeIn();
                         <?php else :?>
                          $('body, html').animate({scrollTop: $('#quiz_content').offset().top}, 1000);
                          <?php endif;?>
                        <?php if (get_field('metrics', 'options') and get_field('metrics_id', 'options')): ?>
                        ym(<?php echo get_field('metrics_id', 'options')?>,'reachGoal','quiz_start') 
                        <?php endif; ?>
                        "
              >
              <span>
                <span class="main__btn__text">
                <svg class="first" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 21.8 14.1" style="enable-background:new 0 0 21.8 14.1;" xml:space="preserve">
          <style type="text/css">
            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:<?php echo get_field('colorfont', 'options') ?>;}
            .st1{opacity:0.4;fill-rule:evenodd;clip-rule:evenodd;fill:<?php echo get_field('colorfont', 'options') ?>;enable-background:new    ;}
            .st2{opacity:0.25;fill-rule:evenodd;clip-rule:evenodd;fill:<?php echo get_field('colorfont', 'options') ?>;enable-background:new    ;}
          </style>
          <path class="st0" d="M21.8,7.1L21.8,7.1l-6.9,7L13.8,13l5.9-5.9l-5.9-6L14.9,0L21.8,7.1L21.8,7.1z"/>
          <path class="st1" d="M14.9,7.1L14.9,7.1l-6.9,7L6.9,13l5.9-5.9l-5.9-6L8,0L14.9,7.1L14.9,7.1z"/>
          <path class="st2" d="M8,7.1L8,7.1l-6.9,7L0,13l5.9-5.9L0,1.1L1.1,0L8,7.1L8,7.1z"/>
          </svg>
                  <?php echo get_field('btn_text') ?>
                  <svg class="last" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 21.8 14.1" style="enable-background:new 0 0 21.8 14.1;" xml:space="preserve">
          <style type="text/css">
            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:<?php echo get_field('colorfont', 'options') ?>;}
            .st1{opacity:0.4;fill-rule:evenodd;clip-rule:evenodd;fill:<?php echo get_field('colorfont', 'options') ?>;enable-background:new    ;}
            .st2{opacity:0.25;fill-rule:evenodd;clip-rule:evenodd;fill:<?php echo get_field('colorfont', 'options') ?>;enable-background:new    ;}
          </style>
          <path class="st0" d="M21.8,7.1L21.8,7.1l-6.9,7L13.8,13l5.9-5.9l-5.9-6L14.9,0L21.8,7.1L21.8,7.1z"/>
          <path class="st1" d="M14.9,7.1L14.9,7.1l-6.9,7L6.9,13l5.9-5.9l-5.9-6L8,0L14.9,7.1L14.9,7.1z"/>
          <path class="st2" d="M8,7.1L8,7.1l-6.9,7L0,13l5.9-5.9L0,1.1L1.1,0L8,7.1L8,7.1z"/>
          </svg>
                </span>
                <?php if (get_field('btn_text_add')): ?>
                <span class="main__btn__add-text">
                <?php echo get_field('btn_text_add') ?>
                </span>
                <?php endif ?>
              </span>
            </button>
          <p class="main__btn__desc">
              <img src="<?php echo QUIZ_IMG_PATH ?>clock.png" alt="">
              Займет не<br>
              больше <span class="fw-medium">1 минуты</span>
            </p>
          </div>
        </div>
        <div class="main__vid">
        <?php echo get_field('iframe') ?>
        </div>
      </div>
