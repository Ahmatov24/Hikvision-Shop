<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* kg/template/common/footer.twig */
class __TwigTemplate_ab69de3fe696804354a3276c1430aec4c226691b7214499b4c764d2f1c660373 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "?<div>
\t\t<footer class=\"fixed-footer m-fixed-footer\">
\t\t\t<div class=\"wrapper wrapper_full\">
\t\t\t\t<div class=\"product-brief__menu-container\">
\t\t\t\t\t<ul class=\"product-brief__menu\">
\t\t\t\t\t\t<li class=\"product-brief__menu-item\">
\t\t\t\t\t\t\t<a class=\"product-brief__menu-item-link\" href=\"/how-to-order\">Как сделать заказ</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"fixed-footer__right-container\">
\t\t\t\t\t<div class=\"user-counters\">
\t\t\t\t\t\t<div class=\"user-counters__item\">
\t\t\t\t\t\t\t<i class=\"user-counters__item-img fa fa fa-exchange\"></i>
\t\t\t\t\t\t\t<a class=\"user-counters__item-link\" href=\"/products/comparison\">Сравнить</a>
\t\t\t\t\t\t\t<div class=\"user-counters__item-count_style_viewed\" id=\"comparisonCounter\">0</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-counters__item\">
\t\t\t\t\t\t\t<i class=\"user-counters__item-img fa fa-shopping-basket\"></i>
\t\t\t\t\t\t\t<a class=\"user-counters__item-link\" href=\"/cart\">Корзина</a>
\t\t\t\t\t\t\t<div class=\"user-counters__item-count_style_basket\">0</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn-primary btn-block scroll-up-button\" id=\"scroll-up-button\" title=\"В начало страницы\">
\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<button class=\"btn btn-primary affix\" data-toggle=\"modal\" data-target=\"#question-dialog\">
\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\tЗадать вопрос
\t\t</button>
\t\t<dialog id=\"question-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Задать вопрос</div>
\t\t\t<div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div>
\t\t\t<form id=\"w2\" action=\"/callback/question\" method=\"post\" data-pjax=\"0\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-phone required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"questionform-phone\">Номер телефона</label>
\t\t\t\t\t\t<input type=\"text\" id=\"questionform-phone\" class=\"form-control\" name=\"QuestionForm[phone]\" placeholder=\"+7 (776) 996-00-70\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-fio required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"questionform-fio\">ФИО</label>
\t\t\t\t\t\t<input type=\"text\" id=\"questionform-fio\" class=\"form-control\" name=\"QuestionForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-question\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"questionform-question\">Вопрос</label>
\t\t\t\t\t\t<textarea id=\"questionform-question\" class=\"form-control\" name=\"QuestionForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-captcha\"><input type=\"hidden\" id=\"questionform-captcha\" class=\"form-control\" name=\"QuestionForm[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t</form>
\t\t</dialog>
\t\t<dialog id=\"callback-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Заказ на обратный звонок</div>
\t\t\t<div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div>
\t\t\t<form id=\"w3\" action=\"/callback\" method=\"post\" data-pjax=\"0\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-phone required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"callbackform-phone\">Номер телефона</label>
\t\t\t\t\t\t<input type=\"text\" id=\"callbackform-phone\" class=\"form-control\" name=\"CallbackForm[phone]\" placeholder=\"+7 (776) 996-00-70\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-fio required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"callbackform-fio\">ФИО</label>
\t\t\t\t\t\t<input type=\"text\" id=\"callbackform-fio\" class=\"form-control\" name=\"CallbackForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-question\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"callbackform-question\">Вопрос</label>
\t\t\t\t\t\t<textarea id=\"callbackform-question\" class=\"form-control\" name=\"CallbackForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-captcha\"><input type=\"hidden\" id=\"callbackform-captcha\" class=\"form-control\" name=\"CallbackForm[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t</form>
\t\t</dialog>
\t\t<dialog id=\"feedback-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Обратный звонок</div>
\t\t\t<div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div>
\t\t\t<form id=\"w4\" action=\"/callback/feedback\" method=\"post\" data-pjax=\"0\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-phone required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"feedbackform-phone\">Номер телефона</label>
\t\t\t\t\t\t<input type=\"text\" id=\"feedbackform-phone\" class=\"form-control\" name=\"FeedbackForm[phone]\" placeholder=\"+7 (776) 996-00-70\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-fio required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"feedbackform-fio\">ФИО</label>
\t\t\t\t\t\t<input type=\"text\" id=\"feedbackform-fio\" class=\"form-control\" name=\"FeedbackForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-question\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"feedbackform-question\">Вопрос</label>
\t\t\t\t\t\t<textarea id=\"feedbackform-question\" class=\"form-control\" name=\"FeedbackForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-captcha\"><input type=\"hidden\" id=\"feedbackform-captcha\" class=\"form-control\" name=\"FeedbackForm[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t</form>
\t\t</dialog>
\t\t<div class=\"popup-top\" id=\"productsComparison\">
\t\t\t<div class=\"popup-top__inner\">
\t\t\t\t<div class=\"popup-top__content\">
\t\t\t\t\t<div class=\"popup-top__container-image\">
\t\t\t\t\t\t<img class=\"popup-top__image\" id=\"productsComparisonImage\" src=\"\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"popup-top__container-text\">
\t\t\t\t\t\t<div class=\"popup-top__header\" id=\"productsComparisonHeader\"></div>
\t\t\t\t\t\t<div id=\"productsComparisonText\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"popup-top__container-btn\">
\t\t\t\t\t<a class=\"btn btn-primary popup-top__btn\" href=\"/products/comparison\">Сравнить</a>
\t\t\t\t</div>
\t\t\t\t<button class=\"popup-top__close-btn\" type=\"button\" id=\"productsComparisonCloseBtn\">
\t\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t <script src=\"./catalog/view/theme/kg/assets/resources/index.js\"></script>
\t\t <script>
         //jQuery(function (\$) {
