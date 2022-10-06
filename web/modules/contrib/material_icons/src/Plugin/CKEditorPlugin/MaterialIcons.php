<?php

namespace Drupal\material_icons\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginCssInterface;
use Drupal\Core\Asset\LibraryDiscoveryInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\editor\Entity\Editor;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines the "material_icons" plugin.
 *
 * @CKEditorPlugin(
 *   id = "material_icons",
 *   label = @Translation("Material Icons")
 * )
 */
class MaterialIcons extends CKEditorPluginBase implements CKEditorPluginCssInterface, ContainerFactoryPluginInterface {

  /**
   * The config Factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The Libary service.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryInterface
   */
  protected $libraryDiscovery;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory'),
      $container->get('library.discovery')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ConfigFactoryInterface $configFactory, LibraryDiscoveryInterface $libraryDiscovery) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $configFactory;
    $this->libraryDiscovery = $libraryDiscovery;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    $path = drupal_get_path('module', 'material_icons') . '/js/plugins/material_icons';
    return [
      'material_icons' => [
        'label' => 'Material Icons',
        'image' => $path . '/icons/material_icons.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'material_icons') . '/js/plugins/material_icons/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [
      'core/drupal.ajax',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getCssFiles(Editor $editor) {
    $css = [];
    $families = $this->configFactory->get('material_icons.settings')->get('families');

    foreach ($families as $family) {
      $library = $this->libraryDiscovery->getLibraryByName('material_icons', $family);
      if (!empty($library)) {
        $css[] = $library['css'][0]['data'];
      }
    }
    return $css;
  }

}
