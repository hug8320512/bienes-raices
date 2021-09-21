<?php
$adminFolder =  dirname(__DIR__);

require_once($adminFolder. "/classes/class.website.php");
$website = Website::createInstance()->getInfo();

if(!$website) {
    die('No tiene una pagina web creada en Klosing');
}

?>
<header class="main-header navbar-light header-sticky header-sticky-smart header-mobile-xl">
    <div class="sticky-area">
        <div class="container container-xxl">
            <nav class="navbar navbar-expand-xl bg-transparent px-0 w-100">

                <a class="navbar-brand mr-7" href="/">
                <img src="/images/logo.png" alt="Logo" class="d-none d-xl-inline-block">
                <img src="/images/logo-white.png" alt="Logo" class="d-inline-block d-xl-none">
                </a>

                <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#primaryMenu02"  aria-controls="primaryMenu02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end mt-3 mt-xl-0" id="primaryMenu02">
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                        <li id="navbar-item-home" aria-expanded="false" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="/" >INICIO</a>
                        </li>
                        <li id="navbar-item-home" aria-expanded="false" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="/propiedades-en-venta" >PROPIEDADES EN VENTA</a>
                        </li>
                        <li id="navbar-item-home" aria-expanded="false" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="/propiedades-en-renta">PROPIEDADES EN RENTA</a>
                        </li>
                        <li id="navbar-item-home" aria-expanded="false" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="/desarrollos" >DESARROLLOS</a>
                        </li>
                        <li id="navbar-item-home" aria-expanded="false" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="/blog" >BLOG</a>
                        </li>
                        <li id="navbar-item-home" aria-expanded="false" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                            <a class="nav-link p-0" href="/contacto" >CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>