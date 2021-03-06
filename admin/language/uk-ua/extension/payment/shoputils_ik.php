<?php
$_['heading_title']           = 'Інтеркаса';

// Tab 
$_['tab_emails']              = 'E-mail повідомлення';
$_['tab_settings']            = 'Налаштування платежів';
$_['tab_log']                 = 'Журнал';
$_['tab_information']         = 'Інформація';

// Text 
$_['text_extension']          = 'Платежі';
$_['text_success']            = 'Налаштування "%s" змінені';
$_['text_clear_log_success']  = 'Журнал запитів модуля очищений';
$_['text_confirm']            = 'Очистку журналу неможливо відмінити! Ви впевнені, що бажаєте це зробити?';
$_['text_shoputils_ik']       = '<a style="cursor: pointer;" onclick="window.open(’https://new.interkassa.com’);"><img src="view/image/payment/shoputils_ik.gif" alt="new.interkassa.com" title="Interkassa"/></a>';
$_['text_order_status_cart']  = 'Кошик (Помилкове замовлення)';
$_['text_log_off']            = 'Виключений';
$_['text_log_short']          = 'Частковий (Тільки результати операцій)';
$_['text_log_full']           = 'Повний (Всі запити)';

$_['text_currency_auto']      = 'Визначати автоматично';
$_['text_currency_rub']       = 'Російські рублі (RUB-643)';
$_['text_currency_uah']       = 'Українські гривні (UAH-980)';
$_['text_currency_usd']       = 'Долари США (USD-840)';
$_['text_currency_eur']       = 'Євро (EUR-978)';
$_['text_lifetime_5minuts']   = '5 хвилин';
$_['text_lifetime_30minuts']  = '30 хвилин';
$_['text_lifetime_1hour']     = '1 година';
$_['text_lifetime_1day']      = '1 день';
$_['text_lifetime_1weekly']   = '1 тиждень';
$_['text_lifetime_30days']    = '30 днів';
$_['text_copyright']          = 'Модуль оплати "%s" розроблений на замовлення платіжної системи "<a href="https://www.interkassa.com/" target="_blank">Interkassa"</a> за підтримки <a href="https://opencartforum.com/profile/3463-shoputils/" target="_blank">ShopUtils</a>. Якщо ви потребуєте більше можливостей, спробуйте більш <a href="https://opencartforum.com/files/file/2073-interkassa-opencartocstore-15x-2x/" target="_blank">функціональний модуль</a>.';
$_['text_copyright']          = '&copy; Розробка <a href="https://opencartforum.com/profile/3463-shoputils/" target="_blank">ShopUtils</a> на замовлення платіжної системи "<a href="https://www.interkassa.com/" target="_blank">Interkassa"</a>. Розширений функціонал - в <a href="https://opencartforum.com/files/file/2073-interkassa-opencartocstore-15x-2x/" target="_blank">комерційній версії модуля</a>.';
$_['text_info']               = 'Після <a href="https://www.interkassa.com/registration" target="_blank">реєстрації</a> облікового запису інтернет-магазину в «INTERKASSA»
 необхідно налаштувати магазин для прийняття платежів. Це можна зробити в <a href="https://www.interkassa.com/login" target="_blank">особистому кабінеті</a>, розділ <a href="https://www.interkassa.com/account/checkout" target="_blank">Мої Каси</a>, натиснувши кнопку "Налаштування" 
навпроти свого магазину. Дані, що необхідно ввести в налаштуванні магазину:';
$_['text_info_content']       = 'В розділі "Мої каси -> Налаштування каси -> Налаштування платежів" необхідно встановити наступні значення:<br />
<b>"Перевіряти унікальність платежів" - вкл.<br />
<b>"Передавати опис на платіжну систему" - вкл.</b><br />
"Строк життя платежа (в хвилинах)" - вкл. "дозволити перевизначення в запиті "</b><br /><br />
В розділі "Мої каси -> Налаштування каси -> Інтерфейс" необхідно всюди встановити наступні значення:<br />
<b>"Тип запиту" - "POST"<br />
всюди виключити "Дозволити перевизначення в запиті "</b><br /><br />
В розділі "Мої каси -> Налаштування каси -> Безпека" необхідно встановити наступні значення:<br />
<b>"Алгоритм підпису" - "MD5"<br />
"Перевіряти підпис у формі запиту платежа" - вкл.</b>';

// Text FT
$_['text_order_id_ft']              = '№ замовлення';
$_['text_store_name_ft']            = 'Назва магазину';
$_['text_logo_ft']                  = 'Логотип магазину';
$_['text_products_ft']              = 'Список куплених товарів';
$_['text_total_ft']                 = 'Разом';
$_['text_customer_firstname_ft']    = 'Ім’я По батькові покупця';
$_['text_customer_lastname_ft']     = 'Прізвище покупця';
$_['text_customer_group_ft']        = 'Група покупців';
$_['text_customer_email_ft']        = 'e-mail покупця';
$_['text_customer_telephone_ft']    = 'Телефон покупця';
$_['text_order_status_ft']          = 'Статус замовлення';
$_['text_comment_ft']               = 'Коментар покупця до замовлення';
$_['text_ip_ft']                    = 'IP адреса покупця';
$_['text_date_added_ft']            = 'Дата та час додання замовлення';
$_['text_date_modified_ft']         = 'Дата та час зміни замовлення';

