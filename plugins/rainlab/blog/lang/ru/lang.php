<?php

return [
    'plugin' => [
        'name' => 'Блог',
        'description' => 'Надежная блоговая-платформа.'
    ],
    'blog' => [
        'menu_label' => 'Блог',
        'menu_description' => 'Управление Блогом',
        'posts' => 'Записи',
        'create_post' => 'записи',
        'categories' => 'Категории',
        'create_category' => 'категории',
        'tab' => 'Блог',
        'access_posts' => 'Управление записями блога',
        'access_categories' => 'Управление категориями блога',
        'access_other_posts' => 'Управление записями других пользователей',
        'access_import_export' => 'Разрешено импортировать и экспортировать записи',
        'access_publish' => 'Разрешено публиковать записи',
        'manage_settings' => 'Управление настройками блога',
        'delete_confirm' => 'Вы уверены, что хотите сделать это?',
        'chart_published' => 'Опубликовано',
        'chart_drafts' => 'Черновики',
        'chart_total' => 'Всего',
        'settings_description' => 'Управление настройками блога',
        'show_all_posts_label' => 'Показывать все записи для внутренних (бэкенд) пользователей',
        'show_all_posts_comment' => 'Показывать опубликованные и неопубликованные записи на фронтенде для внутренних (бэкенд) пользователей',
        'tab_general' => 'Основные'
    ],
    'posts' => [
        'list_title' => 'Управление записями блога',
        'filter_category' => 'Категория',
        'filter_published' => 'Скрыть опубликованные',
        'filter_date' => 'Дата',
        'new_post' => 'Новая запись',
        'export_post' => 'Export posts',
        'import_post' => 'Import posts'
    ],
    'post' => [
        'title' => 'Заголовок',
        'title_placeholder' => 'Новый заголовок записи',
        'content' => 'Контент',
        'content_html' => 'HTML Контент',
        'slug' => 'URL записи',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Категории',
        'author_email' => 'Email автора',
        'created' => 'Создано',
        'created_date' => 'Дата создания',
        'updated' => 'Обновлено',
        'updated_date' => 'Дата обновления',
        'published' => 'Опубликовано',
        'published_date' => 'Дата публикации',
        'published_validation' => 'Пожалуйста, укажите дату публикации.',
        'tab_edit' => 'Редактор',
        'tab_categories' => 'Категории',
        'categories_comment' => 'Выберите категории, к которым относится эта запись',
        'categories_placeholder' => 'Не найдено ни одной категории, создайте хотя бы одну!',
        'tab_manage' => 'Управление',
        'published_on' => 'Опубликовано',
        'excerpt' => 'Отрывок',
        'summary' => 'Резюме',
        'featured_images' => 'Тематические изображения',
        'delete_confirm' => 'Вы действительно хотите удалить эту запись?',
        'delete_success' => 'Эти записи успешно удалены.',
        'close_confirm' => 'Запись не была сохранена.',
        'return_to_posts' => 'Вернуться к списку записей'
    ],
    'categories' => [
        'list_title' => 'Управление категориями блога',
        'new_category' => 'Новая категория',
        'uncategorized' => 'Без категории'
    ],
    'category' => [
        'name' => 'Название',
        'name_placeholder' => 'Новое имя категории',
        'description' => 'Описание',
        'slug' => 'URL адрес',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Записи',
        'delete_confirm' => 'Вы действительно хотите удалить эту категорию?',
        'delete_success' => 'Эти категории успешно удалены.',
        'return_to_categories' => 'Вернуться к списку категорий',
        'reorder' => 'Порядок категорий'
    ],
    'menuitem' => [
        'blog_category' => 'Категория блога',
        'all_blog_categories' => 'Все категории блога',
        'blog_post' => 'Запись блога',
        'all_blog_posts' => 'Все записи блога',
        'category_blog_posts' => 'Записи категории блога'
    ],
    'settings' => [
        'category_title' => 'Список категорий блога',
        'category_description' => 'Отображает список категорий на странице.',
        'category_slug' => 'Параметр URL',
        'category_slug_description' => 'Параметр маршрута, используемый для поиска в текущей категории по URL. Это свойство используется по умолчанию компонентом Фрагменты для маркировки активной категории.',
        'category_display_empty' => 'Пустые категории',
        'category_display_empty_description' => 'Отображать категории, которые не имеют записей.',
        'category_page' => 'Страница категорий',
        'category_page_description' => 'Название страницы категорий. Это свойство используется по умолчанию компонентом Фрагменты.',
        'post_title' => 'Запись блога',
        'post_description' => 'Отображение записи блога',
        'post_slug' => 'Параметр URL',
        'post_slug_description' => 'Параметр маршрута, необходимый для выбора конкретной записи.',
        'post_category' => 'Страница категорий',
        'post_category_description' => 'Название страницы категорий. Это свойство используется по умолчанию компонентом Фрагменты.',
        'posts_title' => 'Список записей блога',
        'posts_description' => 'Отображает список последних записей блога на странице.',
        'posts_pagination' => 'Параметр постраничной навигации',
        'posts_pagination_description' => 'Параметр, необходимый для постраничной навигации.',
        'posts_filter' => 'Фильтр категорий',
        'posts_filter_description' => 'Введите URL категории или параметр URL-адреса для фильтрации записей. Оставьте пустым, чтобы посмотреть все записи.',
        'posts_per_page' => 'Записей на странице',
        'posts_per_page_validation' => 'Недопустимый Формат. Ожидаемый тип данных - действительное число.',
        'posts_no_posts' => 'Отсутсвие записей',
        'posts_no_posts_description' => 'Сообщение, отображаемое в блоге, если отсутствуют записи. Это свойство используется по умолчанию компонентом Фрагменты.',
        'posts_no_posts_default' => 'Записей не найдено',
        'posts_order' => 'Сортировка',
        'posts_order_description' => 'Атрибут, по которому будут сортироваться записи.',
        'posts_category' => 'Страница категорий',
        'posts_category_description' => 'Название категории на странице записи "размещена в категории". Это свойство используется по умолчанию компонентом Фрагменты.',
        'posts_post' => 'Страница записи',
        'posts_post_description' => 'Название страницы для ссылки "подробнее". Это свойство используется по умолчанию компонентом Фрагменты.',
        'posts_except_post' => 'Кроме записи',
        'posts_except_post_description' => 'Введите ID/URL или переменную с ID/URL записи, которую вы хотите исключить',
        'posts_except_categories' => 'Кроме категорий',
        'posts_except_categories_description' => 'Введите разделенный запятыми список URL категорий или переменную со списком категорий, которые вы хотите исключить',
        'rssfeed_blog' => 'Страница блога',
        'rssfeed_blog_description' => 'Имя основного файла страницы блога для генерации ссылок. Это свойство используется по умолчанию компонентом Фрагменты.',
        'rssfeed_title' => 'RSS Feed',
        'rssfeed_description' => 'Создает RSS-канал, содержащий записи из блога.',
        'group_links' => 'Ссылки',
        'group_exceptions' => 'Исключения'
    ],
    'sorting' => [
        'title_asc' => 'Заголовок (по возрастанию)',
        'title_desc' => 'Заголовок (по убыванию)',
        'created_asc' => 'Создано (по возрастанию)',
        'created_desc' => 'Создано (по убыванию)',
        'updated_asc' => 'Обновлено (по возрастанию)',
        'updated_desc' => 'Обновлено (по убыванию)',
        'published_asc' => 'Опубликовано (по возрастанию)',
        'published_desc' => 'Опубликовано (по убыванию)',
        'random' => 'Случайно'
    ],
    'import' => [
        'update_existing_label' => 'Обновить существующие записи',
        'update_existing_comment' => 'Установите этот флажок, чтобы обновлять записи имеющие одинаковый ID, title или URL.',
        'auto_create_categories_label' => 'Создать категории указанные в импортируемом файле',
        'auto_create_categories_comment' => 'Вы должны сопоставить столбец Категории, чтобы использовать эту функцию. В противном случае выберите для назначения категорию по умолчанию из пунктов ниже.',
        'categories_label' => 'Категории',
        'categories_comment' => 'Выберите категории, к которым будут принадлежать импортированные записи (необязательно).',
        'default_author_label' => 'Автор записи по умолчанию (необязательно)',
        'default_author_comment' => 'Импорт попытается использовать существующего автора, если он соответствуете столбцу Email автора, в противном случае используется указанный выше автор.',
        'default_author_placeholder' => '-- выберите автора --'
    ]
];