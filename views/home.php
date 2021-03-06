
    <!-- Preloader-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader -->

    <?php
    require_once 'template/menu.php';
    ?>

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(assets/img/bg-img/1.png);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Conecta<br>Academico</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Salão Azul, P1, UFRRJ</h6>
                                <!-- POR ENQUANTO SEM NECESSIDADE
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn confer-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                              -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center"  id="inscricao">
                    <div class="col-12 col-md-3">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6>08/10/2019</h6>
                            <h4>Conte cada segundo até o evento</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                    <div class="col-12">
                        <div class="section-heading-2 text-center wow fadeInUp inscricao-titulo" data-wow-delay="300ms">
                            <h4>Inscreva-se</h4>
                        </div>
                    </div>
                    <div class="contact_form">
                        <form action="<?php echo BASE_URL; ?>/home/inscricao" method="post" id="main_contact_form">
                            <div class="contact_input_area">
                                <div id="success_fail_info">
                                  <?php
                                    if(isset($_SESSION['inscricao']['message'])){
                                      echo $_SESSION['inscricao']['message'];
                                      unset($_SESSION['inscricao']['message']);
                                    }
                                  ?>
                                </div>
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                          <?php
                                          if(isset($_SESSION['inscricao']['name'])){
                                            echo '<small class="form-text text-muted">';
                                            echo $_SESSION['inscricao']['name'];
                                            echo '</small>';
                                            unset($_SESSION['inscricao']['name']);
                                          }
                                          ?>
                                          <input type="text" class="form-control mb-30 inscricao" name="name" id="name" placeholder="Seu Nome Completo" value="<?php echo isset($_SESSION['inscricao_'])? $_SESSION['inscricao_']['name'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                          <?php
                                          if(isset($_SESSION['inscricao']['email'])){
                                            echo '<small class="form-text text-muted">';
                                            echo $_SESSION['inscricao']['email'];
                                            echo '</small>';
                                            unset($_SESSION['inscricao']['email']);
                                          }
                                          ?>
                                          <input type="email" class="form-control mb-30 inscricao" name="email" id="email" placeholder="E-mail" value="<?php echo isset($_SESSION['inscricao_'])? $_SESSION['inscricao_']['email'] : '' ?>">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="form-group">
                                          <?php
                                          if(isset($_SESSION['inscricao']['instituicao'])){
                                            echo '<small class="form-text text-muted">';
                                            echo $_SESSION['inscricao']['instituicao'];
                                            echo '</small>';
                                            unset($_SESSION['inscricao']['instituicao']);
                                          }
                                          ?>
                                          <select class="form-control mb-30 inscricao" id="instituicao" name="instituicao">
                                              <option value="0" disabled selected>Selecione a Instituição</option>
                                              <option value='1' <?php echo isset($_SESSION['inscricao_']['instituicao']) && $_SESSION['inscricao_']['instituicao'] == 1? 'selected' : '' ?>>UFRRJ - Seropédica</option>
                                              <option value="2" <?php echo isset($_SESSION['inscricao_']['instituicao']) && $_SESSION['inscricao_']['instituicao'] == 2? 'selected' : '' ?>>UFRRJ - Nova Iguaçu</option>
                                              <option value="3" <?php echo isset($_SESSION['inscricao_']['instituicao']) && $_SESSION['inscricao_']['instituicao'] == 3? 'selected' : '' ?>>Outra</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4">
                                      <div class="form-group">
                                        <?php
                                        if(isset($_SESSION['inscricao']['sex'])){
                                          echo '<small class="form-text text-muted">';
                                          echo $_SESSION['inscricao']['sex'];
                                          echo '</small>';
                                          unset($_SESSION['inscricao']['sex']);
                                        }
                                        ?>
                                        <select class="form-control mb-30 inscricao" id="sex" name="sex">
                                          <option value="0" disabled selected>Sexo</option>
                                          <option value="1" <?php echo isset($_SESSION['inscricao_']['sex']) && $_SESSION['inscricao_']['sex'] == 1? 'selected' : '' ?>>Masculino</option>
                                          <option value="2" <?php echo isset($_SESSION['inscricao_']['sex']) && $_SESSION['inscricao_']['sex'] == 2? 'selected' : '' ?>>Feminino</option>
                                          <option value="3" <?php echo isset($_SESSION['inscricao_']['sex']) && $_SESSION['inscricao_']['sex'] == 3? 'selected' : '' ?>>Outro</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="form-group">
                                          <?php
                                          if(isset($_SESSION['inscricao']['matricula'])){
                                            echo '<small class="form-text text-muted">';
                                            echo $_SESSION['inscricao']['matricula'];
                                            echo '</small>';
                                            unset($_SESSION['inscricao']['matricula']);
                                          }
                                          ?>
                                          <input type="number" class="form-control inscricao" name="matricula" id="matricula" placeholder="Matrícula" value="<?php echo isset($_SESSION['inscricao_'])? $_SESSION['inscricao_']['matricula'] : '' ?>">
                                        </div>
                                        <div class="form-group inscricao">
                                          <div class="form-check mb-30">
                                              <input class="form-check-input" name="matricula-checkbox" type="checkbox" id="gridCheck">
                                              <label class="form-check-label form-control-sm" for="gridCheck">Não possuo matrícula na UFRRJ</div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn confer-btn">Inscrever-se <i class="zmdi zmdi-long-arrow-right"></i></button>
                                    </div>
                                    <?php
                                      if(isset($_SESSION['inscricao_'])){
                                        unset($_SESSION['inscricao_']);
                                      }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" id="palestrantes" style="background-image: url(assets/img/bg-img/3.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Conecta 2019</p>
                        <h4>Nossos palestrantes</h4>
                    </div>
                </div>
            </div>

            <h1 class="text-center" style="color: white">Em breve os palestrantes confirmados!!!</h1>
        </div>
    </section>
    <!-- Our Speakings Area End -->

    <!-- Our Schedule Area Start -->
    <section id="calendario" class="our-schedule-area section-padding-100">
        <div class="container">
            <h1 class="text-center" style="color: white">Em breve as palestras confirmadas!!!</h1>
        </div>
    </section>
    <!-- Our Schedule Area End -->

    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(assets/img/bg-img/14.jpg);">
    </section>
    <!-- Our Ticket Pricing Table Area End -->

    <!-- Our Sponsor And Client Area Start -->
    <section id="patrocinadores" class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Parceiros &amp; Patrocinadores</p>
                        <h4>Patrocinadores oficiais</h4>
                    </div>
                </div>
            </div>

            <h1 class="text-center" style="color: white">A confirmar!!!</h1>
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->

    <!-- Our Blog Area Start -->
    <section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(assets/img/bg-img/17.jpg);">

    </section>
    <!-- Our Blog Area End -->

    <!-- Contact Area Start -->
    <section id="contato" class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Perguntas?</p>
                        <h4>Entre em contato</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Endereço:</p>
                            <h6>Universidade Federal Rural do Rio de Janeiro<br />
                              BR-465, Km 7 Seropédica-Rio de Janeiro<br />
                              CEP: 23.897-000</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>conectaufrrj@gmail.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="<?php echo BASE_URL; ?>/home/formulario" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info">
                                      <?php
                                        if(isset($_SESSION['contact'])){
                                          echo $_SESSION['contact']['message'];
                                          unset($_SESSION['contact']);
                                        }
                                      ?>
                                    </div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <?php
                                                if(isset($_SESSION['error']['name'])){
                                                  echo '<small class="form-text text-muted">';
                                                  echo $_SESSION['error']['name'];
                                                  echo '</small>';
                                                  unset($_SESSION['error']['name']);
                                                }
                                                ?>
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Seu Nome" value="<?php echo isset($_SESSION['form'])? $_SESSION['form']['name'] : '' ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <?php
                                                if(isset($_SESSION['error']['lastname'])){
                                                  echo '<small class="form-text text-muted">';
                                                  echo $_SESSION['error']['lastname'];
                                                  echo '</small>';
                                                  unset($_SESSION['error']['lastname']);
                                                }
                                                ?>
                                                <input type="text" class="form-control mb-30" name="lastname" id="lastname" placeholder="Sobrenome" value="<?php echo isset($_SESSION['form'])? $_SESSION['form']['lastname'] : '' ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <?php
                                                if(isset($_SESSION['error']['email'])){
                                                  echo '<small class="form-text text-muted">';
                                                  echo $_SESSION['error']['email'];
                                                  echo '</small>';
                                                  unset($_SESSION['error']['email']);
                                                }
                                                ?>
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" value="<?php echo isset($_SESSION['form'])? $_SESSION['form']['email'] : '' ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <?php
                                                if(isset($_SESSION['error']['subject'])){
                                                  echo '<small class="form-text text-muted">';
                                                  echo $_SESSION['error']['subject'];
                                                  echo '</small>';
                                                  unset($_SESSION['error']['subject']);
                                                }
                                                ?>
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Assunto" value="<?php echo isset($_SESSION['form'])? $_SESSION['form']['subject'] : '' ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <?php
                                                if(isset($_SESSION['error']['message'])){
                                                  echo '<small class="form-text text-muted">';
                                                  echo $_SESSION['error']['message'];
                                                  echo '</small>';
                                                  unset($_SESSION['error']['message']);
                                                }
                                                ?>
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Sua mensagem *"><?php echo isset($_SESSION['form'])? $_SESSION['form']['message'] : '' ?></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Enviar Mensagem <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                        <?php
                                          if(isset($_SESSION['form'])){
                                            unset($_SESSION['form']);
                                          }
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
