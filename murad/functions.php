<?php
if(!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Настройки полей' ) )
        ->add_tab('Шапка', array(
            Field::make( 'image', 'header_logo', 'Логотип шапки' ),
        ) )
        ->add_tab('Нанимай умнее', array(
            Field::make( 'text', 'text_block1-title', 'заголовок' ),
            Field::make( 'text', 'text_block1-text1', 'Текст 1' ),
            Field::make( 'text', 'text_block1-text2', 'Текст 2' ),
        ) )
        ->add_tab('Проверь до', array(
            Field::make( 'text', 'text_block2-title', 'заголовок' ),
            Field::make( 'text', 'text_block2-block1-title', 'Текстовый блок 1 Заголовок' ),
            Field::make( 'text', 'text_block2-block1-text', 'Текстовый блок 1 Текст' ),
            Field::make( 'text', 'text_block2-block2-title', 'Текстовый блок 2 Заголовок' ),
            Field::make( 'text', 'text_block2-block2-text', 'Текстовый блок 2 Текст' ),
            Field::make( 'text', 'text_block2-block3-title', 'Текстовый блок 3 Заголовок' ),
            Field::make( 'text', 'text_block2-block3-text', 'Текстовый блок 3 Текст' ),
            Field::make( 'text', 'text_block2-block4-title', 'Текстовый блок 4 Заголовок' ),
            Field::make( 'text', 'text_block2-block4-text', 'Текстовый блок 4 Текст' ),

        ) )
        ->add_tab('Возможности', array(
            Field::make( 'text', 'text_block3-title', 'заголовок' ),
            Field::make( 'text', 'text_block3-block1-title', 'Текстовый блок 1 Заголовок' ),
            Field::make( 'text', 'text_block3-block1-text', 'Текстовый блок 1 Текст' ),
            Field::make( 'text', 'text_block3-block2-title', 'Текстовый блок 2 Заголовок' ),
            Field::make( 'text', 'text_block3-block2-text', 'Текстовый блок 2 Текст' ),
            Field::make( 'text', 'text_block3-block3-title', 'Текстовый блок 3 Заголовок' ),
            Field::make( 'text', 'text_block3-block3-text', 'Текстовый блок 3 Текст' ),
            Field::make( 'text', 'text_block3-block4-title', 'Текстовый блок 4 Заголовок' ),
            Field::make( 'text', 'text_block3-block4-text', 'Текстовый блок 4 Текст' ),
            Field::make( 'text', 'text_block3-block5-title', 'Текстовый блок 5 Заголовок' ),
            Field::make( 'text', 'text_block3-block5-text', 'Текстовый блок 5 Текст' ),

        ) )
        ->add_tab('Количество вакантных мест', array(
            Field::make( 'text', 'text_block4-text1', 'Вакансии на граф дизайн' ),
            Field::make( 'text', 'text_block4-text2', 'Вакансии на ui дизайн' ),
            Field::make( 'text', 'text_block4-text3', 'Вакансии на ux дизайн' ),
            Field::make( 'text', 'text_block4-text4', 'Вакансии на контент райтинг' ),
            Field::make( 'text', 'text_block4-text5', 'Вакансии на маркетинг' ),
            Field::make( 'text', 'text_block4-text6', 'Вакансии на seo' ),
        ) );
}