\t\t\t\t//             jQuery(document).pjax(\"#products-pjax a\", { \"push\": true, \"replace\": false, \"timeout\": 10000, \"scrollTo\": false, \"container\": \"#products-pjax\" });
\t\t\t\t//             jQuery(document).off(\"submit\", \"#products-pjax form[data-pjax]\").on(\"submit\", \"#products-pjax form[data-pjax]\", function (event) { jQuery.pjax.submit(event, { \"push\": true, \"replace\": false, \"timeout\": 10000, \"scrollTo\": false, \"container\": \"#products-pjax\" }); });
\t\t\t\t//             Visit.init(910480);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab3c57() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab3c57() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/login\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"loginformmodal-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab3c57();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab3c57, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab3c57);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initReCaptcha() {
\t\t\t\t//                 jQuery(document).off('mousemove', initReCaptcha);
\t\t\t\t//                 let script = document.createElement('script');
\t\t\t\t//                 script.setAttribute('src', '//www.google.com/recaptcha/api.js?render=6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-');
\t\t\t\t//                 document.head.appendChild(script);
\t\t\t\t//                 script.onload = function () {
\t\t\t\t//                     window.reCaptchaFunctions.forEach(function (func) {
\t\t\t\t//                         func();
\t\t\t\t//                     });
\t\t\t\t//                 };
\t\t\t\t//             }
\t\t\t\t//             jQuery(document).on('mousemove', initReCaptcha);
\t\t\t\t//             jQuery('#w0').yiiActiveForm([{ \"id\": \"loginformmodal-email\", \"name\": \"email\", \"container\": \".field-loginformmodal-email\", \"input\": \"#loginformmodal-email\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Email».\" }); } }, { \"id\": \"loginformmodal-password\", \"name\": \"password\", \"container\": \".field-loginformmodal-password\", \"input\": \"#loginformmodal-password\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Пароль».\" }); } }], []);
\t\t\t\t//             jQuery('#w1').yiiActiveForm([{ \"id\": \"passwordresetrequestform-email\", \"name\": \"email\", \"container\": \".field-passwordresetrequestform-email\", \"input\": \"#passwordresetrequestform-email\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Электронная почта».\" }); value = yii.validation.trim(\$form, attribute, [], value); yii.validation.email(value, messages, { \"pattern\": /^[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\$/, \"fullPattern\": /^[^@]*<[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>\$/, \"allowName\": false, \"message\": \"Значение «Электронная почта» не является правильным email адресом.\", \"enableIDN\": false, \"skipOnEmpty\": 1 }); } }], []);
\t\t\t\t//             jQuery(\"#questionform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab5581() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab5581() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/callback/question\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"questionform-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab5581();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab5581, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab5581);
\t\t\t\t//             jQuery('#w2').yiiActiveForm([{ \"id\": \"questionform-phone\", \"name\": \"phone\", \"container\": \".field-questionform-phone\", \"input\": \"#questionform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"questionform-fio\", \"name\": \"fio\", \"container\": \".field-questionform-fio\", \"input\": \"#questionform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }], []);
\t\t\t\t//             jQuery(\"#callbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab583d() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab583d() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/callback\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"callbackform-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab583d();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab583d, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab583d);
\t\t\t\t//             jQuery('#w3').yiiActiveForm([{ \"id\": \"callbackform-phone\", \"name\": \"phone\", \"container\": \".field-callbackform-phone\", \"input\": \"#callbackform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"callbackform-fio\", \"name\": \"fio\", \"container\": \".field-callbackform-fio\", \"input\": \"#callbackform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }], []);
\t\t\t\t//             jQuery(\"#feedbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab5a95() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab5a95() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/callback/feedback\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"feedbackform-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab5a95();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab5a95, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab5a95);
\t\t\t\t//             jQuery('#w4').yiiActiveForm([{ \"id\": \"feedbackform-phone\", \"name\": \"phone\", \"container\": \".field-feedbackform-phone\", \"input\": \"#feedbackform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"feedbackform-fio\", \"name\": \"fio\", \"container\": \".field-feedbackform-fio\", \"input\": \"#feedbackform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }], []);
\t\t\t\t//         });
                </script>
\t<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 276
        if (($context["informations"] ?? null)) {
            // line 277
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 278
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 281
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 281);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 281);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "        </ul>
      </div>
      ";
        }
        // line 286
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 287
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 289
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 290
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 291
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 295
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 297
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 298
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 299
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 300
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 304
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 306
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 307
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 308
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 309
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 314
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer>
";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 318
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 318);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 318);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 318);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 321
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "kg/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 323,  465 => 321,  461 => 320,  448 => 318,  444 => 317,  438 => 314,  428 => 309,  422 => 308,  416 => 307,  410 => 306,  405 => 304,  396 => 300,  390 => 299,  384 => 298,  378 => 297,  373 => 295,  364 => 291,  358 => 290,  352 => 289,  347 => 287,  344 => 286,  339 => 283,  328 => 281,  324 => 280,  319 => 278,  316 => 277,  314 => 276,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/footer.twig", "");
    }
}
