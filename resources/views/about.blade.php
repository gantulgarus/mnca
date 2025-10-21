@extends('layouts.main')

@section('content')
    {{-- Мэндчилгээ --}}
    <section class="container my-5">
        <div class="row">
            <!-- Leader's Image -->
            <div class="col-lg-4 col-md-5 text-center mb-4 mb-md-0">
                <div class="p-3 bg-light rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                    <img src="{{ asset('images/seo.png') }}" alt="Захирлын зураг" class="img-fluid rounded-circle mb-3 mx-auto"
                        style="width: 250px; height: 250px; object-fit: cover;">
                    <div class="mt-auto">
                        <h6 class="mb-1">МБҮА ТББ ТББ-ЫН ЕРӨНХИЙЛӨГЧ</h6>
                        <h6 class="mb-1">Н.БАЯРСАЙХАН</h6>
                        <p class="text-muted mb-0">2023 оны 6-р сарын 19</p>
                    </div>
                </div>
            </div>

            <!-- Greeting Text -->
            <div class="col-lg-8 col-md-7">
                <div class="p-4 bg-white shadow-sm rounded h-100">
                    <h2 class="mb-4 border-bottom pb-2">Мэндчилгээ</h2>
                    <div class="greeting-text" style="max-height: 600px; overflow-y: auto; padding-right: 10px;">
                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Улс эх орны эдийн засаг, бүтээн байгуулалтын салбарын түүчээлэгч болох "БАРИЛГЫН САЛБАРЫН 97
                            ЖИЛИЙН
                            ОЙ" тохиож буйтаа холбогдуулан салбарын бодлогыг тодорхойлогчид, шийдвэр гаргагчид, төр ба
                            төрийн бус
                            байгууллагуудын удирдлагууд, ажилтнууд, эрин зууныг бүтээн байгуулагч хөрөнгө оруулагчид, аж
                            ахуйн
                            нэгж, байгууллагууд инженерүүд, барилгачид, МБҮА ТББ-ын гишүүн байгууллагууд, ажлын албаны хамт
                            олон, нийт
                            хэрэглэгчид, үйлчлүүлэгчид Та бүхэндээ Монгол Улсад орчин цагийн барилгын салбар үүсч хөгжсөний
                            түүхт ойн баярын мэндийг хүргэж байгааг хүлээн авна уу.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            МБҮА ТББ нь барилгын салбарын бизнес эрхлэгчдийн томоохон төлөөллийн хувьд эдийн засгийг
                            тогтворжуулах, хууль эрх зүйн болон бизнесийн хөрөнгө оруулалтын орчныг сайжруулах, дэлхийн улс
                            орнуудад түгсэн
                            шинэ техник, технологи, стандартыг нэвтрүүлэх, агаарын бохирдол, эрчим хүчний хэмнэлттэй ногоон
                            барилга,
                            замын түгжрэл, нийслэлийн бүтээн байгуулалт, гэр хорооллын дахин төлөвлөлтөд тулгамдаж буй
                            хүндрэлийг шийдвэрлэх асуудлыг байгууллагынхаа Стратеги төлөвлөгөөндөө тусгаснаар хэрэгжүүлэн
                            ажиллаж байна.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Барилга, хот байгуулалтын Сайдын 2023 оны 14 дүгээр тушаалаар байгуулагдсан "Ажлын хэсэг" нь
                            "Монголын Барилгын Үндэсний Ассоциаци" ТББ болон бусад төрийн бус байгууллагуудтай байгуулсан
                            гэрээний
                            биелэлтэд хяналт-шинжилгээг хийж, Монгол Улсын Засгийн газрын 2020 оны 206, 2021 оны 374 дүгээр
                            тогтоолоор
                            батлагдсан "Бодлогын баримт бичгийн хэрэгжилт болон захиргааны байгууллагын үйл ажиллагаанд
                            хяналт-шинжилгээ, үнэлгээг хийх нийт нийтлэг журам"-ын хүрээнд "ТОДОРХОЙ ҮР ДҮНД ХҮРСЭН" гэж
                            үнэлсний дагуу гэрээг үргэлжлүүлэн байгуулахаар болсон билээ. Энэ үнэлгээ нь МБҮА ТББ ба түүний
                            түншлэгч
                            ТББ-ууд нь дүрэм, журмын дагуу ажилласныг салбарын яам нь сайшааж, дахин итгэл хүлээлгэн хамтран
                            ажиллах
                            болсныг харууллаа.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Бид өнгөрсөн хугацаанд дотоодын хамтын ажиллагаанаас гадна гадаадын хамтын ажиллагаан дээрээ
                            ихээхэн
                            ахиц дэвшилтийг гаргасан бөгөөд ХБНГУ-ын БИ БИ ВИ ИНТЕРНЭЙШНЛ (BBW)-ийн сэргээгдэх эрчим хүчний
                            техникийн семинарыг 8 жил дараалан зохион байгуулж, улмаар Монгол Улсад төвлөрсөн эрчим хүчний
                            системээс үл хамаарсан сэргээгдэх эрчим хүч, түүний дотор нарны эрчим хүчийг ашигладаг барилгыг
                            барих,
                            барилгын дулаалгад байгалийн гаралтай хонины ноосны дулаалгын болон бусад барилгын материалыг
                            ашиглах,
                            ХБНГУ-ын өндөр технологийн инженерингийн технологийг Монголын сэргээгдэх эрчим хүчний нөөц болон
                            түүхий эдийн
                            онцлогтой хослуулсан барилгыг барих технологийг боловсруулах судалгааны ажлыг эхлүүлэхээр болоод
                            байна.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Бид АЗИЙН БА БАРУУН НОМХОН ДАЛАЙН ГЭРЭЭЛЭГЧДИЙН АССОЦИАЦИУДЫН ОЛОН УЛСЫН НИЙГЭМЛЭГ (IFAWPCA)-ИЙН
                            42
                            дахь Дунд хугацааны чуулган, "ТОГТВОРТОЙ БАРИЛГЫН ЭРИН" Олон Улсын Форумыг 2023.06.14-17-нд эх
                            орондоо
                            анх удаа зохион байгуулсан нь Азийн ба номхон далайн орнууд, түүний дотор Азийн Гэрээлэгчдийн
                            Ассоциациудад МОНГОЛ УЛСАА болон МАНАЙ УЛСЫН БАРИЛГА, БҮТЭЭН БАЙГУУЛАЛТЫН КОМПАНИУДЫН ХҮЧИН
                            ЧАДАЛ, ХӨГЖИЛ ДЭВШИЛ,
                            ЧАДАВХИ ямар түвшинд байгааг таниулахаас гадна, IFAWPCA-ийн хүрээлэлд өөрийн цар хүрээгээ тэлж
                            чадсан нь МБҮА ТББ-ын хувьд НЭР ТӨРИЙН ХЭРЭГ БАЙЛАА. Мөн уг чуулганыг Монгол Улсад хийснээр
                            "МОНГОЛД ЗОЧЛОХ
                            2023" бодлогыг дэмжиж, зочлох үйлчилгээний салбарт худалдан авалтын хөрөнгө оруулалтыг хийсэн
                            үйл явдал
                            боллоо. Уг олон улсын форумаар бидэнд тулгамдсан барилга, хот байгуулалтын салбарт тулгамдаж буй
                            олон арван асуудлын шийдлийг олохын зэрэгцээ хүрэлцэн ирсэн экспертүүдээс мэдлэг мэдээлэл,
                            туршлагаа
                            солилцох, харилцан хамтран ажиллах гарц гаргалгаа байгааг олж харсан болно.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Түүнчлэн, БНХАУ-ЫН ОЛОН УЛСЫН ГЭРЭЭЛЭГЧДИЙН ХОЛБОО (CHINСA)-ны жил бүр зохион байгуулдаг "ОЛОН
                            УЛСЫН
                            БАРИЛГЫН САЛБАРЫН ДЭД БҮТЭЦ БОЛОН ХӨРӨНГӨ ОРУУЛАЛТ"-ын форумд оролцож, хоёр холбооны хамтын
                            ажиллагааг цаашид улам өргөжүүлэх, хоёр улсын Засгийн газрын хамтарсан бизнесийн форум,
                            үзэсгэлэн яармагийг
                            зохион байгуулах тал дээр санаа санаачилгыг гарган ажиллахаас гадна гурван улсыг холбосон дэд
                            бүтэц,
                            барилга, логистикийн төвүүдийн бүтээн байгуулалтыг барих, уг бүтээн байгуулалтад хоёр холбоодын
                            компаниудыг
                            хамтран оролцуулах боломжийг эрэлхийлэхээр тогтлоо.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Улмаар МБҮА ТББ нь Олон Улсын Зөвлөх Инженерүүдийн Холбоо (ФИДИК)-нд элсэхээр IFAWPCA, БХБЯ-ны
                            дэмжлэгийг авсны дагуу Монгол Улсыг төлөөлөх Үндэсний гишүүн холбоо болох, ФИДИК-ээс олгодог
                            зөвшөөрлийг Монгол Улсдаа олгох нөхцөлийг бүрдүүлэх, барилга, хот байгуулалтын салбарт ФИДИК-ийн
                            гэрээг
                            хэрэгжүүлэх, сурталчлах, түгээн дэлгэрүүлэх, сурган чадавхжуулах зэрэг ажлыг зохион байгуулж
                            салбарын үйл
                            ажиллагаанд оролцогч хөрөнгө оруулагч, захиалагч, гүйцэтгэгч, зураг төсөл зохиогч нарын
                            хоорондын харилцааг
                            зохицуулах, эрх тэгш байдлыг хангах, хамгаалан ажиллах үүргийг хүлээх гэж байна. Энэ нь Монгол
                            Улсын
                            барилгын салбарт Олон улсын гэрээ, эрх зүйн орчныг стандартын дагуу хэрэгжүүлснээр шинэ дэвшил,
                            эргэлтийг авчрах таатай нөхцөлийг бүрдүүлэх юм.
                        </p>

                        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
                            Та бүхэндээ "БАРИЛГЫН САЛБАРЫН 97 ЖИЛИЙН ОЙН БАЯРЫН МЭНД"-ийг дахин хүргэж, эрүүл энх, арвин их
                            үйлс, амжилт бүтээлийн дээдийг хүсэн ерөөе.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NEW: Эрхэм зорилго / Алсын хараа / Үнэт зүйл (Full-width Banner with Background Image) --}}
    <section class="py-0">
        <div id="missionCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#missionCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Эрхэм зорилго"></button>
                <button type="button" data-bs-target="#missionCarousel" data-bs-slide-to="1"
                    aria-label="Алсын хараа"></button>
                <button type="button" data-bs-target="#missionCarousel" data-bs-slide-to="2"
                    aria-label="Үнэт зүйл"></button>
            </div>

            <div class="carousel-inner">
                {{-- Slide 1: Эрхэм зорилго --}}
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center text-center text-white p-5"
                        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                            url('{{ asset('images/banner.png') }}') center/cover no-repeat;
                           min-height: 350px;">
                        <div class="container">
                            <h3 class="fw-bold mb-3">Эрхэм зорилго</h3>
                            <p class="mb-0 fs-5" style="max-width: 900px; margin: 0 auto; line-height: 1.6;">
                                Барилгын салбарт сайн засаглалыг хөгжүүлэхэд төр ба хувийн хэвшлийн хамтын ажиллагаа,
                                уялдааг сайжруулж, хууль эрх зүйн орчинд шинэчлэл хийхэд нөлөөлж, гишүүдийн чадавхийг
                                сайжруулж, барилгын зах зээлийн тогтвортой өсөлтийн төлөө чармайн ажиллана.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Slide 2: Алсын хараа --}}
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center text-center text-white p-5"
                        style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                            url('{{ asset('images/banner.png') }}') center/cover no-repeat;
                           min-height: 350px;">
                        <div class="container">
                            <h3 class="fw-bold mb-3">Алсын хараа</h3>
                            <p class="mb-0 fs-5" style="max-width: 900px; margin: 0 auto; line-height: 1.6;">
                                Гишүүн байгууллагуудынхаа ашиг сонирхлыг хуулийн хүрээнд хамгаалж төлөөлсөн,
                                үндэсний болон олон улсын хэмжээнд хүлээн зөвшөөрөгдсөн, барилгын салбарт
                                үйл ажиллагаагаа явуулж буй ТББ-уудын манлайлагч байгууллага байна.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Slide 3: Үнэт зүйл --}}
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center text-center text-white p-5"
                        style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
                            url('{{ asset('images/banner.png') }}') center/cover no-repeat;
                           min-height: 350px;">
                        <div class="container">
                            <h3 class="fw-bold mb-3">Үнэт зүйл</h3>
                            <p class="mb-0 fs-5" style="max-width: 900px; margin: 0 auto; line-height: 1.6;">
                                Ёс зүйтэй байдал, хамтын ажиллагаа, хариуцлага, ил тод байдал,
                                шинэ санаачилга, мэргэжлийн ёс зүй бол бидний үнэт зүйл юм.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Carousel Controls --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#missionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Өмнөх</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#missionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Дараах</span>
            </button>
        </div>
    </section>

    {{-- Зорилго --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <div class="mb-3" style="color: #203074;">
                                    <i class="fas fa-gavel fa-2x"></i>
                                </div>
                                <p class="text-muted small mb-0">
                                    Салбарын хууль эрх зүйн орчинд шинэчлэл хийх, олон улсын барилгын гэрээний зарчимд
                                    нийцүүлэн нэвтрүүлэх, барилгын салбарт сайн засаглалыг бий болгох.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <div class="mb-3" style="color: #203074;">
                                    <i class="fas fa-handshake fa-2x"></i>
                                </div>
                                <p class="text-muted small mb-0">
                                    Төр-хувийн хэвшлийн хамтын ажиллагаа, уялдааг сайжруулах үйл ажиллагааг зохион
                                    байгуулах, оролцогч талууд хамтран ажиллах нөхцөлийг бүрдүүлэх.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <div class="mb-3" style="color: #203074;">
                                    <i class="fas fa-industry fa-2x"></i>
                                </div>
                                <p class="text-muted small mb-0">
                                    Барилгын компаниудын засаглал, өрсөлдөх чадварыг сайжруулах, мэргэжилтний ур чадварыг
                                    дээшлүүлэх, дэвшилтэт технологи, ноу-хауг нэвтрүүлэх.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <div class="mb-3" style="color: #203074;">
                                    <i class="fas fa-building fa-2x"></i>
                                </div>
                                <p class="text-muted small mb-0">
                                    Үл хөдлөх хөрөнгийн зах зээлийг хөгжүүлж, хөрөнгө оруулалтыг нэмэгдүүлэх, барилгын
                                    эрэлтийг өсгөх, зах зээлийг идэвхжүүлэх ажлыг зохион байгуулах.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Бүтэц, бүрэлдэхүүн --}}
    <section id="structure" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4 text-center fw-bold">Бүтэц, бүрэлдэхүүн</h2>

            {{-- Tabs --}}
            <ul class="nav nav-pills justify-content-center mb-4 flex-wrap" id="deptTabs" role="tablist">
                @foreach ($departments as $key => $department)
                    <li class="nav-item mb-2" role="presentation">
                        <button class="nav-link px-3 py-2 @if ($key === 0) active @endif"
                            id="tab-{{ $department->id }}" data-bs-toggle="tab"
                            data-bs-target="#content-{{ $department->id }}" type="button" role="tab"
                            aria-controls="content-{{ $department->id }}"
                            aria-selected="{{ $key === 0 ? 'true' : 'false' }}"
                            style="font-size: 0.9rem; white-space: nowrap;">
                            {{ $department->name }}
                        </button>
                    </li>
                @endforeach
            </ul>

            {{-- Tab Contents --}}
            <div class="tab-content" id="deptTabsContent">
                @foreach ($departments as $key => $department)
                    <div class="tab-pane fade @if ($key === 0) show active @endif"
                        id="content-{{ $department->id }}" role="tabpanel" aria-labelledby="tab-{{ $department->id }}">
                        <div class="row justify-content-center">
                            @forelse($department->humanResources as $person)
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
                                    <div class="card border-0 shadow-sm h-100 transition-all hover-scale">
                                        <div class="card-body d-flex flex-column align-items-center p-3">
                                            <div class="position-relative mb-3">
                                                <img src="{{ asset($person->photo) }}" alt="{{ $person->name }}"
                                                    class="rounded-circle"
                                                    style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #f8f9fa;">
                                            </div>
                                            <h6 class="fw-bold mb-1 text-center">{{ $person->name }}</h6>
                                            <small class="text-muted text-center"
                                                style="font-size: 0.8rem;">{{ $person->position }}</small>
                                            <small class="fw-bold text-muted text-center"
                                                style="font-size: 0.8rem;">{{ $person->company }}</small>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-light text-center" role="alert">
                                        <i class="fas fa-info-circle me-2"></i>Холбогдох бүрэлдэхүүн алга байна.
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Түүхэн замнал --}}

    <section class="timeline-section py-5" style="background-color: #fff;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color:#203074;">
                Түүхэн замнал
            </h2>

            <div class="timeline">

                <!-- 2009 -->
                <div class="timeline-item left">
                    <div class="timeline-content shadow-sm">
                        <div class="year">2009</div>
                        <p>
                            Монгол Улсын Ерөнхийлөгч болон Засгийн газартай хамтран ажиллав.
                        </p>
                    </div>
                </div>

                <!-- 2010 -->
                <div class="timeline-item right">
                    <div class="timeline-content shadow-sm">
                        <div class="year">2010</div>
                        <p>
                            Гадаад харилцаагаа тэлж, олон улсын байгууллагуудтай хамтран ажиллав.
                        </p>
                    </div>
                </div>

                <!-- 2011 -->
                <div class="timeline-item left">
                    <div class="timeline-content shadow-sm">
                        <div class="year">2011</div>
                        <p>
                            Салбарын хууль, эрх зүйн шинэчлэлийн хүрээнд томоохон ажлуудыг хийж гүйцэтгэв.
                        </p>
                    </div>
                </div>

                <!-- 2012 -->
                <div class="timeline-item right">
                    <div class="timeline-content shadow-sm">
                        <div class="year">2012</div>
                        <p>
                            Японы Хоккайдогийн барилгын холбоо, технологийн төвтэй “Хамтран ажиллах санамж бичиг”-т гарын
                            үсэг зурж,
                            хамтын ажиллагааны эхлэлийг тавив.
                        </p>
                    </div>
                </div>

                <!-- 2013 -->
                <div class="timeline-item left">
                    <div class="timeline-content shadow-sm">
                        <div class="year">2013</div>
                        <p>
                            Гишүүдийгээ дэмжиж ажиллав.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* Tab styling */
        .nav-pills .nav-link {
            color: #495057;
            background-color: #f8f9fa;
            margin: 0 5px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link:hover {
            background-color: #e9ecef;
        }

        .nav-pills .nav-link.active {
            background-color: #203074;
            color: white;
            font-weight: 500;
        }

        /* Card hover effect */
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-scale:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .nav-pills {
                justify-content: flex-start !important;
                overflow-x: auto;
                flex-wrap: nowrap !important;
                padding-bottom: 10px;
            }

            .nav-item {
                flex-shrink: 0;
            }

            /* Slightly smaller images on mobile */
            .rounded-circle {
                width: 100px !important;
                height: 100px !important;
            }
        }

        .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .timeline {
            position: relative;
            margin: 0 auto;
            padding: 2rem 0;
            width: 90%;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 3px;
            background: #203074;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px 40px;
        }

        .timeline-item.left {
            left: 0;
        }

        .timeline-item.right {
            left: 50%;
        }

        .timeline-content {
            background: #f8f9fa;
            /* light gray background */
            padding: 1.5rem 2rem;
            border-radius: 12px;
            border-left: 4px solid #203074;
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            background: #e9ecf5;
            transform: translateY(-5px);
        }

        .year {
            font-weight: 700;
            font-size: 1.3rem;
            color: #203074;
            margin-bottom: 10px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            top: 24px;
            width: 16px;
            height: 16px;
            border: 3px solid #203074;
            background: #fff;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item.left::before {
            right: -8px;
        }

        .timeline-item.right::before {
            left: -8px;
        }

        @media (max-width: 768px) {
            .timeline::after {
                left: 10px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 40px;
                margin-bottom: 2rem;
            }

            .timeline-item.right {
                left: 0;
            }

            .timeline-item::before {
                left: 0;
            }
        }
    </style>
@endsection