// Entry
$_['entry_status']                  = 'Статус';
$_['entry_order_status']            = 'Статус замовлення після оплати';
$_['entry_geo_zone']                = 'Географічна зона';
$_['entry_sort_order']              = 'Порядок сортування';
$_['entry_minimal_order']           = 'Мінімальна вартість замовлення';
$_['entry_maximal_order']           = 'Максимальна вартість замовлення';
$_['entry_order_confirm_status']    = 'Статус замовлення після підтвердження';
$_['entry_order_fail_status']       = 'Статус замовлення після невдалої оплати';
$_['entry_title']                   = 'Назва';
$_['entry_instruction']             = 'Інструкція по оплаті';

$_['entry_shop_id']            = 'Ідентифікатор каси';
$_['entry_sign_hash']          = 'Секретний ключ';
$_['entry_sign_test_key']      = 'Тестовий ключ';
$_['entry_test_mode']          = 'Тестовий режим';
$_['entry_currency']           = 'Валюта магазина';
$_['entry_lifetime']           = 'Час життя платежа';

$_['entry_log']                = 'Журнал';
$_['entry_log_file']           = 'Файл журналу';

$_['entry_success_url']        = 'URL успішної оплати';
$_['entry_fail_url']           = 'URL невдалої оплати';
$_['entry_pending_url']        = 'URL очікування проведення платежа';
$_['entry_status_url']         = 'URL взаємодії';

// Placeholder
$_['placeholder_instruction']  = 'Шановний покупець! Просимо вас дочекатись дзвінка від нашого менеджера перед оплатою. Це необхідно для підтвердження наявності товару на складі та можливості доставки у ваш регіон. Після уточнення цих даних менеджер надішле вам листа з посиланням на оплату замовлення.';

// Help
$_['help_order_confirm_status'] = 'При натисканні на кнопку "Підтвердити" на останньому етапі оформлення замовлення, замовленню буде присвоєний обраний статус';
$_['help_order_status']         = 'Після успішної оплати замовлення, замовленню буде присвоєний обраний статус.';
$_['help_minimal_order']        = 'Якщо сума замовлення менше зазначеної суми, значення присвоєне і не дорівнює нулю, то цей метод плати не буде доступний, при оформленні замовлення.<br />Наприклад: 190.90';
$_['help_maximal_order']        = 'Якщо сума замовлення більше зазначеної суми, значення присвоєне і не дорівнює нулю, то цей метод плати не буде доступний, при оформленні замовлення.<br />Наприклад: 5000.01';
$_['help_order_fail_status']    = 'Якщо Інтеркаса поверне покупця після невдалого платежу, замовленню буде присвоєний обраний статус.';
$_['help_laterpay_mode']        = 'Після включення режиму відстроченої (відкладеної) оплати покупець зможе оплатити замовлення тільки після перевірки замовлення менеджером магазину. <br /> Якщо вам необхідно, щоб у покупця була можливість здійснити оплату відразу після оформлення замовлення без підтвердження менеджером - не вмикайте цю опцію.';
$_['help_order_later_status']   = 'Після перевірки замовлення менеджер магазину виставить даний статус, покупець буде повідомлений по e-mail і зможе оплатити замовлення. Також, посилання на оплату з’явиться в особистому кабінеті покупця в розділі "Мої замовлення".<br />БУДЬТЕ УВАЖНІ!<br />Якщо даний статус буде збігатися з "статус замовлення після підтвердження" - режим відстроченої оплати буде відключений і покупці будуть перенаправлятися на сайт платіжної системи для оплати відразу після натискання на кнопку "Оформити замовлення".';
$_['help_title']                = 'Назва метода оплати на сторінці оформлення замовлення';
$_['help_instruction']          = 'Інструкція по оплаті виводиться при підтвердженні замовлення. Якщо поле не заповнено - інструкція по оплаті виводитись не буде.';

$_['help_shop_id']       = 'Ідентифікатор каси зареєстрованого в системі «INTERKASSA». Дізнатися його можна в розділі «Мої каси». приклад: 529a6e08bf4efcae2d1b8488';
$_['help_sign_hash']     = 'Використовується SCI (Інтеркаса) при формуванні цифрового підпису. Повинен збігатись з секретним ключем в розділі "Мої каси -> Налаштування каси -> Безпека -> Секретний ключ".';
$_['help_sign_test_key'] = 'Використовується SCI (Інтеркаса) при формуванні цифрового підпису, якщо платіж був здійснений через тестову платіжну систему. Повинен збігатись з тестовим ключем в розділі "Мої каси -> Налаштування каси -> Безпека -> Тестовий ключ".';
$_['help_test_mode']     = 'В тестовому режимі можна перевірити настройки модуля і Інтеркаси через тестову валюту Інтеркаси, вибравши при оплаті "Тестова платіжна система". В цьому випадку для підписування ЕЦП (електронного цифрового підпису) використовується тестовий ключ. Для прийому реальних платежів - тестовий режим необхідно вимкнути.';
$_['help_currency']      = 'Валюта, в якій магазин передає суму платежу на платіжний шлюз "Інтеркаса". Інтеркаса приймає такі валюти: RUB, UAH, EUR, USD.';
$_['help_lifetime']      = 'Платіж неможливо буде здійснити в разі закінчення терміну життя платежу після його створення.';
$_['help_log_file']      = 'Останні %d строк з файлу журнала.';
$_['help_log']           = 'Журнал запитів від Інтеркаси зберігається у файлі: /system/storage/logs/%s';

// Error
$_['error_permission']   = 'У вас немає прав для управління модулем "%s"';
$_['error_clear_log']    = 'У вас немає прав для очищення журналу модуля';
$_['error_form']         = 'Необхідно заповнити поле "%s" (вкладка "%s")!';
?>