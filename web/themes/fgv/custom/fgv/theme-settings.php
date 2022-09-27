<?php 

function fgv_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
    // POPUP
    $form['fgv_popup'] = array(
      '#type'         => 'details',
      '#title'        => t('POPUP'),
      '#weight'       => -1003,
      '#open'         => FALSE,
   );
   
   $form['fgv_popup']['imagem_popup'] = array(
    '#type'           => 'textfield',
    '#title'          => t('URL Imagem'),
    '#default_value'  => theme_get_setting('imagem_popup'),
  );
    
    // MENU
    $form['fgv_menu'] = array(
      '#type'         => 'details',
      '#title'        => t('MENU'),
      '#weight'       => -1002,
      '#open'         => FALSE,
   );
   
   $form['fgv_menu']['link_meusbeneficios'] = array(
    '#type'           => 'textfield',
    '#title'          => t('Link Meus Benefícios'),
    '#default_value'  => theme_get_setting('link_meusbeneficios'),
  );
    
  // Cabeçalho 
  $form['fgv_info'] = array(
      '#type'         => 'details',
      '#title'        => t('Informações FGV'),
      '#weight'       => -1000,
      '#open'         => FALSE,
   );

  $form['fgv_info']['logotipo'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Logo'),
    '#default_value' => theme_get_setting('logotipo')
  );

  $form['fgv_info']['info_email'] = array(
      '#type' => 'fieldset',
      '#title' => 'Dados e-mail',
   );

  $form['fgv_info']['info_email']['email_contato'] = array(
      '#type' => 'textfield',
      '#title' => 'Endereço de e-mail',
      '#default_value' => theme_get_setting('email_contato')
   );

  $form['fgv_info']['info_email']['email_icone'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Ícone'),
    '#default_value' => theme_get_setting('email_icone')
  );

   // Hero
    $form['fgv_hero'] = array(
      '#type'         => 'details',
      '#title'        => t('Hero'),
      '#description'  => t('Informações do Hero'),
      '#weight'       => -999,
      '#open'         => FALSE,
   );

  $form['fgv_hero']['hero_titulo'] = array(
    '#type'           => 'textfield',
    '#title'          => t('Título'),
    '#default_value'  => theme_get_setting('hero_titulo'),
  );

  $form['fgv_hero']['hero_fundo'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Fundo'),
    '#default_value' => theme_get_setting('hero_fundo')
  );

  $form['fgv_hero']['hero_boasvindas'] = array(
    '#type'           => 'text_format',
    '#title'          => t('Texto de boas vindas'),
    '#default_value'  => theme_get_setting('hero_boasvindas')['value'],
    '#description' => 'Texto de boas vindas abaixo do Banner'
  );

  // Objetivos
  $form['fgv_objetivos'] = array(
      '#type'         => 'details',
      '#title'        => t('Objetivos'),
      '#description'  => t('Lista de objetivos do Programa'),
      '#weight'       => -998,
      '#open'         => FALSE,
   );

  foreach ( range(1, 4) as $obj ) {

    $form['fgv_objetivos']['obj' . $obj] = array(
      '#type' => 'fieldset',
      '#title' => 'Objetivo #' . $obj,
   );

    $form['fgv_objetivos']['obj' . $obj]['obj' . $obj . '_icone'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Ícone'),
    '#default_value' => theme_get_setting('obj' . $obj . '_icone')
  );

    $form['fgv_objetivos']['obj' . $obj]['obj'. $obj .'_descricao'] = array(
      '#type' => 'textfield',
      '#title' => 'Descrição',
      '#default_value' => theme_get_setting('obj'. $obj .'_descricao')
   );

  }

  // Vídeo
  $form['fgv_video'] = array(
      '#type'         => 'details',
      '#title'        => t('Vídeo'),
      '#weight'       => -997,
      '#open'         => FALSE,
   );

  $form['fgv_video']['video'] = array(
      '#type' => 'fieldset',
      '#title' => 'Dados',
   );
   
   $form['fgv_video']['video']['url_thumb'] = array(
      '#type' => 'textfield',
      '#title' => 'URL da Thumbnail',
      '#default_value' => theme_get_setting('url_thumb')
   );

  $form['fgv_video']['video']['video_legenda'] = array(
      '#type' => 'textfield',
      '#title' => 'Legenda',
      '#default_value' => theme_get_setting('video_legenda')
   );

  $form['fgv_video']['video']['url_video'] = array(
      '#type' => 'textfield',
      '#title' => 'URL do vídeo',
      '#default_value' => theme_get_setting('url_video')
   );

  // Balanço de Pagamentos
  $form['fgv_balanco'] = array(
      '#type'         => 'details',
      '#title'        => t('Balanço de Pagamentos'),
      '#weight'       => -996,
      '#open'         => FALSE,
   );

  $form['fgv_balanco']['balanco_titulo'] = array(
      '#type' => 'textfield',
      '#title' => 'Título',
      '#default_value' => theme_get_setting('balanco_titulo')
   );

  $form['fgv_balanco']['balanco_subtitulo'] = array(
      '#type' => 'textfield',
      '#title' => 'Subtítulo',
      '#default_value' => theme_get_setting('balanco_subtitulo')
   );
   
   $form['fgv_balanco']['balanco_fundo'] = array(
      '#type' => 'textfield',
      '#title' => 'URL Imagem Fundo',
      '#default_value' => theme_get_setting('balanco_fundo')
   );

  $form['fgv_balanco']['dado1'] = array(
      '#type' => 'fieldset',
      '#title' => 'Dado #1',
   );

  $form['fgv_balanco']['dado1']['dado1_numero'] = array(
      '#type' => 'textfield',
      '#title' => 'Número',
      '#default_value' => theme_get_setting('dado1_numero')
   );

  $form['fgv_balanco']['dado1']['dado1_descricao'] = array(
      '#type' => 'textfield',
      '#title' => 'Descrição',
      '#default_value' => theme_get_setting('dado1_descricao')
   );

  $form['fgv_balanco']['dado2'] = array(
      '#type' => 'fieldset',
      '#title' => 'Dado #2',
   );

  $form['fgv_balanco']['dado2']['dado2_numero'] = array(
      '#type' => 'textfield',
      '#title' => 'Número',
      '#default_value' => theme_get_setting('dado2_numero')
   );

  $form['fgv_balanco']['dado2']['dado2_descricao'] = array(
      '#type' => 'textfield',
      '#title' => 'Descrição',
      '#default_value' => theme_get_setting('dado2_descricao')
   );
 

  // FAQ
  $form['fgv_faq'] = array(
      '#type'         => 'details',
      '#title'        => t('FAQ'),
      '#weight'       => -995,
      '#open'         => FALSE,
   );
   
    $form['fgv_faq']['faq_titulo'] = array(
      '#type'         => 'textfield',
      '#title'        => t('Título'),
      '#default_value' => theme_get_setting('faq_titulo')
   );

  $form['fgv_faq']['faq_descricao'] = array(
      '#type'         => 'textarea',
      '#title'        => t('Descrição'),
      '#default_value' => theme_get_setting('faq_descricao')
   );

  foreach( range(1,12)  as $num) {

    $form['fgv_faq']['faq' . $num] = array(
      '#type' => 'fieldset',
      '#title' => 'FAQ #' . $num,
    );

    $form['fgv_faq']['faq' . $num]['faq_pergunta_' . $num] = array(
      '#type' => 'textarea',
      '#title' => 'Pergunta #' . $num,
      '#default_value' => theme_get_setting('faq_pergunta_' . $num)
    );

    $form['fgv_faq']['faq' . $num]['faq_resposta_' . $num] = array(
      '#type' => 'textarea',
      '#title' => 'Resposta #' . $num,
      '#default_value' => theme_get_setting('faq_resposta_' . $num)
    );

  }

}

function hook_page_alter(&$pages) {  
  $favicon = "https://i.ibb.co/8zXxWjJ/logo.png";
  $type = theme_get_setting('favicon_mimetype');
  drupal_add_html_head_link(array('rel' => 'shortcut icon', 'href' => drupal_strip_dangerous_protocols($favicon), 'type' => $type));
}