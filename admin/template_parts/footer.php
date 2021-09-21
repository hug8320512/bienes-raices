<footer class="bg-dark pt-12 pb-6 footer text-muted">
    <div class="container container-xxl">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                <a class="d-block mb-2" href="#">
                  <img src="/images/logo-white.png" class="w-200" alt="Inmobiliaria Bozato">
                </a>
                <div class="lh-10 font-weight-500 mt-7">
                  <p class="text-white text-justify"><?php echo $website['about'];?></p>
                </div>
                <div class="lh-10 font-weight-500">
                <p class="mb-0"><?php echo $website['address'];?></p>
                <a class="d-block text-muted hover-white" href="mailto:<?php echo $website['email'];?>"><?php echo $website['email'];?></a>
                <a class="d-block text-lighter font-weight-bold fs-15 hover-white mt-5" href="tel:<?php echo $website['phone'];?>">Teléfono: <?php echo $website['phone'];?></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
              <div class="pl-md-10 pl-sm-0">
                <h4 class="text-white fs-16 my-4 font-weight-500">Navegación</h4>
                <ul class="list-group list-group-flush list-group-no-border">
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/quienes-somos" class="text-muted lh-26 font-weight-500 hover-white">Quienes Somos</a>
                  </li>
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/propiedades-en-venta" class="text-muted lh-26 font-weight-500 hover-white">Propiedades en Venta</a>
                  </li>
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/propiedades-en-renta" class="text-muted lh-26 font-weight-500 hover-white">Propiedades en Renta</a>
                  </li>
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/desarrollos" class="text-muted lh-26 font-weight-500 hover-white">Desarrollos</a>
                  </li>
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/blog" class="text-muted lh-26 font-weight-500 hover-white">Blog</a>
                  </li>
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/contacto" class="text-muted lh-26 font-weight-500 hover-white">Contacto</a>
                  </li>
                  <li class="list-group-item bg-transparent p-0">
                    <a href="/aviso-de-privacidad" class="text-muted lh-26 font-weight-500 hover-white">Aviso de Privacidad</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                <ul class="list-inline mb-0">
                  <?php if($website['facebook']):?>
                    <li class="list-inline-item mr-0">
                        <a href="<?php echo $website['facebook'];?>" class="text-white opacity-3 fs-15 px-2 opacity-hover-10"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <?php endif;?>

                    <?php if($website['instagram']):?>
                    <li class="list-inline-item mr-0">
                        <a href="<?php echo $website['instagram'];?>" class="text-white opacity-3 fs-15 px-2 opacity-hover-10"><i class="fab fa-instagram"></i></a>
                    </li>
                    <?php endif;?>

                    <?php if($website['youtube']):?>
                    <li class="list-inline-item mr-0">
                        <a href="<?php echo $website['youtube'];?>" class="text-white opacity-3 fs-15 px-2 opacity-hover-10"><i class="fab fa-youtube"></i></a>
                    </li>
                    <?php endif;?>
                </ul>
                <h4 class="text-white fs-16 my-4 font-weight-500">Newsletter</h4>
                <p class="font-weight-500 text-muted lh-184">Suscribite para recibir nuestro contenido</p>
                <form class="ajax-form" method="post" action="/contacto/newsletter/" novalidate>
                    <div class="input-group input-group-lg mb-6">
                        <input type="email" name="widget-subscribe-form-email" class="form-control bg-white shadow-none border-0 z-index-1" placeholder="Tu Correo" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Suscribirse</button>
                        </div>
                    </div>
                </form>

                <p class="col-md-auto text-gray-light2 mb-0 mt-7 p-0">Desarrollado por <a target="_blank" href="https://klosing.mx"><img style="width:150px;" class="ml-2" alt="Logo Klosing" src="https://klosing.mx/static/brand/logo_white.svg"></a></p>
            </div>
        </div>

        <div class="col-md-12 mt-5" id="copyright">
          <p class="col-md-auto mb-0 text-muted text-center"><?php echo $website['company'];?>© | Todos los Derechos Reservados 2021.</p>
        </div>
      </div>
    </footer>

    <div class="position-fixed pos-fixed-bottom-right z-index-10">
      <!-- Whatsapp bubble -->
      <a href="https://wa.me/5219982800571" target="_blank" class="bg-whatsapp text-primary shadow mr-5 mb-5 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center">
        <i class="fab fa-whatsapp text-white"></i>
      </a>
    </div>

    