<?php

require 'phpLibs/php-multilang/MultiLang.php';
$ml = new MultiLang();
$lang = 'ru';

if (((isset($_GET) && isset($_GET['lang']) && $_GET['lang'] === 'ru'))
  || (isset($_COOKIE) && isset($_COOKIE['rl_lang_front']) && $_COOKIE['rl_lang_front'] === 'ru')
) {
  $ml->setLanguage('RU');
  $lang = 'ru';
};

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
  <meta charset="utf-8" />

  <title><?= $ml->tr('Отдел мейнтенанса') ?> Myseahomes</title>
  <meta name="description" content="<?= $ml->tr('Техническое обслуживание и ремонт Вашей недвижимости на Северном Кипре') ?>" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#1c222a" />
  <link rel="shortcut icon" href="favicon.ico" />
  <meta name="msapplication-TileColor" content="#1c222a" />
  <meta name="msapplication-config" content="browserconfig.xml" />
  <meta name="theme-color" content="#1c222a" />

  <link rel="stylesheet" href="css/fonts.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" />
  <link rel="stylesheet" href="css/main.min.css" />

  <!-- Yandex.Metrika counter -->
  <!-- <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function () {
            (m[i].a = m[i].a || []).push(arguments);
          };
        m[i].l = 1 * new Date();
        (k = e.createElement(t)),
          (a = e.getElementsByTagName(t)[0]),
          (k.async = 1),
          (k.src = r),
          a.parentNode.insertBefore(k, a);
      })(
        window,
        document,
        'script',
        'https://mc.yandex.ru/metrika/tag.js',
        'ym'
      );

      ym(72242728, 'init', {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
      });
    </script>
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/72242728"
          style="position: absolute; left: -9999px"
          alt=""
        /></div
    ></noscript> -->
  <!-- /Yandex.Metrika counter -->
</head>

