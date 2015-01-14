<?php 
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php'); 
include("bm.php");
$arResult = Array (
    '0' => Array (
        'IBLOCK_TYPE_ID' => 'articles',
        'LID' => 'ru',
        'NAME' => 'Статьи',
        'SECTION_NAME' => 'Разделы',
        'ELEMENT_NAME' => 'Статья',
        'ID' => 'articles',
        'SECTIONS' => 'Y',
        'EDIT_FILE_BEFORE' => '',
        'EDIT_FILE_AFTER' => '',
        'IN_RSS' => 'N',
        'SORT' => '20',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Статьи',
                'SECTION_NAME' => 'Разделы',
                'ELEMENT_NAME' => 'Статья',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '2',
                'CODE' => 'articles',
                'NAME' => 'Статьи',
                'ACTIVE' => 'Y',
                'SORT' => '200',
                'LIST_PAGE_URL' => '/content/articles/',
                'DETAIL_PAGE_URL' => '/content/articles/#ELEMENT_ID#/',
                'SECTION_PAGE_URL' => '',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'Y',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы статей',
                'SECTION_NAME' => 'Раздел статей',
                'ELEMENTS_NAME' => 'Статьи',
                'ELEMENT_NAME' => 'Статья',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'KEYWORDS' => Array (
                        'NAME' => 'Ключевые слова',
                        'ACTIVE' => 'Y',
                        'SORT' => '100',
                        'CODE' => 'KEYWORDS',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'AUTHOR' => Array (
                        'NAME' => 'Автор',
                        'ACTIVE' => 'Y',
                        'SORT' => '200',
                        'CODE' => 'AUTHOR',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'FORUM_TOPIC_ID' => Array (
                        'NAME' => 'Идентификатор темы форума',
                        'ACTIVE' => 'Y',
                        'SORT' => '300',
                        'CODE' => 'FORUM_TOPIC_ID',
                        'PROPERTY_TYPE' => 'N',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '0',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'FORUM_MESSAGE_CNT' => Array (
                        'NAME' => 'Количество комментариев',
                        'ACTIVE' => 'Y',
                        'SORT' => '400',
                        'CODE' => 'FORUM_MESSAGE_CNT',
                        'PROPERTY_TYPE' => 'N',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '0',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'vote_count' => Array (
                        'NAME' => 'Количество голосов',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'vote_count',
                        'PROPERTY_TYPE' => 'N',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '0',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'vote_sum' => Array (
                        'NAME' => 'Сумма голосов',
                        'ACTIVE' => 'Y',
                        'SORT' => '600',
                        'CODE' => 'vote_sum',
                        'PROPERTY_TYPE' => 'N',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '0',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'rating' => Array (
                        'NAME' => 'Рейтинг',
                        'ACTIVE' => 'Y',
                        'SORT' => '700',
                        'CODE' => 'rating',
                        'PROPERTY_TYPE' => 'N',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '0',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'THEMES' => Array (
                        'NAME' => 'Темы',
                        'ACTIVE' => 'Y',
                        'SORT' => '800',
                        'CODE' => 'THEMES',
                        'PROPERTY_TYPE' => 'G',
                        'MULTIPLE' => 'Y',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '1',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                    'BROWSER_TITLE' => Array (
                        'NAME' => 'Заголовок окна браузера',
                        'ACTIVE' => 'Y',
                        'SORT' => '1000',
                        'CODE' => 'BROWSER_TITLE',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '1',
                        'LINK_IBLOCK_ID' => '',
                        'IS_REQUIRED' => '',
                        'USER_TYPE' => '',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => '',
                                'EXTERNAL_ID' => '1051',
                                'NAME' => 'Комплексные компоненты',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '01.10.2009',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => 'Описание новой технологии в &amp;quot;Битрикс: Управление сайтом 6.0&amp;quot;
',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '&lt;b&gt;Определение&lt;/b&gt;
&lt;br /&gt;

&lt;br /&gt;
Обычные (простые, одностраничные) компоненты создают какую-либо область на одной конкретной странице. Например, компонент показа новости по ее коду создает на одной конкретной странице (той, где он размещен) область, в которой показывает заголовок, текст и прочие параметры новости.
&lt;br /&gt;

&lt;br /&gt;
Комплексные (сложные, многостраничные) компоненты - это компоненты, которые создают разделы сайта. Например, компонент каталога создает на сайте весь раздел каталога: и список каталогов, и список групп, и страницы товаров. То есть комплексный компонент состоит из набора страниц. Комплексные компоненты строятся на основе обычных компонентов.
&lt;br /&gt;

&lt;br /&gt;
&lt;b&gt;MVC&lt;/b&gt;
&lt;br /&gt;

&lt;br /&gt;
Комплексные компоненты построены на паттерне проектирования MVC (Model View Controller), в котором модель данных приложения, пользовательский интерфейс и управляющая логика разделены на три отдельных части, так, что модификация одной из частей оказывает минимальное воздействие на другие части.
&lt;br /&gt;

&lt;br /&gt;
Model (модель) в данном случае - это ядро системы. Model представляет собой данные и бизнес-логику, отвечает на запросы View. View (представление) - это простые компоненты (на самом деле все чуть сложнее, но для начала можно понимать именно так). View представляет вывод данных пользователю, запрашивает данные у Model, посылает действия пользователя в Controller (как правило через HTTP запрос). Controller (контроллер) - это комплексный компонент. Controller на основании действий пользователя и ответа Model выбирает соответствующий View.
&lt;br /&gt;

&lt;br /&gt;
Алгоритм работы паттерна MVC примерно таков: на основании действий пользователя Controller (контроллер) определяет, какое View (представление) должно быть показано пользователю, и отдает управление этому View (представлению); View (представление) запрашивает необходимые ему данные у Model (модели), получает эти данные и выводит их соответствующим образом пользователю; пользователь с помощью каких-либо элементов управления, которые ему предоставил View (представление), посылает новый запрос в Controller (контроллер).
&lt;br /&gt;

&lt;br /&gt;
Алгоритм работы паттерна MVC в применении к комплексным компонентам таков: на основании действий пользователя (как правило HTTP запрос) комплексный компонент (controller) определяет, какая страница (view) должна быть показана пользователю, и подключает свой шаблон компонента для этой страницы; шаблон страницы (view) подключает обычные компоненты, настраивая необходимым образом их свойства; обычные компоненты выполняют свою работу: запрашивают данные у ядра (model), форматируют их и выводят посетителю, а так же предоставляют пользователю различные элементы управления (ссылки, формы, кнопки и т.п.); пользователь с помощью каких-либо элементов управления, посылает новый запрос (как правило HTTP запрос) комплексному компоненту (controller).
&lt;br /&gt;
&lt;BREAK /&gt;
&lt;br /&gt;
&lt;b&gt;Пример&lt;/b&gt;
&lt;br /&gt;

&lt;br /&gt;
Расмотрим упрощенный пример работы комплексного компонента новостей. Пусть у нас есть обычные компоненты список новостей и детальной новости (последний принимает во входных параметрах код новости, которую нужно показать).
&lt;br /&gt;

&lt;br /&gt;
Раздел новостей можно организовать, например, разместив на странице index.php компонент списка новостей, а на странице news.php - компонент детальной новости. При этом у компонента списка новостей нужно настроить входные параметры так, чтобы он мог формировать ссылки на страницу детальной новости (с кодом новости), а у компонента детальной новости нужно настроить входные параметры так, чтобы он мог формировать ссылку на страницу списка новостей. Для того, чтобы задать ссылку на страницу детальной новости, нужно задать путь к этой странице, а так же название параметра, в котором будет передаваться код новости для показа. То же название параметра нужно задать и во входных параметрах компонента детальной новости, чтобы он знал, где брать код новости для показа. Даже в данном максимально упрощенном случае настройки не так просты. А если это набор из десятков компонентов форума?
&lt;br /&gt;

&lt;br /&gt;
Более удобной альтернативой для сборщика сайта будет использование комплексного компонента новостей. Этот компонент, например, можно просто установить на страницу index.php и все. Согласованием ссылок и параметров будет заниматься сам комплексный компонент. От сборщика сайта никаких дополнительных действий не потребуется. Для создания комплексного компонента новостей нам необходимо создать новый компонент, в коде которого проверить, пришел ли в параметрах код новости. Если код новости пришел, то нужно подключить страницу шаблона комплексного компонента, которая предназначена для показа детальной новости, а если не пришел - страницу для показа списка новостей. Страницы шаблона комплексного компонента будут содержать подключение соответствующих обычных компонентов с правильной настройкой их входных параметров. Обычные компоненты будут выполнять свою обычную работу. Им все равно, кто их вызвал и зачем. Для обычных компонентов важна только правильная настройка их входных параметров.
&lt;br /&gt;

&lt;br /&gt;
Таким образом реализуется паттерн MVC: на комплексный компонент новостей (controller) приходит HTTP запрос (действия пользователя); комплексный компонент новостей (controller) проверяет, установлен ли через HTTP запрос код новости и подключает из своего шаблона страницу списка новостей или страницу детальной новости (view); подключенная страница в свою очередь подключает соответствующий обычный компонент, устанавливая при этом его входные параметры соответствующим образом; обычный компонент выполняет свою работу: запрашивает данные у ядра (model), форматирует их и выводит посетителю, а так же предоставляет пользователю различные элементы управления (ссылки, формы, кнопки и т.п.); пользователь с помощью каких-либо элементов управления, посылает новый HTTP запрос на комплексный компонент новостей (controller); и далее по кругу.',
                                'DETAIL_TEXT_TYPE' => 'html',
                                'DATE_CREATE' => '12.01.2015 23:09:56',
                                'TIMESTAMP_X' => '12.01.2015 23:09:56',
                                'TAGS' => 'компонент, компоненты 2.0, MVC',
                                'PROPERTIES' => Array (
                                    'KEYWORDS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'компонент, компоненты 2.0, MVC',
                                    ),
                                    'AUTHOR' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'Алексей Кирсанов',
                                    ),
                                    'FORUM_TOPIC_ID' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '76',
                                    ),
                                    'FORUM_MESSAGE_CNT' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '1',
                                    ),
                                    'vote_count' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '1',
                                    ),
                                    'vote_sum' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '5',
                                    ),
                                    'rating' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '3.3',
                                    ),
                                    'THEMES' => Array (
                                        'PROPERTY_TYPE' => 'G',
                                        'VALUE' => Array (
                                            '0' => '4',
                                        ),
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => '',
                                'EXTERNAL_ID' => '1341',
                                'NAME' => 'Пользовательские движки шаблонизации',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '02.10.2009',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => 'Добавление нового движка шаблонизации на сайт',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '&lt;p&gt;Для добавления нового движка шаблонизации на сайт в файл &lt;i&gt;/bitrix/php_interface/init.php&lt;/i&gt; необходимо добавить следующее:&lt;/p&gt;

&lt;p&gt;1. Глобальную переменную&lt;i&gt; $arCustomTemplateEngines&lt;/i&gt;, которая содержит ассоциативный массив, каждый элемент которого имеет вид:
  &lt;br /&gt;
 &lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;код_шаблонизатора&amp;quot; =&amp;gt; array(
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;templateExt&amp;quot; =&amp;gt; array(&amp;quot;расширение1&amp;quot;[, &amp;quot;расширение2&amp;quot;...]),
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;function&amp;quot; =&amp;gt; &amp;quot;имя_функции_подключения_движка&amp;quot;
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;)&lt;/i&gt;
  &lt;br /&gt;
 где:
  &lt;br /&gt;
 &lt;i&gt;&amp;quot;код_шаблонизатора&amp;quot;&lt;/i&gt; - произвольное уникальное в рамках сайта слово;
  &lt;br /&gt;
 &lt;i&gt;&amp;quot;расширениеN&amp;quot;&lt;/i&gt; - расширение файла, который должен обрабатываться этим движком шаблонизации;
  &lt;br /&gt;
 &lt;i&gt;&amp;quot;имя_функции_подключения_движка&amp;quot;&lt;/i&gt; - имя функции, которая будет вызываться, если шаблон компонента имеет указанное расширение.
  &lt;br /&gt;
 &lt;/p&gt;

&lt;p&gt;2. Функцию подключения движков:
  &lt;br /&gt;
 &lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;function имя_функции_подключения_движка($templateFile, $arResult, $arParams, $arLangMessages, $templateFolder, $parentTemplateFolder, $template)&lt;/i&gt;&lt;i&gt;,&lt;/i&gt;
  &lt;br /&gt;
 где:
  &lt;br /&gt;
 &lt;span&gt;&lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $templateFile &amp;ndash; &lt;/em&gt;путь к файлу шаблона относительно корня сайта&lt;em&gt;,
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $arResult &amp;ndash;&lt;/em&gt; массив результатов работы компонента,
    &lt;br /&gt;
   &lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $arParams &amp;ndash;&lt;/em&gt; массив входных параметров компонента,
    &lt;br /&gt;
   &lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $arLangMessages &amp;ndash;&lt;/em&gt; массив языковых сообщений (переводов) шаблона,
    &lt;br /&gt;
   &lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $templateFolder &amp;ndash;&lt;/em&gt; путь к папке шаблона относительно корня сайта (если шаблон лежит не в
    &lt;br /&gt;
   папке, то эта переменная пуста),
    &lt;br /&gt;
   &lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $parentTemplateFolder -&lt;/em&gt; путь относительно корня сайта к папке шаблона комплексного
    &lt;br /&gt;
   компонента, в составе которого подключается данный компонент (если компонент
    &lt;br /&gt;
   подключается самостоятельно, то эта переменная пуста),
    &lt;br /&gt;
   &lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; $template &amp;ndash;&lt;/em&gt; объект шаблона.
    &lt;br /&gt;

    &lt;br /&gt;
   Рассмотрим подключение движков на конкретных примерах.&lt;/span&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;&lt;BREAK /&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;&lt;strong&gt;Пример подключения движка Smarty:
    &lt;br /&gt;

    &lt;br /&gt;
   &lt;/strong&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;В массиве &lt;i&gt;$arCustomTemplateEngines&lt;/i&gt; регистрируется движок Smarty&lt;span&gt;:&lt;/span&gt;&lt;i&gt;
    &lt;p&gt;&lt;i&gt;global&lt;/i&gt;&lt;i&gt; $&lt;/i&gt;&lt;i&gt;arCustomTemplateEngines&lt;/i&gt;&lt;i&gt;;
        &lt;br /&gt;
       $&lt;/i&gt;&lt;i&gt;arCustomTemplateEngines&lt;/i&gt;&lt;i&gt; = &lt;/i&gt;&lt;i&gt;array&lt;/i&gt;&lt;i&gt;(
        &lt;br /&gt;
       &lt;/i&gt;&lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/i&gt;&lt;i&gt;&amp;quot;&lt;/i&gt;&lt;i&gt;smarty&lt;/i&gt;&lt;i&gt;&amp;quot; =&amp;gt; &lt;/i&gt;&lt;i&gt;array&lt;/i&gt;&lt;i&gt;(
        &lt;br /&gt;
       &lt;/i&gt;&lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/i&gt;&lt;i&gt;&amp;quot;&lt;/i&gt;&lt;i&gt;templateExt&lt;/i&gt;&lt;i&gt;&amp;quot; =&amp;gt; &lt;/i&gt;&lt;i&gt;array&lt;/i&gt;&lt;i&gt;(&amp;quot;&lt;/i&gt;&lt;i&gt;tpl&lt;/i&gt;&lt;i&gt;&amp;quot;),
        &lt;br /&gt;
       &lt;/i&gt;&lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/i&gt;&lt;i&gt;&amp;quot;&lt;/i&gt;&lt;i&gt;function&lt;/i&gt;&lt;i&gt;&amp;quot; =&amp;gt; &amp;quot;&lt;/i&gt;&lt;i&gt;SmartyEngine&lt;/i&gt;&lt;i&gt;&amp;quot;
        &lt;br /&gt;
       &lt;/i&gt;&lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/i&gt;&lt;i&gt;),
        &lt;br /&gt;
       );
        &lt;br /&gt;

        &lt;br /&gt;
       &lt;/i&gt;&lt;/p&gt;
   &lt;/i&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;В функции &lt;i&gt;SmartyEngine&lt;/i&gt; инициализируются параметры движка в соответствии с требованиями Smarty (см. систему помощи Smarty). Далее в Smarty передаются переменные результатов работы компонента, входных параметров, языковых сообщений и т.д., а в конце вызывается метод обработки и показа шаблона Smarty:
  &lt;br /&gt;
 &lt;i&gt;
    &lt;br /&gt;
   &lt;/i&gt;&lt;i&gt;function SmartyEngine($templateFile, $arResult, $arParams, $arLangMessages, $templateFolder, $parentTemplateFolder, $template)
    &lt;br /&gt;
   {
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;if (!defined(&amp;quot;SMARTY_DIR&amp;quot;))
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;define(&amp;quot;SMARTY_DIR&amp;quot;, &amp;quot;&amp;lt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;/libs/&amp;quot;);
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;require_once( &#039;&amp;lt;&lt;/span&gt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;/libs/Smarty.class.php&#039; );
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty = new Smarty;
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;compile_dir = &amp;quot;&amp;lt;&lt;/span&gt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;/templates_c/&amp;quot;;
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;config_dir = &amp;quot;&amp;lt;&lt;/span&gt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;/configs/&amp;quot;;
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;template_dir = &amp;quot;&amp;lt;&lt;/span&gt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;/templates/&amp;quot;;
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;cache_dir = &amp;quot;&amp;lt;&lt;/span&gt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;/cache/&amp;quot;;
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;compile_check = true;
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;debugging = false;
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;assign(&amp;quot;arResult&amp;quot;, $arResult);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;assign(&amp;quot;arParams&amp;quot;, $arParams);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;assign(&amp;quot;MESS&amp;quot;, $arLangMessages);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;assign(&amp;quot;templateFolder&amp;quot;, $templateFolder);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;assign(&amp;quot;parentTemplateFolder&amp;quot;, $parentTemplateFolder);
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$smarty-&amp;gt;display( $_SERVER[&amp;quot;DOCUMENT_ROOT&amp;quot;].$templateFile );
      &lt;br /&gt;
     }
      &lt;br /&gt;
     &lt;/span&gt;&lt;/i&gt;
  &lt;br /&gt;
 В строке &lt;i&gt;&lt;span&gt;&amp;quot;&amp;lt;&lt;/span&gt;&lt;/i&gt;&lt;i&gt;абсолютный&lt;/i&gt;&lt;i&gt;путь&lt;/i&gt;&lt;i&gt;к&lt;/i&gt;&lt;i&gt;движку&lt;/i&gt;&lt;i&gt; &lt;span&gt;Smarty&amp;gt;&amp;quot;&lt;/span&gt;&lt;/i&gt; указывается абсолютный путь к движку &lt;span&gt;Smarty.
    &lt;br /&gt;
   &lt;/span&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;&lt;BREAK /&gt;
  &lt;br /&gt;
 &lt;span&gt;&lt;/span&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;strong&gt;Пример подключения движка XML/XSLT:
    &lt;br /&gt;
   &lt;/strong&gt;&lt;i&gt;
    &lt;br /&gt;
   &lt;/i&gt;&lt;span&gt;Сначала регистрируем движок:&lt;/span&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;&lt;i&gt;global $arCustomTemplateEngines;
    &lt;br /&gt;
   $arCustomTemplateEngines = array(
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;xslt&amp;quot; =&amp;gt; array(
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;templateExt&amp;quot; =&amp;gt; array(&amp;quot;xsl&amp;quot;),
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;function&amp;quot; =&amp;gt; &amp;quot;XSLTEngine&amp;quot;
    &lt;br /&gt;
   &amp;nbsp;&amp;nbsp;&amp;nbsp;),
    &lt;br /&gt;
   );
    &lt;br /&gt;

    &lt;br /&gt;
   &lt;/i&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;Функция инициализации параметров движка:&lt;i&gt;
    &lt;p&gt;function CreateXMLFromArray($xDoc, $xNode, $ar)
      &lt;br /&gt;
     {
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;foreach($ar as $key=&amp;gt;$val)
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;{
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;if(!is_string($key) || strlen($key)&amp;lt;=0)
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;$key = &amp;quot;value&amp;quot;;
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;$xElement = $xDoc-&amp;gt;createElement($key);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;if(is_array($val))
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;{
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;CreateXMLFromArray($xDoc, $xElement, $val);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;}
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;else
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;{
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;$xElement-&amp;gt;appendChild($xDoc-&amp;gt;createTextNode(iconv( SITE_CHARSET, &amp;quot;utf-8&amp;quot;, $val)));
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;}
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;$xNode-&amp;gt;appendChild($xElement);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;}
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;return $xNode;
      &lt;br /&gt;
     }
      &lt;br /&gt;

      &lt;br /&gt;
     &lt;/p&gt;
   &lt;/i&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p align=&quot;left&quot;&gt;Функция подключения движка:&lt;i&gt;
    &lt;p&gt;function XSLTEngine($templateFile, $arResult, $arParams, $arLangMessages, $templateFolder, $parentTemplateFolder, $template)
      &lt;br /&gt;
     {
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$arResult[&amp;quot;PARAMS&amp;quot;] = array(
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;templateFolder&amp;quot; =&amp;gt; $templateFolder,
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;parentTemplateFolder&amp;quot; =&amp;gt; $parentTemplateFolder,
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;arParams&amp;quot; =&amp;gt; $arParams,
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;arLangMessages&amp;quot; =&amp;gt; $arLangMessages
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;);
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xDoc = new DOMDocument(&amp;quot;1.0&amp;quot;, SITE_CHARSET);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xRoot = $xDoc-&amp;gt;createElement(&#039;result&#039;);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;CreateXMLFromArray($xDoc, $xRoot, $arResult);
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xDoc-&amp;gt;appendChild($xRoot);
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xXsl = new DOMDocument();
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xXsl-&amp;gt;load( $_SERVER[&amp;quot;DOCUMENT_ROOT&amp;quot;].$templateFile );
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xProc = new XSLTProcessor;
      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;$xProc-&amp;gt;importStyleSheet($xXsl);
      &lt;br /&gt;

      &lt;br /&gt;
     &amp;nbsp;&amp;nbsp;&amp;nbsp;echo $xProc-&amp;gt;transformToXML($xDoc);
      &lt;br /&gt;
     }
      &lt;br /&gt;

      &lt;br /&gt;
     &lt;/p&gt;
   &lt;/i&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;
 ',
                                'DETAIL_TEXT_TYPE' => 'html',
                                'DATE_CREATE' => '12.01.2015 23:09:56',
                                'TIMESTAMP_X' => '12.01.2015 23:09:57',
                                'TAGS' => 'движки',
                                'PROPERTIES' => Array (
                                    'KEYWORDS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'движки',
                                    ),
                                    'FORUM_TOPIC_ID' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '59',
                                    ),
                                    'THEMES' => Array (
                                        'PROPERTY_TYPE' => 'G',
                                        'VALUE' => Array (
                                            '0' => '3',
                                        ),
                                    ),
                                ),
                            ),
                            '2' => Array (
                                'CODE' => '',
                                'EXTERNAL_ID' => '1346',
                                'NAME' => 'Инструменты для отладки производительности',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '03.10.2009',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => 'Инструменты для оценки и отладки производительности компонент и всего сайта в целом',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '
&lt;p&gt;Для оценки и отладки производительности компонент и всего сайта в целом используются следующие инструменты. Это общеизвестные параметры для страницы:&lt;/p&gt;

&lt;p&gt;&lt;b&gt;show_page_exec_time=Y&lt;/b&gt; - выводит общее время исполнения страницы;&lt;/p&gt;

&lt;p&gt;&lt;b&gt;show_include_exec_time=Y&lt;/b&gt; - выводит время исполнения каждой из компонент, время формирования меню. &lt;/p&gt;

&lt;p&gt;В корреляции с этими параметрами работает параметр &lt;b&gt;show_sql_stat=Y&lt;/b&gt;, который выводит число SQL запросов, общее время исполнения SQL запросов и позволяет проанализировать сами запросы, как на всю страницу, так и на отдельно взятый компонент или меню. &lt;/p&gt;

&lt;p&gt;Пример:&lt;/p&gt;

&lt;p&gt;&amp;nbsp;&lt;img src=&quot;/content/articles/images/sql_news.png&quot; height=&quot;307&quot; width=&quot;350&quot;/&gt;
  &lt;br clear=&quot;all&quot; /&gt;
&lt;/p&gt;

&lt;p&gt;На этом рисунке представлена статистика SQL запросов для компоненты новостей на главной странице. Выводится она 2 запросами. Общее время работы компоненты составляет 0.0463 сек. Время SQL запросов 0.0274 сек. или 59.18% от времени работы компоненты (% помогает выявлять ресурсоемкий PHP код или тяжелые запросы). Возле каждого запроса указывается, сколько раз аналогичные запросы повторялись с вариацией параметров, сколько времени выполнялся запрос. В статистике перечисляется, откуда вызван запрос и с какими параметрами. &lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;BREAK /&gt;&lt;/p&gt;

&lt;p&gt;Рассмотрим другой пример: запросы на странице блогов. &lt;/p&gt;

&lt;p&gt;&amp;nbsp;&lt;img src=&quot;/content/articles/images/sql_menu.png&quot; height=&quot;346&quot; width=&quot;350&quot;/&gt;
  &lt;br clear=&quot;all&quot; /&gt;
&lt;/p&gt;

&lt;p&gt;Количество запросов равно четырем. Но они потребляют меньше 4% от времени компоненты, которое составляет 0.0228 сек. Важно, что количество запросов не играет решающей роли, важнее время выполнения запросов. &lt;/p&gt;

&lt;p&gt;На практике использование этого инструментария позволяет:
  &lt;br /&gt;
* быстро выявлять больные участки сайта;
  &lt;br /&gt;
* находить ошибки программирования, в которых компонент генерирует очень много запросов (или мало, но медленных запросов);
  &lt;br /&gt;
* выявлять особенности и недостатки конфигурации SQL сервера или отдельных таблиц.
  &lt;br /&gt;
&lt;/p&gt;
',
                                'DETAIL_TEXT_TYPE' => 'html',
                                'DATE_CREATE' => '12.01.2015 23:09:57',
                                'TIMESTAMP_X' => '12.01.2015 23:09:57',
                                'TAGS' => 'производительность',
                                'PROPERTIES' => Array (
                                    'KEYWORDS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'производительность',
                                    ),
                                    'FORUM_TOPIC_ID' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '75',
                                    ),
                                    'FORUM_MESSAGE_CNT' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '1',
                                    ),
                                    'THEMES' => Array (
                                        'PROPERTY_TYPE' => 'G',
                                        'VALUE' => Array (
                                            '0' => '3',
                                        ),
                                    ),
                                ),
                            ),
                            '3' => Array (
                                'CODE' => '',
                                'EXTERNAL_ID' => '1359',
                                'NAME' => 'Компоненты 2.0: настройка поддержки ЧПУ',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '04.10.2009',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => 'Настройка поддержки ЧПУ производится для работающих проектов (вы должны установить обновление главного модуля до версии 5.1.8 и выше, поскольку в обновление ядра 5.1.8 включен механизм переопределения адресов для поддержки ЧПУ). Все, кто будет ставить новый дистрибутив, получат уже настроенную поддержку.',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '
&lt;p&gt;Настройка поддержки ЧПУ производится для работающих проектов (вы должны установить обновление главного модуля до версии 5.1.8 и выше, поскольку в обновление ядра 5.1.8 включен механизм переопределения адресов для поддержки ЧПУ). Все, кто будет ставить новый дистрибутив, получат уже настроенную поддержку.
  &lt;br /&gt;
&lt;/p&gt;

&lt;p&gt;&lt;b&gt;Понятие обработки адресов &lt;/b&gt;&lt;/p&gt;

&lt;p&gt;Обработка адресов (UrlRewrite) применяется для того, чтобы скрипт мог отвечать не только по своему физическому, но и по любому другому указанному адресу. Например, можно задать такие настройки обработки адресов, что скрипт, лежащий в файле &lt;i&gt;/fld/c.php&lt;/i&gt; и отвечающий по адресу:
  &lt;br /&gt;
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; /fld/c.php?id=15
  &lt;br /&gt;
будет отвечать также по адресу:
  &lt;br /&gt;
&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; /catalog/15.php
  &lt;br /&gt;
&lt;/p&gt;

&lt;p&gt;Адрес, по которому будет отвечать скрипт, не должен физически существовать на сервере. Если такой адрес физически существует, то будет вызван скрипт по этому адресу. Система обработки адресов запущена в этом случае не будет. &lt;/p&gt;

&lt;p&gt;Управление правилами преобразования адресов производится на странице: &lt;em&gt;/bitrix/admin/urlrewrite_list.php.
    &lt;br /&gt;
  &lt;/em&gt;Механизм переопределения адресов создан в основном для компонентов 2.0, поддерживающих режим ЧПУ. В то же время, данный обработчик можно использовать для переопределения любых URL, а не только связанных с компонентами. &lt;/p&gt;

&lt;p&gt;При добавлении на страницу компонента с поддержкой ЧПУ (если файл сохраняется с помощью API), автоматически создается правило переопределения адреса. Если страница создается не с помощью API, а, например, записывается через FTP, то необходимо выполнить пересоздание правил (кнопка на панели инструментов на странице управления правилами).
  &lt;br /&gt;
&lt;/p&gt;

&lt;p&gt;&lt;b&gt;Подключение механизма обработки адресов:&lt;/b&gt; &lt;/p&gt;

&lt;p&gt;&lt;b&gt;1&lt;/b&gt;. Если у вас на веб-сервере настроена обработка ошибки 404, например, для Apache установлена опция ErrorDocument или аналогичная инструкция прописана в файле .htaccess:
  &lt;br /&gt;
&lt;span&gt;&lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; ErrorDocument 404 /404.php,
      &lt;br /&gt;
    &lt;/em&gt;то вы должны изменить файл &lt;em&gt;/404.php,&lt;/em&gt; вставив в самое начало файла команду:
    &lt;br /&gt;
  &lt;em&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; include_once( $_SERVER[&#039;DOCUMENT_ROOT&#039;]. &#039;/bitrix/modules/main/include/urlrewrite.php&#039; );
      &lt;br /&gt;
    &lt;/em&gt;
    &lt;p&gt;&lt;em&gt;&lt;b&gt;2&lt;/b&gt;.&lt;/em&gt; Если вы для Apache используете модуль mod_rewrite, то в его настройках вы можете указать (например, в файле .htaccess):
      &lt;br /&gt;
    &lt;em&gt;&amp;lt;IfModule mod_rewrite.c&amp;gt;
        &lt;br /&gt;
      RewriteEngine On
        &lt;br /&gt;
      RewriteCond %{REQUEST_FILENAME} !-f
        &lt;br /&gt;
      RewriteCond %{REQUEST_FILENAME} !-l
        &lt;br /&gt;
      RewriteCond %{REQUEST_FILENAME} !-d
        &lt;br /&gt;
      RewriteCond %{REQUEST_FILENAME} !/bitrix/urlrewrite.php$
        &lt;br /&gt;
      RewriteRule ^(.*)$ /bitrix/urlrewrite.php [L]
        &lt;br /&gt;
      &amp;lt;/IfModule&amp;gt;
        &lt;br /&gt;
      &lt;/em&gt;&lt;/p&gt;

    &lt;p&gt;После этих настроек будет работать штатный механизм поддержки ЧПУ для новых компонент.&lt;/p&gt;
  &lt;BREAK /&gt;
    &lt;p&gt;&lt;b&gt;Простой тест для проверки проведенной настройки:&lt;/b&gt;
      &lt;br /&gt;

      &lt;br /&gt;
    &lt;b&gt;1&lt;/b&gt;. Зайти на страницу &lt;em&gt;&amp;quot;Настройки&amp;quot; - &amp;quot;Настройки продукта&amp;quot; - &amp;quot;Обработка адресов&amp;quot;
        &lt;br /&gt;
      &lt;/em&gt;
      &lt;br /&gt;
    &lt;b&gt;2&lt;/b&gt;. Выбирать пункт &amp;quot;Новая запись&amp;quot; и добавить:
      &lt;br /&gt;
    &lt;em&gt;&amp;nbsp;&amp;nbsp; Условие&lt;/em&gt;: #^/sef_test/#
      &lt;br /&gt;
    &lt;em&gt;&amp;nbsp;&amp;nbsp; Компонент&lt;/em&gt;: ничего не указываем
      &lt;br /&gt;
    &lt;em&gt;&amp;nbsp;&amp;nbsp; Файл&lt;/em&gt;: /index.php (нужно указать файл, который фактически будет работать)
      &lt;br /&gt;
    &lt;em&gt;&amp;nbsp;&amp;nbsp; Правило&lt;/em&gt;: ничего не указываем.
      &lt;br /&gt;
    Сохранить изменения.
      &lt;br /&gt;

      &lt;br /&gt;
    &lt;b&gt;3&lt;/b&gt;. Перейти по адресу в разделе /sef_test/
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp; Например, http://localhost/sef_test/test.html
      &lt;br /&gt;

      &lt;br /&gt;
    Если ЧПУ работает, то вы должны увидеть содержимое страницы, указанной в поле &lt;em&gt;Файл&lt;/em&gt; в правиле переопределения. &lt;/p&gt;

    &lt;p&gt;&lt;b&gt;Примеры: &lt;/b&gt;&lt;/p&gt;

    &lt;p&gt;1. Если в системе обработки адресов зарегистрировано правило:
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp; &lt;em&gt;Условие&lt;/em&gt; = #^/gallery/#&amp;nbsp;
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;em&gt;Файл&lt;/em&gt; = /max/images/index.php
      &lt;br /&gt;
    и пользователем запрошена страница /gallery/38.php, которая физически не существует, то система обработки адресов подключит скрипт /max/images/index.php. &lt;/p&gt;

    &lt;p&gt;2. Если в системе обработки адресов зарегистрировано правило:
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;em&gt;Условие&lt;/em&gt; = #^/index/([0-9]+)/([0-9]+)/#
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;em&gt;Правило&lt;/em&gt; = mode=read&amp;amp;CID=$1&amp;amp;GID=$2
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;em&gt;Файл&lt;/em&gt; = /newforum/index.php
      &lt;br /&gt;
    и пользователем запрошена страница /index/5/48/, то будет подключен скрипт /newforum/index.php?mode=read&amp;amp;CID=5&amp;amp;GID=48.
      &lt;br /&gt;
    &lt;/p&gt;

    &lt;p&gt;3. Если в системе обработки адресов зарегистрировано правило:
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;em&gt;Условие&lt;/em&gt; = #(.+?)\\.html(.*)#
      &lt;br /&gt;
    &amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;em&gt;Правило&lt;/em&gt; = $1.php$2
      &lt;br /&gt;
    и пользователем запрошена страница /about/company.html?show, то будет подключен скрипт /about/company.php?show.&lt;/p&gt;
  &lt;/span&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;

&lt;p&gt;&lt;/p&gt;
',
                                'DETAIL_TEXT_TYPE' => 'html',
                                'DATE_CREATE' => '12.01.2015 23:09:57',
                                'TIMESTAMP_X' => '12.01.2015 23:09:57',
                                'TAGS' => 'ЧПУ',
                                'PROPERTIES' => Array (
                                    'KEYWORDS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ЧПУ',
                                    ),
                                    'FORUM_TOPIC_ID' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '74',
                                    ),
                                    'FORUM_MESSAGE_CNT' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '1',
                                    ),
                                    'vote_count' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '2',
                                    ),
                                    'vote_sum' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '10',
                                    ),
                                    'rating' => Array (
                                        'PROPERTY_TYPE' => 'N',
                                        'VALUE' => '3.44',
                                    ),
                                    'THEMES' => Array (
                                        'PROPERTY_TYPE' => 'G',
                                        'VALUE' => Array (
                                            '0' => '4',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    '1' => '',
                ),
            ),
        ),
    ),
    '1' => Array (
        'IBLOCK_TYPE_ID' => 'articles2',
        'LID' => 'ru',
        'NAME' => 'Статьи',
        'SECTION_NAME' => 'Разделы',
        'ELEMENT_NAME' => 'Статья',
        'ID' => 'articles2',
        'SECTIONS' => 'Y',
        'EDIT_FILE_BEFORE' => '',
        'EDIT_FILE_AFTER' => '',
        'IN_RSS' => 'N',
        'SORT' => '20',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Статьи',
                'SECTION_NAME' => 'Разделы',
                'ELEMENT_NAME' => 'Статья',
            ),
        ),
        'IBLOCKS' => Array (
        ),
    ),
    '2' => Array (
        'IBLOCK_TYPE_ID' => 'books',
        'LID' => 'ru',
        'NAME' => 'Каталог книг',
        'SECTION_NAME' => 'Разделы',
        'ELEMENT_NAME' => 'Элемент',
        'ID' => 'books',
        'SECTIONS' => 'Y',
        'EDIT_FILE_BEFORE' => '',
        'EDIT_FILE_AFTER' => '',
        'IN_RSS' => 'N',
        'SORT' => '60',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Каталог книг',
                'SECTION_NAME' => 'Разделы',
                'ELEMENT_NAME' => 'Элемент',
            ),
        ),
        'IBLOCKS' => Array (
        ),
    ),
    '3' => Array (
        'IBLOCK_TYPE_ID' => 'news',
        'LID' => 'ru',
        'NAME' => 'Новости',
        'SECTION_NAME' => 'Группы',
        'ELEMENT_NAME' => 'Новость',
        'ID' => 'news',
        'SECTIONS' => 'Y',
        'EDIT_FILE_BEFORE' => '',
        'EDIT_FILE_AFTER' => '',
        'IN_RSS' => 'N',
        'SORT' => '10',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Новости',
                'SECTION_NAME' => 'Группы',
                'ELEMENT_NAME' => 'Новость',
            ),
        ),
        'IBLOCKS' => Array (
        ),
    ),
    '4' => Array (
        'IBLOCK_TYPE_ID' => 'services',
        'LID' => 'ru',
        'NAME' => 'Сервисы',
        'SECTION_NAME' => 'Разделы',
        'ELEMENT_NAME' => 'Элемент',
        'ID' => 'services',
        'SECTIONS' => 'Y',
        'EDIT_FILE_BEFORE' => '',
        'EDIT_FILE_AFTER' => '',
        'IN_RSS' => 'N',
        'SORT' => '50',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Сервисы',
                'SECTION_NAME' => 'Разделы',
                'ELEMENT_NAME' => 'Элемент',
            ),
        ),
        'IBLOCKS' => Array (
        ),
    ),
    '5' => Array (
        'IBLOCK_TYPE_ID' => 'xmlcatalog',
        'LID' => 'ru',
        'NAME' => 'Каталог товаров 1С',
        'SECTION_NAME' => 'Разделы',
        'ELEMENT_NAME' => 'Товары',
        'ID' => 'xmlcatalog',
        'SECTIONS' => 'Y',
        'EDIT_FILE_BEFORE' => '',
        'EDIT_FILE_AFTER' => '',
        'IN_RSS' => 'N',
        'SORT' => '80',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Каталог товаров 1С',
                'SECTION_NAME' => 'Разделы',
                'ELEMENT_NAME' => 'Товары',
            ),
        ),
        'IBLOCKS' => Array (
        ),
    ),
);
$bm = new BitrixMigration(__FILE__);
$bm->sStoreFilesDir = '/bm_files/';
$bm->uploadArray($arResult);
?>