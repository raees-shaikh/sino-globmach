 <!-- Client Start -->
 <div id="client-section" class=" allclients pt-4">
     <div class="client-overlay">
         <div class="container">
             <div class="text-center   section-title pt-0 pb-4">

                 <h2 class="wow fadeInLeft mt-0 mb-1" data-wow-delay=".4s">Technical Textile Clients</h2>
             </div>
             @php
                 $logos = [
                     [
                         'img-path' => 'images/logos/logokhosla.png',
                         'alt' => 'logokhosla',
                     ],
                     [
                         'img-path' => 'images/logos/logopolyspin.png',
                         'alt' => 'logopolyspin',
                     ],
                     [
                         'img-path' => 'images/logos/logoarvind.png',
                         'alt' => 'logoarvind',
                     ],
                     [
                         'img-path' => 'images/logos/logotechfab.png',
                         'alt' => 'logotechfab',
                     ],

                     [
                         'img-path' => 'images/logos/logogreenpro.png',
                         'alt' => 'logogreenpro',
                     ],
                     [
                         'img-path' => 'images/logos/logocentenary.png',
                         'alt' => 'logocentenary',
                     ],
                     [
                         'img-path' => 'images/newlogo/logocheviot.png',
                         'alt' => 'logocheviot',
                     ],
                     [
                         'img-path' => 'images/logos/logoflexi.png',
                         'alt' => 'flexituff',
                     ],
                     [
                         'img-path' => 'images/logos/logogeo.png',
                         'alt' => 'logogeo',
                     ],
                     [
                         'img-path' => 'images/logos/logogtf.png',
                         'alt' => 'gtf',
                     ],
                     [
                         'img-path' => 'images/newlogo/logoiff.png',
                         'alt' => 'logoiff',
                     ],
                     [
                         'img-path' => 'images/logos/logoimbb.png',
                         'alt' => 'logoimbb',
                     ],
                     [
                         'img-path' => 'images/logos/logojeevan.png',
                         'alt' => 'logojeevan',
                     ],
                     [
                         'img-path' => 'images/newlogo/logomanas-1.png',
                         'alt' => 'logomanas',
                     ],
                     [
                         'img-path' => 'images/logos/logomayur.png',
                         'alt' => 'logoMayur',
                     ],
                     [
                         'img-path' => 'images/logos/logomurugappa.png',
                         'alt' => 'logomuruguappa',
                     ],
                     [
                         'img-path' => 'images/logos/logoparrys.png',
                         'alt' => 'logoparrys',
                     ],
                     [
                         'img-path' => 'images/logos/logosafe.png',
                         'alt' => 'logosafelex',
                     ],

                     [
                         'img-path' => 'images/logos/logosrf.png',
                         'alt' => 'logosrf',
                     ],
                     [
                         'img-path' => 'images/logos/logotuflex.png',
                         'alt' => 'logotuflex',
                     ],
                     [
                         'img-path' => 'images/newlogo/logowinner.png',
                         'alt' => 'logowinnergroup',
                     ],
                     [
                         'img-path' => 'images/logos/logosanrhea.png',
                         'alt' => 'logosanrhea',
                     ],
                     [
                         'img-path' => 'images/newlogo/logozoom.png',
                         'alt' => 'logozoom',
                     ],
                     [
                         'img-path' => 'images/newlogo/logoshri.png',
                         'alt' => 'logoshri',
                     ],
                     [
                         'img-path' => 'images/newlogo/logoshri1.png',
                         'alt' => 'logoambika',
                     ],
                     [
                         'img-path' => 'images/newlogo/logodaman.png',
                         'alt' => 'logodaman',
                     ],
                     [
                         'img-path' => 'images/newlogo/logodcm.png',
                         'alt' => 'logoddcm',
                     ],
                     [
                         'img-path' => 'images/newlogo/logodfr.png',
                         'alt' => 'logoddfr',
                     ],
                     [
                         'img-path' => 'images/newlogo/logodiv.png',
                         'alt' => 'logoddiv',
                     ],
                     [
                         'img-path' => 'images/newlogo/logoinvermex.png',
                         'alt' => 'logoinvermex',
                     ],
                     [
                         'img-path' => 'images/newlogo/logojagdamba.png',
                         'alt' => 'logojagdamba',
                     ],
                     [
                         'img-path' => 'images/newlogo/logokanodia.png',
                         'alt' => 'logokanodia',
                     ],
                     [
                         'img-path' => 'images/newlogo/logomerit.png',
                         'alt' => 'logomerit',
                     ],
                     [
                         'img-path' => 'images/newlogo/logotara.png',
                         'alt' => 'logotara',
                     ],
                     [
                         'img-path' => 'images/newlogo/logotech.png',
                         'alt' => 'logotara',
                     ],
                 ];
             @endphp
             <div class="client-logo text-center">
                 <div class="client-active d-flex align-items-center justify-content-between">
                     @foreach ($logos as $logo)
                         <div class="client-logo  wow fadeInUp" data-wow-delay=".2s">

                             <a href="{{ $logo['img-path'] }}" target="_blank">
                                 <img src="{{ $logo['img-path'] }}" alt="#" class="logo-style py-1 px-1 rounded-3">
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Client End -->
