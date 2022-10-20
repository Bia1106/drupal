<?php

/**
 * @file
 * Contains \Drupal\regionincontent\Form\SettingsForm.
 * Regionincontent settings form.
 */

namespace Drupal\regionincontent\Form;

use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configure settings.
 */
class Regionincontent extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'regionincontent_admin_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'regionincontent.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, Request $request = NULL) {

    $form_state->disableCache();

    $region_config = $this->config('regionincontent.settings');

    $form['regionincontent'] = array(
      '#type'   => 'details',
      '#title'  => $this->t('Configuration'),
      '#open'   => TRUE,
      'region'  => array(
        '#type'          => 'textarea',
        '#title'         => $this->t('Region'),
        '#default_value' => $region_config->get('region') ? $region_config->get('region') : '',
        '#description'   => $this->t('Region ID as a separate line (example: primary_menu)'),
      ),
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /* ... */
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('regionincontent.settings')    
      ->set('region', $values['region'])
      ->save();
  }
}