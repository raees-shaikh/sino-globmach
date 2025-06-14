

    <section>
        @php
            $MANUFACTURERS = [
                [
                    'name' => 'OERLIKON BARMAG',
                    'link' => 'https://www.oerlikon.com/en/brands/oerlikon-barmag/',
                ],
                [
                    'name' => 'NEUMAG GERMANY',
                    'link' => '#',
                ],
                [
                    'name' => 'FARE ITALY',
                    'link' => 'https://www.farespa.com/',
                ],
                [
                    'name' => 'ESL UK',
                    'link' => '#',
                ],
                [
                    'name' => 'MECCANICA MORDENE ITALY',
                    'link' => '#',
                ],
                [
                    'name' => 'DILO DILO GERMANY',
                    'link' => 'https://www.dilo.de/en/machines/needlelooms/',
                ],
                [
                    'name' => 'AUTEFA',
                    'link' => 'https://www.autefa.com/autefa-solutions-group',
                ],
                [
                    'name' => 'ANDRTIZ',
                    'link' => 'https://www.andritz.com/products-en/group/nonwoven-textile/needlepunch/excelle-range/specialty-needlelooms',
                ],
                [
                    'name' => 'FERHER',
                    'link' => '#',
                ],
                [
                    'name' => 'ASSELIN',
                    'link' => '#',
                ],
                [
                    'name' => 'OCTIR',
                    'link' => '#',
                ],
                [
                    'name' => 'SPINNBAU',
                    'link' => '#',
                ],
                [
                    'name' => 'HERGETH',
                    'link' => 'http://www.hergeth.de/',
                ],
                [
                    'name' => 'HUNTER',
                    'link' => '#',
                ],
                [
                    'name' => 'BYWATER',
                    'link' => '#',
                ],
                [
                    'name' => 'SULZER RUTI',
                    'link' => '#',
                ],
                [
                    'name' => 'ITEMA',
                    'link' => 'https://www.itemagroup.com/en/',
                ],
                [
                    'name' => 'LINDAUER DORNIER',
                    'link' => 'https://www.lindauerdornier.com/en/',
                ],
                [
                    'name' => 'TOYOTA',
                    'link' => 'https://www.toyota-industries.com',
                ],
                [
                    'name' => 'TSUDAKOMA',
                    'link' => 'https://www.tsudakoma.co.jp/english/',
                ],
                [
                    'name' => 'SAURER ALLMA',
                    'link' => 'https://saurer.com/en/systems/allma-systems/allma-systems-industrial-yarn',
                ],
                [
                    'name' => 'TEIJIN SEIKE',
                    'link' => 'https://www.teijin.com/',
                ],
                [
                    'name' => 'SSM',
                    'link' => '#',
                ],
                [
                    'name' => 'MENZEL',
                    'link' => '#',
                ],
                [
                    'name' => 'BRUCKNER',
                    'link' => 'https://www.brueckner.com/en',
                ],
                [
                    'name' => 'PICANOL',
                    'link' => 'https://www.picanol.be/',
                ],
                [
                    'name' => 'BENNINGER',
                    'link' => 'https://benningergroup.com/home',
                ],
                [
                    'name' => 'KARL MAYER',
                    'link' => 'https://www.karlmayer.com/en/',
                ],
                [
                    'name' => 'MAYER',
                    'link' => 'https://www.mayercie.com/en/',
                ],
                [
                    'name' => 'TERROT',
                    'link' => 'https://www.terrot.de/en/',
                ],
                [
                    'name' => 'LIBA',
                    'link' => '#',
                ],
                [
                    'name' => 'STARLINGER',
                    'link' => 'https://www.starlinger.com/en/',
                ],
                [
                    'name' => 'LOHIA',
                    'link' => 'https://www.lohiagroup.com/',
                ],
                [
                    'name' => 'WINDMOLLER',
                    'link' => 'https://www.wh.group/int/en/company/w_h_group/',
                ],
                [
                    'name' => 'NGR RECYLING',
                    'link' => 'https://www.ngr-world.com/',
                ],
                [
                    'name' => 'EREMA RECYLING',
                    'link' => 'https://www.erema.com/',
                ],

                [
                    'name' => 'RED FLAG',
                    'link' => 'https://www.chinaredflag.com.cn/',
                ],
                [
                    'name' => 'RIFA',
                    'link' => 'http://rifa-texmachine.com/',
                ],
                [
                    'name' => 'ZHEINJIANG TIATAN',
                    'link' => 'http://www.chinataitan.com/en/',
                ],
                [
                    'name' => 'TIATAN',
                    'link' => 'http://www.titantextilemachines.com/',
                ],
                [
                    'name' => 'SAURER',
                    'link' => 'https://saurer.com/en',
                ],
                [
                    'name' => 'ELITEX',
                    'link' => 'https://www.emis.com/php/company-profile/CZ/Elitex_Machinery_SRO_en_1420025.html',
                ],
            ];
        @endphp
        <div class="container pb-5 mt-5">
            <div class="service service-left text-center section-title pb-0 pt-0 px-0 mx-0">

                <h2 class="wow fadeInLeft my-2 blue-clr " data-wow-delay=".4s"> Best Manufacturers OEM China & EU-Japanese</h2>
            </div>
            <p class="wow fadeInLeft text-center mt-3" data-wow-delay=".4s">Best European, Japanese Manufacturer's Quality Used Machineries & Low Costs From Who's Who In Techncial Textile Industry OEM</p>
            <div class="row">
                <div class="service-btn cmn-btn-one mt-3 wow fadeInLeft " data-wow-delay="1s">

                    <div class="row px-3 px-md-0 ">
                        @foreach ($MANUFACTURERS as $item)
                            <div class="col-lg-3 col-md-6 col-12 pl-767-0">

                                <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                    href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                    class="btn btn-custom m-2 w-100 px-0 website-hover rounded f-s-15">{{ $item['name'] }}<i
                                        class="lni lni-arrow-right"></i></a>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
