@extends('layouts.main')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-4 fw-bold">МБҮА ТББ-ын Гишүүн байгууллагууд</h3>
            @if ($memberships->isNotEmpty())
                <small class="text-muted">Нийт: {{ $memberships->count() }} гишүүн</small>
            @endif
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($memberships->isEmpty())
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    <i class="bi bi-people fs-1 text-muted mb-3"></i>
                    <p class="text-muted mb-0">Одоогоор бүртгэгдсэн гишүүн алга.</p>
                </div>
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($memberships as $member)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                                style="height: 120px; overflow: hidden;">
                                @if ($member->logo)
                                    <img src="{{ asset('storage/' . $member->logo) }}" class="img-fluid p-3"
                                        alt="{{ $member->organization_name }}" style="max-height: 100%; width: auto;">
                                @else
                                    <div class="text-center text-muted p-3">
                                        <i class="bi bi-building fs-1"></i>
                                        <p class="small mb-0">Лого байхгүй</p>
                                    </div>
                                @endif
                            </div>

                            <div class="card-body">
                                <h5 class="card-title h6 mb-3 text-truncate">{{ $member->organization_name }}</h5>
                                <ul class="list-unstyled small mb-0">
                                    <li class="mb-1">
                                        <i class="bi bi-geo-alt text-muted me-2"></i>
                                        {{ $member->address ?? 'Хаяг байхгүй' }}
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-telephone text-muted me-2"></i>
                                        {{ $member->phone ?? 'Утас байхгүй' }}
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-envelope text-muted me-2"></i>
                                        {{ $member->email ?? 'Имэйл байхгүй' }}
                                    </li>
                                    @if ($member->website)
                                        <li class="mb-1">
                                            <i class="bi bi-globe text-muted me-2"></i>
                                            <a href="{{ $member->website }}" target="_blank" class="text-decoration-none">
                                                {{ parse_url($member->website, PHP_URL_HOST) }}
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>

                            @if ($member->facebook || $member->twitter || $member->youtube)
                                <div class="card-footer bg-white border-0 pt-0">
                                    <div class="d-flex gap-2">
                                        @if ($member->facebook)
                                            <a href="{{ $member->facebook }}" target="_blank"
                                                class="btn btn-sm btn-outline-primary rounded-circle p-1" title="Facebook">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        @endif
                                        @if ($member->twitter)
                                            <a href="{{ $member->twitter }}" target="_blank"
                                                class="btn btn-sm btn-outline-info rounded-circle p-1" title="Twitter">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        @endif
                                        @if ($member->youtube)
                                            <a href="{{ $member->youtube }}" target="_blank"
                                                class="btn btn-sm btn-outline-danger rounded-circle p-1" title="YouTube">
                                                <i class="bi bi-youtube"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $memberships->links() }}
            </div>
        @endif

        <h3 class="my-4 fw-bold">Гишүүнчлэлийн журам</h3>
        <div class="accordion" id="membershipAccordion">
            <!-- Section 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Нэг. Нийтлэг үндэслэл
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#membershipAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>1.1. МБҮА ТББ-ын дүрмийн 3.3-д заасан эрх эдэлж, үүрэг хүлээсэн Монгол Улсын иргэн, аж ахуйн
                                нэгж
                                байгууллага, гадаад улсын иргэн, аж ахуйн нэгж, байгууллага гишүүнээр элсэж болно.</li>
                            <li>1.2. Ассоциацийн&nbsp; дүрмэнд&nbsp; тодорхойлсон&nbsp; үйл&nbsp; ажиллагааны&nbsp;
                                зорилгын&nbsp; хүрээнд&nbsp; ажил үйлчилгээ эрхэлдэг мөн ажил төрлийн холбоотой болон
                                ассоциацийн дүрмийг хүлээн зөвшөөрсөн&nbsp; иргэн, аж&nbsp; ахуйн&nbsp; нэгж,&nbsp;
                                байгууллага&nbsp; гишүүнээр&nbsp; элсэх&nbsp; тухай&nbsp; өргөдлөө Ажлын албанд ирүүлнэ.
                            </li>
                            <li>1.3. Гишүүнээр&nbsp; элсэх&nbsp; хүсэлтэй&nbsp; иргэн энэ&nbsp; журмын&nbsp; хавсралт&nbsp;
                                анкет&nbsp; 1,&nbsp; аж&nbsp; ахуйн&nbsp; нэгж, байгууллага бол анкет 2-ыг тус тус бөглөж,
                                төлбөр төлсөн баримт, компанийн танилцуулгын хамт өргөдөлд хавсаргана.</li>
                            <li>1.4. Гишүүн элсүүлэх, хүндэт гишүүнээр өргөмжлөх асуудлыг Удирдах зөвлөлийн хурлаас хэлэлцэн
                                гэрчилгээ олгосноор шийдвэрлэгдэнэ. Гэрчилгээний загварыг энэ журмын хавсралт 3-д заасан
                                загвараар хийнэ.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Хоёр. Гишүүнчлэлийн ангилал
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#membershipAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>2.1. Ассоциацийн дүрмийн 3.8-д заасны дагуу Гишүүд нь дараах ангилалтай байх ба аль ангилалд
                                гишүүнээр элсэх нь нээлттэй байна.</li>
                            <li>2.2. Ассоциаци нь доорхи гишүүнчлэлийн ангилалтай байна:
                                <ul>
                                    <li>2.2.1. Удирдах зөвлөлийн гишүүн;</li>
                                    <li>2.2.2. Энгийн гишүүн;</li>
                                    <li>2.2.5. Хүндэт гишүүн;</li>
                                    <li>2.2.6. Дэмжигч гишүүн.</li>
                                </ul>
                            </li>
                            <li>2.3. Дэмжигч гишүүн ассоциацийн үйл ажиллагаанд дэмжлэг туслалцаа үзүүлэхээ илэрхийлэн
                                дүрэм, үйл
                                ажиллагааг зөвшөөрч сайн дураар нэгдсэн ажил үйлчилгээ, эд материалаар дэмжигч иргэн болоод
                                гадаад,
                                дотоодын байгууллага, аж ахуйн нэгж байна.</li>
                            <li>2.4. Ассоциацийн үйл ажиллагааны зорилгыг хэрэгжүүлэх, барилгын салбарыг хөгжүүлэх,
                                гишүүдийн язгуур
                                эрх ашгийг хамгаалах үйлсэд онцгой хувь нэмэр оруулсан Ассоциацийн үйл ажиллагаанд уригдан
                                оролцож
                                зөвлөх эрхтэй, салбарын хүлээн зөвшөөрөгдсөн мэргэжилтнийг Хүндэт гишүүнээр өргөмжилнө.</li>
                            <li>2.5. Хүндэт болон Дэмжигч гишүүнээр элсүүлэхийг Удирдах Зөвлөлийн хурлаар хэлэлцүүлж
                                олонхийн
                                саналаар батална. Хүндэт болон Дэмжигч гишүүн, гишүүний татвар төлөхгүй.</li>
                            <li>2.6. Хүндэт гишүүн Ассоциацийн чуулган, Удирдах зөвлөлийн хуралд зөвлөх эрхтэйгээр, саналын
                                эрхгүйгээр оролцож болно.</li>
                            </гl>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Гурав. Гишүүний татвар
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#membershipAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>3.1. Ассоциацийн дүрмийн 3.3.2.4-д заасны дагуу гишүүн нь татвар төлөх үүрэгтэй.</li>
                            <li>3.2. Гишүүн нь татвар төлсөн өдрөөс МБҮА-ийн үйл ажиллагаанд хамрагдан гишүүний үйлчилгээг
                                авна.
                                Гишүүнчлэлийн татвар нь гишүүнээс ассоциацийн үйл ажиллагаанд оролцох хариуцлагыг
                                нэмэгдүүлж, үйл
                                ажиллагааны тодорхой хэсгийг санхүүжүүлэх эх үүсвэр болно.</li>
                            <li>3.3 Гишүүнчлэлийн татварын хэмжээ:
                                <ul>
                                    <li>3.3.1 Удирдах зөвлөлийн гишүүдийн жилийн татвар 5.000.000₮ (Таван сая төгрөг). Үүний
                                        дотор:
                                        <ul>
                                            <li>3.3.1.1 Ерөнхийлөгчийн жилийн татвар 20.000.000₮ (Хорин сая төгрөг).</li>
                                            <li>3.3.1.2 Тэргүүн дэд Ерөнхийлөгчийн жилийн татвар 15.000.000₮ (Арван таван
                                                сая төгрөг).</li>
                                            <li>3.3.1.3 Дэд Ерөнхийлөгчийн жилийн татвар 10.000.000₮ (Арван сая төгрөг).
                                            </li>
                                        </ul>
                                    </li>
                                    <li>3.3.2 Энгийн гишүүний жилийн татвар 2.000.000₮ (Хоёр сая төгрөг).</li>
                                </ul>
                            </li>
                            <li>3.4 Барилгын салбарт үйл ажиллагаа явуулдаг төрийн бус байгууллага, гишүүнээр элсвэл
                                элсэлтийн
                                хураамжинд 100.000₮ (Нэг зуун мянган төгрөг) төлнө. /Харилцан мэдээлэл солилцож, хамтран
                                ажиллах тул
                                татвар төлөхгүй/.</li>
                            <li>3.5 Гишүүн, хүндэт гишүүн, дэмжигч нь сайн дурын үндсэн дээр хандив өргөж болно. Энэ тухай
                                нийтэд
                                зарлан мэдээлнэ.</li>
                            <li>3.6 Гишүүн компаниуд Аудитаар баталгаажуулсан санхүүгийн жилийн тайлан, балансаа Ажлын
                                албаны
                                нягтлан бодогчид үзүүлэн, жилийн борлуулалтын орлогын хэмжээг бүртгүүлж гишүүний татварын
                                нэхэмжлэхээ авна.</li>
                            <li>3.7 Гишүүний жилийн татварыг Худалдаа хөгжлийн банкны 499136297 дугаартай МБҮА-ийн дансанд
                                шилжүүлж
                                баримтыг хавсаргана.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Дөрөв. Гишүүн болсны давуу талууд
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#membershipAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>4.1 Төр засгийн байгууллагуудад, салбарын хүрээнийхний болон гишүүн компаниудын нийтлэг эрх
                                ашгийг
                                илэрхийлэх, хамгаалуулах чиглэлээр МБҮА-с явуулж буй үйл ажиллагаанд санал дүгнэлтээ өгөх,
                                оролцох
                                боломжоор хангагдах.</li>
                            <li>4.2 Гадаадын бизнес эрхлэгчдийн саналууд, Ассоциациас зохион байгуулж байгаа бизнес
                                уулзалтууд,
                                үзэсгэлэн, арга хэмжээний мэдээллийг онлайн хэлбэрээр тогтмол авах.</li>
                            <li>4.3 Бизнес саналаа гадагш түгээж, өөрийн байгууллагын мэдээллийг Ассоциацийн болон
                                шаардлагатай бол
                                хамтран ажилладаг донор байгууллагуудын вэб хуудсанд байршуулах.
                                <ul>
                                    <li>4.3.1 Бизнес, эрхзүйн холбогдолтой хуулийн төслүүдэд өөрийн саналыг оруулах.</li>
                                </ul>
                            </li>
                            <li>4.4 Ассоциацийн үйл ажиллагааны чиглэлээр салбарын Ажлын хэсэгт орж ажиллах.</li>
                            <li>4.5 Салбарыг хөгжүүлэхэд үр бүтээлтэй ажиллаж байгаа өөрийн байгууллагын ажилтнуудаа төр,
                                засгийн
                                шагналд тодорхойлж, дэмжих.</li>
                            <li>4.6 Эдийн засаг, бизнесийн орчны мэдээллээр хангагдах.</li>
                            <li>4.7 Дугуй ширээний бизнес уулзалт, ярилцлагад үнэ төлбөргүй оролцох.</li>
                            <li>4.8 Ассоциацийн нийт гишүүдэд өөрсдийн үйл ажиллагааны чиглэлээр танилцуулга, сурталчилгаа
                                хийх.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Тав. Гишүүнчлэл цуцлах болон сэргээх
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#membershipAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>5.1 Гишүүнчлэлээс Ассоциацийн дүрмийн 3.6-д заасан үндэслэлээр хасна. Гишүүн нь сайн дурын
                                үндсэн
                                дээр гишүүнээс гарах эрхтэй. Эдгээр тохиолдолд түүний татвар, хандивыг буцааж олгохгүй.</li>
                            <li>5.2 Гишүүнчлэлээс татгалзах талаар албан хүсэлтээ өгсөн тохиолдолд УЗ-шийдвэрээр
                                гишүүнчлэлийн
                                эрхийг нь хасна.</li>
                            <li>5.3 Гишүүнчлэлээ сэргээх хүсэлтээ албан бичгээр илэрхийлж, өөрийн байгууллагын элсэх
                                ангиллаа
                                сонгож, бүртгэлийн хураамжаа төлсөн тохиолдолд УЗ-н хурлын шийдвэрээр эрхийг нь сэргээж
                                болно</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('styles')
    <style>
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }

        .btn-social {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection
