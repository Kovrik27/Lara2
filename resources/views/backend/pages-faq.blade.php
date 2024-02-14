<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / F.A.Q - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link href="{{ asset('assets/backend/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/simple-datatables/style.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/backend/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assets/backend/img/logo.png" alt="">
        <span class="d-none d-lg-block">Классный админер</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Поиск" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->







          <li class="nav-item dropdown pe-3">

              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="/assets/backend/img/photo.jpg" alt="Profile" class="rounded-circle">
                  <span class="d-none d-md-block dropdown-toggle ps-2">М.Побежимов</span>
              </a><!-- End Profile Iamge Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                      <h6>Михаил Побежимов</h6>
                      <span>Веб-дизайнер</span>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>

                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                          <i class="bi bi-person"></i>
                          <span>Мой профиль</span>
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>

                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                          <i class="bi bi-gear"></i>
                          <span>Настройки аккаунта</span>
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>

                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/faq">
                          <i class="bi bi-question-circle"></i>
                          <span>Помощь надо?</span>
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>

                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/login">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>Выйти</span>
                      </a>
                  </li>

              </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="/admin">
                  <i class="bi bi-grid"></i>
                  <span>Панель управления</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-file-text"></i>
                  <span>Статьи</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-plus"></i>
                  <span>Добавить</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-pencil"></i>
                  <span>Изменить</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-trash"></i>
                  <span>Удалить</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="/faq">
                  <i class="bi bi-question-circle"></i>
                  <span>Помощь надо?</span>
              </a>
          </li>

      </ul>

  </aside><!-- End Sidebar-->




  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Помощь надо?</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
          <li class="breadcrumb-item active">Помощь надо?</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Основные вопросы</h5>

              <div>
                <h6>1. Какова цель создания сайта?</h6>
                <p>Налаживание обратной связи с клиентами; Автоматизация бизнес-процессов компании; Повышение лояльности аудитории, узнаваемости компании и другое.</p>
              </div>

              <div class="pt-2">
                <h6>2. Какие основные ценности есть у вашей компании и как вы доносите их до аудитории?</h6>
                <p>Ценности должны быть конкретными и реальными. В списке могут быть открытость, доверие, лояльность, оптимизм, инновации, скорость, креативность, честность, развитие.</p>
              </div>

              <div class="pt-2">
                <h6>3. Что вас отличает от конкурентов?</h6>
                <p>    Прямые конкуренты — это компании, которые продают одинаковые товары одним и тем же клиентам. ...
                    Косвенные конкуренты продают разные товары одной целевой аудитории. ...
                    Неочевидные конкуренты продают разные товары разным клиентам, но могут переманивать аудиторию, заменяя товары друг друга.</p>
              </div>

            </div>
          </div>

          <!-- F.A.Q Group 1 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Вопросы от нас нам</h5>

              <div class="accordion accordion-flush" id="faq-group-1">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                        Есть ли у вас корпоративные цвета, которые нужно использовать?
                    </button>
                  </h2>
                  <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                        Палитра бренда может включать от 1 до 4 фирменных цветов. Но даже одноцветные палитры нуждаются в разных оттенках для разных целей. Он должен отражать наиболее доминирующую черту личности вашего бренда и привлекать целевую аудиторию.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                        Есть ли у вас материалы, которые должны быть представлены на сайте (брошюры, пресс-релизы и т.д.)?
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                        Ответ типа: «Чтобы рассказать, какая у нас прекрасная компания, какие мы молодцы», — не годится. Если внятного месседжа не выходит, попробуйте посмотреть на инфоповод с другой стороны. Возможно, вы не на том заострили внимание или вам нужно добрать фактуру: значимые цифры и данные, от которых будет отталкиваться ваше PR-сообщение.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                        Какие функции и возможности на существующем сайте вы хотели бы сохранить?
                    </button>
                  </h2>
                  <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                        Метод append является одним из самых удобных способов сохранения данных на веб-сайте. Этот метод позволяет добавить новую информацию в уже существующий файл или создать новый файл и добавить туда данные. Часто данный метод используется для сохранения форм, которые заполняют пользователи. Например, вы можете использовать этот метод, чтобы сохранить введенные пользователем имя и электронную почту на вашем веб-сайте.
                        Источник: https://uchet-jkh.ru/i/kak-s-pomoshhyu-append-soxranit
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                        Составьте ваш ТОП-3 разочарований от существующего сайта.
                    </button>
                  </h2>
                  <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                   1) Помидоры
                   2) Ольга Бузова
                   3) Марафон желаний
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                        Что есть на сайтах ваших конкурентов, что вы бы тоже хотели иметь?
                    </button>
                  </h2>
                  <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                        У вашего бизнеса всегда будет конкурент, независимо от того, в какой нише вы находитесь. А когда вы занимаетесь электронной коммерцией, ваш веб-сайт может стать вашим козырем против конкурентов. При проведении полной оценки веб-сайта вам также необходимо провести анализ конкурентов . Некоторые люди говорят, что лучше всего игнорировать конкурентов и сосредоточиться на своем бизнесе. Однако анализ того, как они ведут свой бизнес, даст вам целостное представление о том, как вести свой бизнес. Эти ценные идеи можно улучшить, чтобы победить ваших конкурентов в вашей нише. В этой статье будут рассмотрены различные инструменты, которые вы можете использовать для анализа своих конкурентов. Наряду с этими инструментами есть советы от маркетинговой компании DARTA, которые помогут вам еще больше улучшить статистику вашего сайта.
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End F.A.Q Group 1 -->

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Вопросы от нас вам</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                        Что вам действительно нравится на сайтах, которыми вы пользуетесь?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                        Сайт информирует ваших клиентов круглый год и ночью и днем. Ссылку на сайт можно указать в визитках, в разговоре, в рекламных материалах, в различных справочниках, каталогах и поисковых системах. На сайте легко публиковать информацию, которую невозможно разместить ни в одном другом виде традиционной рекламы.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                        Что вас раздражает в сайтах, которые вы используете?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                     Пользователи и ваще всё человечество, ёпт.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                        Назовите 3 самые важные вещи, которые должны быть на новом сайте.
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                     1) Монетизация
                     2) Реклама
                     3) Жареая картошечка, с лучком и сальцем, ещё подольский хлебушек с чесночком и ващееее кайф
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                        Где размещается существующий сайт?
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                    В интернете, вы шо, дебилы?
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        У вас есть полный доступ?
                    </button>
                  </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                     Да. А у вас, нищеброды?
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->

          <!-- F.A.Q Group 3 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Вопросы от вас, а может быть квас?</h5>

              <div class="accordion accordion-flush" id="faq-group-3">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                        Можете ли вы передать пароли?
                    </button>
                  </h2>
                  <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                     Нет конечно, они мои, ёпт.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                        Кто с вашей стороны будет привлечен за разработку сайта?
                    </button>
                  </h2>
                  <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Бэкэндеры и мудак прораб.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                        У вас есть бюджетные ограничения, за которые необходимо вписаться?
                    </button>
                  </h2>
                  <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                    Да, вкладывайтесь в наш бизнесс и первыми станьте банкротами!
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                        Нужна ли вам в этом помощь?
                    </button>
                  </h2>
                  <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                     Нет, а вот вам пригодится. >:)
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-5" type="button" data-bs-toggle="collapse">
                        Если ли у вас логотип или его нужно создавать?
                    </button>
                  </h2>
                  <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                        Уникальность названия или картинки логотипа можно проверить через специальные сервисы. Сайт Роспатента. Есть два варианта поиска: платный и бесплатный. При бесплатном поиске ваше обозначение будет сравниваться только с уже зарегистрированными товарными знаками.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 3 -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
      <div class="copyright">
          &copy; Copyright <strong><span>Хороший админер</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://github.com/madhowl/">Michael Pobezshimov</a>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('assets/backend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/backend/js/main.js')}}"></script>

</body>

</html>
