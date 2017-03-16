<?php

/**
 * @file
 * Contains Drupal\content_management\ContentManagementPermissions
 */

namespace Drupal\content_management;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity\EntityManagerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContentManagementPermissions implements ContainerInjectionInterface {
  use StringTranslationTrait;

  /**
   * The entity manager.
   *
   * @var \Drupal\Core\Entity\EntityManagerInterface
   */
  protected $entityManager;

  /**
   * Constructs a ContentManagementPermissions instance.
   *
   * @param \Drupal\Core\Entity\EntityManagerInterface $entity_manager
   *   The entity manager.
   */
  public function __construct(EntityManagerInterface $entity_manager) {
    $this->entityManager = $entity_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('entity.manager'));
  }

  public function permissions() {
    $permissions = [];
    // Generate permissions for each content type
    $contentTypes = \Drupal::service('entity.manager')
      ->getStorage('node_type')
      ->loadMultiple();

    foreach ($contentTypes as $contentType) {
      // $contentTypesList[$contentType->id()] = $contentType->label();
      $permissions['content_management_manage_' . $contentType->id()] = [
        'title' => $this->t('Manage the @ct content', array('@ct' => $contentType->label())),
        'description' => $this->t('Allows a role to manage content of the type @ct, only give this permission to trusted roles', array('@ct' => $contentType->label())),
      ];
    }
    return $permissions;
  }
}