<body>
  <header id="top" class="header">
    <div class="wrap">
      <a href="/"><img class="logo" src="img/logo.png" alt="Myseahomes logo" /></a>
    </div>
  </header>

  <section class="hero">
    <div class="wrap">
      <h1>
        <span class="hero__subtitle"><?= $ml->tr('Отдел мейнтенанса') ?></span><br />
        <span class="text--accented">My</span>seahomes
      </h1>
      <p class="hero__desc">
        <span class="text--accented">/</span> <?= $ml->tr('Техническое обслуживание <br>и ремонт Вашей недвижимости <br>на') ?>
        <span class="text--accented text--uppercased text--underlined text--bolded"><?= $ml->tr('Северном Кипре') ?></span>
      </p>
      <button class="btn trigger"><?= $ml->tr('Оставить заявку') ?></button>
    </div>
  </section>

  <section class="differents">
    <div class="wrap">
      <h2 class="uppercased">
        <?= $ml->tr('Чем мы') ?> <br /><span class="text--accented"><?= $ml->tr('отличаемся') ?></span> <?= $ml->tr('от конкурентов') ?>?
      </h2>
      <div class="differents__grid">
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">1</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr('Наша команда по обслуживанию недвижимости хорошо оснащена для решения любых вопросов от А до Я') ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">2</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr('Мы поддерживаем резиденции наших дорогих и любимых клиентов, квартиры и виллы на Северном Кипре в первозданном состоянии круглый год.') ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">3</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr('Домовладельцы чувствуют себя в безопасности, зная, что об их собственности заботятся, где бы они не находились.') ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">4</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr('Работаем в сфере обслуживания недвижимости с 2015 года и являемся профессионалами в этой области, что сэкономит Вам время и средства для решения любого вопроса.') ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">5</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr('Мы улучшаем вашу повседневную жизнь, создавая здоровую и чистую окружающую среду, а также поддерживая вашу собственность в идеальном состоянии.') ?>
          </div>
        </div>
        <div class="differents__item differents__item--bordered">
          <div class="differents__item__title text--uppercased">
            <span><?= $ml->tr('Позвольте нам взять на себя заботу') ?></span><br />
            <?= $ml->tr('о Вашей недвижимости') ?>!
          </div>
          <button class="btn btn--small trigger"><?= $ml->tr('Оставить заявку') ?></button>
        </div>
      </div>
    </div>
  </section>

  <section class="more">
    <div class="wrap">
      <h2 class="text--uppercased heading--smaller">
        <span class="text--accented"><?= $ml->tr('Делаем больше') ?>, </span><br /><?= $ml->tr('чем требуют наши обязанности') ?>!
      </h2>
      <div class="text--smaller">
        <?= $ml->tr('Заполните форму ниже и мы сделаем бесплатный аудит и предложим Вам также некоторые БЕСПЛАТНЫЕ услуги') ?>
      </div>
      <form action="#" class="form">
        <input type="text" name="name" placeholder="<?= $ml->tr('Введите ваше имя') ?>" required class="form__control form__control--wide" autocomplete="off" />
        <input type="tel" name="phone" placeholder="<?= $ml->tr('Контактный телефон') ?>" required class="form__control form__control--wide" autocomplete="off" />
        <button class="btn btn--wide" type="submit"><?= $ml->tr('Оставить заявку') ?></button>
      </form>
    </div>
  </section>

  <section id="services" class="services">
    <h2 class="text--centered">
      <?= $ml->tr('Наши') ?> <span class="text--accented"><?= $ml->tr('услуги') ?></span>
    </h2>
    <div class="wrap">
      <div class="services__item">
        <div class="img__wrap">
          <img src="img/3.jpg" alt="<?= $ml->tr('Ландшафтный') ?> <?= $ml->tr('дизайн') ?>" />
        </div>
        <div class="services__box">
          <h3><span class="text--accented"><?= $ml->tr('Ландшафтный') ?></span> <?= $ml->tr('дизайн') ?></h3>
          <h3><span class="text--accented"><?= $ml->tr('Уход') ?></span> <?= $ml->tr('за садом') ?></h3>
          <h3><span class="text--accented"><?= $ml->tr('Обслуживание') ?></span> <?= $ml->tr('бассейна') ?></h3>

          <button class="btn trigger"><?= $ml->tr('Узнать подробнее') ?></button>
        </div>
      </div>
      <div class="services__item">
        <div class="img__wrap">
          <img src="img/4.jpg" alt="<?= $ml->tr('Ремонт') ?>" />
        </div>
        <div class="services__box">
          <h3><span class="text--accented"><?= $ml->tr('Ремонт') ?></span> <?= $ml->tr('электрики и сантехники') ?></h3>
          <h3><span class="text--accented"><?= $ml->tr('Покраска') ?></span> <?= $ml->tr('и побелка') ?></h3>

          <button class="btn trigger"><?= $ml->tr('Узнать подробнее') ?></button>
        </div>
      </div>
    </div>
  </section>

  <section id="offer" class="offer">
    <div class="wrap">
      <h2>
        <?= $ml->tr('Что мы') ?> <span class="text--accented text--underlined"><?= $ml->tr('предлагаем') ?></span>
      </h2>
      <div class="offer__grid">
        <div class="offer__item line__bottom line__bottom--first">
          <i class="fas fa-check-double"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Заявка') ?></span>
          </h3>
          <p>
            <?= $ml->tr('Вы оставляете заявку на нашем сайте или по телефону.') ?>
          </p>
          <div class="offer__number"><span>1</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="far fa-eye"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Бесплатный') ?></span>
            <?= $ml->tr('аудит недвижимости') ?>
          </h3>
          <p><?= $ml->tr('Мы проводим аудит Вашей недвижимости: оценка состояния, расчет стоимости обслуживания или ремонта. Рекомендации по улучшению состояния недвижимости или ее составляющих.') ?></p>
          <div class="offer__number"><span>2</span></div>
        </div>
        <div class="offer__item line__bottom line__bottom--last">
          <i class="fas fa-tasks"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Дополнительные') ?></span>
            <?= $ml->tr('услуги') ?>
          </h3>
          <p><?= $ml->tr('Вы выбираете дополнительные услуги по Вашему желанию, исходя из наших рекомендаций (необязательно).') ?></p>
          <div class="offer__number"><span>3</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fa fa-file-contract"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Подписание') ?></span>
            <?= $ml->tr('договора') ?>
          </h3>
          <p><?= $ml->tr('Мы подписываем договор мейнтенанса, в котором юридически фиксируем нашу ответственность и обязательства перед собственником жилья.') ?></p>
          <div class="offer__number"><span>6</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fa fa-rocket"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Начало') ?></span>
            <?= $ml->tr('работы') ?>
          </h3>
          <p><?= $ml->tr('Мы приступаем к выполнению необходимых работ по договору мейнтенанса.') ?></p>
          <div class="offer__number"><span>5</span></div>
        </div>
        <div class="offer__item line__bottom line__bottom--last line__right">
          <i class="fa fa-hammer"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Начало') ?></span>
            <?= $ml->tr('работы') ?>
          </h3>
          <p><?= $ml->tr('Мы приступаем к выполнению необходимых работ по ремонту.') ?></p>
          <div class="offer__number"><span>4</span></div>
        </div>
        <div class="offer__item line__bottom line__left">
          <i class="fa fa-chalkboard-teacher"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Гарантия') ?></span>
          </h3>
          <p><?= $ml->tr('Мы отвечаем за качество проведенного ремонта и периодически будем проверять его состояние (БЕСПЛАТНО).') ?></p>
          <div class="offer__number"><span>7</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fa fa-money-bill-wave"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('RELAX') ?></span>
          </h3>
          <p><?= $ml->tr('Вы получаете удовольствие от ежедневного созерцания Вашего прекрасного сада и чистого бассейна.') ?></p>
          <div class="offer__number"><span>8</span></div>
        </div>
        <div class="offer__item offer__item--bg line__bottom line__bottom--last">
          <div class="bg">
            <h3>
              <span class="text--accented"><?= $ml->tr('Нас') ?></span>
              <br>
              <?= $ml->tr('рекомендуют') ?>
              <br>
              <span class="text--accented"><?= $ml->tr('друзьям') ?></span>
            </h3>
          </div>
          <div class="offer__number">
            <span><i class="fas fa-check"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="why-we" class="why-we">
    <div class="wrap">
      <h2 class="text--centered">
        <span class="text--accented"><?= $ml->tr('Почему мы') ?></span>, <?= $ml->tr('а не кто-то другой') ?>
      </h2>
      <div class="why-we__grid">
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr('Тщательный анализ') ?></span> <?= $ml->tr('проблемных зон у Вашей недвижимости и выбор надежных методов решения.') ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr('Быстрое решение всех') ?></span> <?= $ml->tr('необходимых вопросов с ремонтом, уборкой и обслуживанием.') ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr('Контроль') ?></span> <?= $ml->tr('и выполнение работы в обещанный срок.') ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr('Регулярное предоставление') ?></span> <?= $ml->tr('собственнику отчетов о проведенной работе') ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr('Быстрое разрешение') ?></span> <?= $ml->tr('конфликтных ситуаций и бытовых вопросов') ?>
          </p>
          <p><?= $ml->tr('Для нас — Клиент всегда прав!') ?></p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr('Обеспечение полной') ?></span> <?= $ml->tr('сохранности Вашей собственности, с постоянной заботой и трепетным отношением к ней, как к своей.') ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered why-we__item--last">
          <p>
            <span class="text--accented"><?= $ml->tr('Наша команда на связи') ?></span> 24/7
          </p>
          <p><?= $ml->tr('А еще мы просто хорошие ребята)') ?></p>
        </div>
      </div>
    </div>
  </section>

  <section id="photo" class="photo">
    <div class="wrap">
      <div class="photo__inner">
        <img src="./img/5.jpeg" alt="<?= $ml->tr('Отличная сделка!') ?>">
      </div>
    </div>
  </section>

  <section id="reviews" class="reviews">
    <div class="wrap">
      <h2 class="text--centered">
        <span class="text--accented"><?= $ml->tr('Отзывы') ?></span>
      </h2>
      <div class="reviews__grid">
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-1.jpg" alt="<?= $ml->tr('Отзыв Анатолий') ?>">
          <p>
            <?= $ml->tr('Обратился впервые к Александру (MySeaHomes) пару лет назад, он сдал квартиру в этот же день, а через 2 дня получил первые деньги за аренду. Класс! Рекомендую!') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Анатолий') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-2.jpg" alt="<?= $ml->tr('Отзыв Анна Варнавская') ?>">
          <p>
            <?= $ml->tr('Всем привет! Работала с Александром Myseahomes, несколько раз, очень понравилось! Все четко, в обговоренные сроки. Хочу порекомендовать его, как надежного партнера!') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Анна Варнавская') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-3.jpg" alt="<?= $ml->tr('Отзыв Валентин Пранчук') ?>">
          <p>
            <?= $ml->tr('Уже давно работаем с Александром, зарекомендовал себя - как порядочный, честный партнер. Ему можно доверить не только недвижимость для работы, но и поручить решение многих задач. Всегда отличная отчетность, все во время. Очень приятно работать и общаться. Однозначно рекомендую.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Валентин Пранчук') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-4.jpg" alt="<?= $ml->tr('Отзыв Варвара Пенькова') ?>">
          <p>
            <?= $ml->tr('Несколько раз пользовалась сервисом и осталась очень довольна, квартиру сдали быстро и получили уже первые деньги спустя 3 дня. Пользуйтесь их услугами смело!') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Варвара Пенькова') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-5.jpg" alt="<?= $ml->tr('Отзыв Vasiliy Didukh') ?>">
          <p>
            <?= $ml->tr('Александра знаю давно, с тех времен, когда он только начинал свою деятельность в этом направлении на Северном Кипре. Сам много раз работал с ним в этом направлении. Всем, кто меня знает и не знает, могу рекомендовать пользоваться его услугами. Сервис супер! Деньги всегда получаю вовремя.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Vasiliy Didukh') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-6.jpg" alt="<?= $ml->tr('Отзыв Елена Хасанова') ?>">
          <p>
            <?= $ml->tr('Работала с Александром MySeaHomes неоднократно и продолжаю работать. Меня все устраивает. Заранее согласовывает каждый шаг, арендаторов тщательно подбирает. За недвижимостью полный контроль. Ни о чем даже волноваться не нужно. Выплаты всегда вовремя. Или по запросу без проблем.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Елена Хасанов') ?>а</span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-8.jpg" alt="<?= $ml->tr('Отзыв Елена Быкова') ?>">
          <p>
            <?= $ml->tr('Познакомились случайно. Но случайностей, как оказалось, не бывает) Работаем уже давненько. Нас все устраивает. Рекомендуем всем, кто постоянно на острове не проживает. Пускай ваша квартира работает и приносит прибыль)') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Елена Быкова') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-9.jpg" alt="<?= $ml->tr('Отзыв Елена Седякина') ?>">
          <p>
            <?= $ml->tr('Много раз пользовалась услугами этого сервиса в лице Александра, мне очень нравится. Можно доверить ему свою недвижимость под сдачу в аренду. Обычно зимой он сдает помесячно, летом конечно посуточно. Чтобы у владельцев был хороший профит.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Елена Седякина') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-10.jpg" alt="<?= $ml->tr('Отзыв Игорь Коршунов') ?>">
          <p>
            <?= $ml->tr('Рекомендую! Надежный, проверенный временем и сотрудничеством.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Игорь Коршунов') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-11.jpg" alt="<?= $ml->tr('Отзыв Ильяс Ибрагимов') ?>">
          <p>
            <?= $ml->tr('Давно с ним сотрудничаю. Все отлично. Всегда выполняет свои обязательства. Кто ищет человека, кому можно доверить свою недвижимость для сдачи в аренду - обращайтесь сюда. Останетесь довольны)') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Ильяс Ибрагимов') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-12.jpg" alt="<?= $ml->tr('Отзыв Лена Степанова') ?>">
          <p>
            <?= $ml->tr('Давно уже знаю Сашу и работаем с ним. Берет в работу как квартиры, так и виллы. Клиенты всегда есть. Арендаторов отбирает особенно тщательно. Соблюдает все моменты, чтобы собственники жилья ни о чем не волновались. А арендаторы были довольны. Win - Win ))') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Лена Степанова') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-13.jpg" alt="<?= $ml->tr('Отзыв Леонид Дзюба') ?>">
          <p>
            <?= $ml->tr('Работаю с Александром давно уже без всякого договора. Достаточно устного. Остров маленький. Зарекомендовал себя профессионалом в своем деле. Обращайтесь не раздумывая. Я рекомендую его друзьям.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Леонид Дзюба') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-14.jpg" alt="<?= $ml->tr('Отзыв Марина Матвеева-Коджадал') ?>">
          <p>
            <?= $ml->tr('Давно знаю Александра и его историю становления на нашем острове. В настоящий момент он профессионал своего дела. Могу рекомендовать его всем желающим иметь пассивный доход от своей недвижимости, когда вы тут не живете.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Марина Матвеева-Коджадал') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-15.jpg" alt="<?= $ml->tr('Отзыв Наталья Дзюбенко') ?>">
          <p>
            <?= $ml->tr('Хочу поделиться с вами контактом этого человека. Я искала того, кому можно доверить свою недвижимость на нашем острове, чтобы получать доход от сдачи в аренду. Наслышана о стольких моментах и нюансах, что очень страшно доверить свое кому либо. Но вот нашла Александра. С первых слов поняла, что ему можно доверить. Начали работать, я все ждала подвох, а он так и не наступал. На сегодняшний момент, могу точно сказать, рекомендую всем, особенно друзьям. Очень приятно работать и общаться.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Наталья Дзюбенко') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-16.jpg" alt="<?= $ml->tr('Отзыв Нурида Абдылбаева') ?>">
          <p>
            <?= $ml->tr('Работаем давно с Александром. Все супер! Сервис отличный! Конечно с арендаторами работать не просто, все люди разные. Но Александр умеет все конфликтные ситуации всегда уладить. Рекомендую всем. Особенно районы Алагади, Есентепе, Бахчели, Татлысу.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Нурида Абдылбаева') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-17.jpg" alt="<?= $ml->tr('Отзыв Светлана Алешкевич') ?>">
          <p>
            <?= $ml->tr('Как коллегу знаю Александра давно, этот сервис у них налажен очень хорошо. Сами пользуемся его услугами. Всегда хороший профит и вовремя. Звоните, условия вам понравятся.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Светлана Алешкевич') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-18.jpg" alt="<?= $ml->tr('Отзыв Сергей Кропанев') ?>">
          <p>
            <?= $ml->tr('Несколько лет работаю с Александром (Myseahomes), проверен временем и делами. Все мы начинали когда-то с чего-то на острове. В данный момент это профессионал своего дела. Смело обращайтесь, останетесь довольны. Рекомендую владельцам недвижимости, кто хочет, чтобы его квартира работала, пока хозяев нет на острове.') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Сергей Кропанев') ?></span>
          </p>
        </div>
        <div class="reviews__item reviews__item--bordered">
          <img src="./img/review-19.jpg" alt="<?= $ml->tr('Отзыв Вячеслав Желиховский') ?>">
          <p>
            <?= $ml->tr('Думаю меня многие знают и знают, что значит мое слово. Хочу порекомендовать этого человека - Александра друзьям, знакомым и просто всем. Сервис сдачи в аренду недвижимости налажен очень хорошо. Насколько я знаю, внутренних запросов у него больше, чем недвижимости в работе. Потому, что репутация говорит сама за себя. Даже Booking не нужен)') ?>
            <span class="reviews__author text--accented"><i class="fas fa-user-shield"></i> <?= $ml->tr('Вячеслав Желиховский') ?></span>
          </p>
        </div>

      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer__grid">
      <div class="footer__item footer__title">
        <p class="text--uppercased">
          <span class="text--accented">My</span>seahomes
        </p>
      </div>
      <div class="footer__item footer__nav">
        <a href="#top"><?= $ml->tr('Главная') ?></a>
        <a href="#services"><?= $ml->tr('Наши услуги') ?></a>
        <a href="#offer"><?= $ml->tr('Что мы предлагаем') ?></a>
        <a href="#why-we"><?= $ml->tr('Почему мы') ?></a>
      </div>
      <div class="footer__item footer__social">
        <p><?= $ml->tr('Ищите нас в соц сетях') ?></p>
        <div class="footer__social__grid">
          <a href="https://www.instagram.com/targetolog_ustinov/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/Myseahomes" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://t.me/targetolog_ustinov" target="_blank" class="telegram"><i class="fab fa-telegram-plane"></i></a>
          <!--<a href="#" target="_blank" class="viber"
              ><i class="fab fa-viber"></i
            ></a>-->
          <a href="https://wa.me/905338365211" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="footer__item footer__phone">
        <a href="tel:+905338365211" class="btn">+905338365211</a>
        <p><?= $ml->tr('Звоните, мы на связи') ?></p>
      </div>
      <div class="footer__item footer__copyrights">
        <a href="https://www.myseahomes.com/privacy-policy.html" target="_blank"><?= $ml->tr('Политика конфиденциальности') ?></a>
        <p><?= $ml->tr('Все права защищены') ?> <br />© 2022</p>
      </div>
      <div class="footer__item footer__address">
        <p>
          <i class="fas fa-map-marker-alt"></i> Catalkoy, Ayaztepe Sokak,
          Riverside Sitesi
        </p>
      </div>
    </div>
  </footer>

  <div id="modal" data-izimodal-title="<?= $ml->tr('Оставьте заявку') ?>" data-izimodal-subtitle="<?= $ml->tr('Мы перезвоним Вам в ближайшие 15 минут') ?>">
    <form action="#" class="form">
      <input type="text" name="name" placeholder="<?= $ml->tr('Введите Ваше имя') ?>" required class="form__control form__control--wide" autocomplete="off" />
      <input type="tel" name="phone" placeholder="<?= $ml->tr('Контактный телефон') ?>" required class="form__control form__control--wide" autocomplete="off" />
      <button class="btn btn--wide" type="submit"><?= $ml->tr('Оставить заявку') ?></button>
    </form>
  </div>

  <div id="thank-you" data-izimodal-title="<?= $ml->tr('Спасибо') ?>!" data-izimodal-subtitle="<?= $ml->tr('Мы перезвоним Вам в ближайшие 15 минут') ?>"></div>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <script src="js/libs.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
  <script src="js/common.js"></script>
</body>

</html>
