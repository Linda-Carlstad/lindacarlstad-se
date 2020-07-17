<footer class="footer py-5 mb-5 mb-md-0" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0 text-md-center">
                <a data-toggle="tooltip" data-placement="right" title="Linda Carlstad" class="footer-img" href="{{ url( '/' ) }}">
                    <img class="img-fluid logo mb-md-4" src="{{ asset( 'img/logo.png') }}" alt="{{ config( 'app.name' ) }} logga">
                </a>
                <br class="d-none d-md-block">
                <a data-toggle="tooltip" data-placement="right" title="Karlstads universtitet" rel="noreferrer" target="_blank" class="footer-img" href="https://kau.se">
                    <img class="img-fluid logo" src="{{ asset( 'img/partner/kau.png') }}" alt="Karlstads universitets logga">
                </a>
            </div>
            <div class="col-md-3">
                <hr class="d-block d-md-none">
                <span>{{ config( 'app.name' ) }}</span>
                <br class="d-block d-md-none">
                <hr class="d-none d-md-block">
                <a href="mailto:info@lindacarlstad.se">info@lindacarlstad.se</a>
                <br>
                Universitetsgatan 2
                <br>
                651 68 Karlstad
            </div>
            <div class="col-md-3">
                <hr class="d-block d-md-none">
                <span>Föreningen</span>
                <br class="d-block d-md-none">
                <hr class="d-none d-md-block">
                <a class="{{ Request::segment(1) === 'kontakt' ? 'active' : null }}" href="{{ route( 'contact' ) }}">Kontakta oss</a>
                <br>
                <a class="{{ Request::segment(1) === 'föreningen' ? 'active' : null }}" href="{{ route( 'about' ) }}">Om oss</a>
                <br>
                <a class="{{ Request::segment(1) === 'program' ? 'active' : null }}" href="{{ route( 'programs' ) }}">Program</a>
                <br>
                <a class="{{ Request::segment(1) === 'it-kommitte' ? 'active' : null }}" href="{{ route( 'it' ) }}">It-kommitté</a>
                <br>
                <a class="{{ Request::segment(1) === 'ny-medlem' ? 'active' : null }}" href="{{ route( 'new-member' ) }}">Bli medlem</a>
            </div>
            <div class="col-md-3">
                <hr class="d-block d-md-none">
                <span>Läs mer</span>
                <br class="d-block d-md-none">
                <hr class="d-none d-md-block">
                <a class="{{ Request::segment(1) === 'nollning' ? 'active' : null }}" href="{{ route( 'initiation' ) }}">Nollningar</a>
                <br>
                <a class="{{ Request::segment(1) === 'galleri' ? 'active' : null }}" href="{{ route( 'gallery' ) }}">Galleri</a>
                <br>
                <a class="{{ Request::segment(1) === 'sittning' ? 'active' : null }}" href="{{ route( 'sitting' ) }}">Sittning</a>
                <br>
                <a class="{{ Request::segment(1) === 'partner' ? 'active' : null }}" href="{{ route( 'partner' ) }}">Partners</a>
                <br>
                <a class="{{ Request::segment(1) === 'föreningar' ? 'active' : null }}" href="{{ route( 'association' ) }}">Föreningar</a>
                <br>
                <a class="{{ Request::segment(1) === 'sånger' ? 'active' : null }}" href="{{ route( 'song' ) }}">Sånger</a>
                <br>
                <a class="{{ Request::segment(1) === 'dokument' ? 'active' : null }}" href="{{ route( 'document' ) }}">Dokument</a>
                <br>
                <a class="{{ Request::segment(1) === 'nyheter' ? 'active' : null }}" href="{{ route( 'news' ) }}">Nyheter</a>
                <br>
                <a rel="noreferrer" target="_blank" href="http://tenta.lindacarlstad.se/linda">Tentor</a>
                <br>
                <a target="_blank" href="{{ route( 'terminal' ) }}">Terminal</a>
            </div>
        </div>
        <div class="row social-footer-icons justify-content-center">
            <a data-toggle="tooltip" data-placement="top" title="Linda Carlstad Facebook" rel="noreferrer" aria-label="Linda Carlstad Facebook"
               target="_blank" href="https://www.facebook.com/linda.carlstad/"><i class="fab fa-facebook"></i>
            </a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="Linda Carlstad Instagram" rel="noreferrer" aria-label="Linda Carlstad Instagran"
               target="_blank" href="https://www.instagram.com/lindacarlstad/"><i class="fab fa-instagram"></i>
            </a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="Linda Carlstad LinkedIn" rel="noreferrer"  aria-label="Linda Carlstad LinkedIn"
               target="_blank" href="https://www.linkedin.com/company/linda-carlstad/about/"><i class="fab fa-linkedin"></i>
            </a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="@lindacarlstad" aria-label="Linda Carlstad Snapchat"><i class="fab fa-snapchat"></i>
            </a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="Linda Carlstad Github" rel="noreferrer" aria-label="Linda Carlstad Github"
               target="_blank" href="https://github.com/Linda-Carlstad"><i class="fab fa-github"></i>
            </a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="Linda Carlstad Discord" rel="noreferrer" aria-label="Linda Carlstad Discord"
               target="_blank" href="https://discord.gg/xGZNRSD"><i class="fab fa-discord"></i>
            </a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="Linda Carlstad Reddit" rel="noreferrer" aria-label="Linda Carlstad Reddit"
               target="_blank" href="https://www.reddit.com/r/lindacarlstad/"><i class="fab fa-reddit"></i>
            </a>
            <br>
        </div>
    </div>
    <div class="footer-copyright">
        <br>
        <small>Utbildningsförening under
            <a rel="noreferrer" target="_blank" href="https://www.kau.se/">Karlstads universitet</a> och en del av
            <a rel="noreferrer" target="_blank" href="https://www.kau.se/hhk">Handelshögskolan</a>
        </small>
        <br>
        <small>Copyright © {{ date( 'Y' ) }} - Alla rättigheter reserverade - Studentföreningen
            <a href="{{ url( '/' ) }}">{{ config( 'app.name' ) }}</a>
        </small>
    </div>
</footer>
