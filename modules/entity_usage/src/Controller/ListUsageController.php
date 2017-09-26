<?php

namespace Drupal\entity_usage\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\entity_usage\EntityUsageInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Controller for our pages.
 */
class ListUsageController extends ControllerBase {

  /**
   * The EntityTypeManager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The EntityUsage service.
   *
   * @var \Drupal\entity_usage\EntityUsageInterface
   */
  protected $entityUsage;

  /**
   * ListUsageController constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The EntityManager service.
   * @param \Drupal\entity_usage\EntityUsageInterface $entity_usage
   *   The EntityUsage service.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, EntityUsageInterface $entity_usage) {
    $this->entityTypeManager = $entity_type_manager;
    $this->entityUsage = $entity_usage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('entity_usage.usage')
    );
  }

  /**
   * Lists the usage of a given entity.
   *
   * @param string $type
   *   The entity type.
   * @param int $id
   *   The entity ID.
   */
  public function listUsagePage($type, $id) {
    $entity_types = array_keys($this->entityTypeManager->getDefinitions());
    if (!is_string($type) || !is_numeric($id) || !in_array($type, $entity_types)) {
      throw new NotFoundHttpException();
    }
    $entity = $this->entityTypeManager->getStorage($type)->load($id);
    if ($entity) {
      $usages = $this->entityUsage->listUsage($entity, TRUE);
      if (empty($usages)) {
        // Entity exists but not used.
        $build = [
          '#markup' => $this->t('There are no recorded usages for entity of type: @type with id: @id', ['@type' => $type, '@id' => $id]),
        ];
      }
      else {
        // Entity is being used.
        $header = [
          $this->t('Referencing entity'),
          $this->t('Referencing entity type'),
          $this->t('Referencing method'),
          $this->t('Count'),
        ];
        $rows = [];
        foreach ($usages as $method => $method_usages) {
          foreach ($method_usages as $re_type => $type_usages) {
            foreach ($type_usages as $re_id => $count) {
              $referencing_entity = $this->entityTypeManager->getStorage($re_type)->load($re_id);
              if ($referencing_entity) {
                $link = $this->getReferencingEntityLink($referencing_entity);
                $rows[] = [
                  $link,
                  $re_type,
                  $method,
                  $count,
                ];
              }
            }
          }
        }
        $build = [
          '#theme' => 'table',
          '#rows' => $rows,
          '#header' => $header,
        ];
      }
    }
    else {
      // Non-existing entity in database.
      $build = [
        '#markup' => t('Could not find the entity of type: @type with id: @id', ['@type' => $type, '@id' => $id]),
      ];
    }
    return $build;
  }

  /**
   * Title page callback.
   *
   * @param string $type
   *   The entity type.
   * @param int $id
   *   The entity id.
   *
   * @return string
   *   The title to be used on this page.
   */
  public function getTitle($type, $id) {
    $entity = $this->entityTypeManager->getStorage($type)->load($id);
    if ($entity) {
      return t('Entity usage information for @entity_label', ['@entity_label' => $entity->label()]);
    }
    else {
      return t('Entity Usage List');
    }
  }

  /**
   * Retrieve a link to the referencing entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $referencing_entity
   *   The fully-loaded referencing entity.
   * @param string|null $text
   *   (optional) The link text for the anchor tag as a translated string.
   *   If NULL, it will use the entity's label. Defaults to NULL.
   *
   * @return \Drupal\Core\Link|string
   *   A link to the entity, or its non-linked label, in case it was impossible
   *   to correctly build a link.
   *   Note that Paragraph entities are specially treated. This function will
   *   return the link to its parent entity, relying on the fact that paragraphs
   *   have only one single parent and don't have canonical template.
   */
  private function getReferencingEntityLink(EntityInterface $referencing_entity, $text = NULL) {
    if ($referencing_entity->hasLinkTemplate('canonical')) {
      return $referencing_entity->toLink($text);
    }

    // Treat paragraph entities in a special manner. Once the current paragraphs
    // implementation does not support reusing paragraphs, it is safe to
    // consider that each paragraph entity is attached to only one parent
    // entity. For this reason we will use the link to the parent's entity,
    // adding a note that the parent uses this entity through a paragraph.
    // @see #2414865 and related issues for more info.
    if ($referencing_entity->getEntityTypeId() == 'paragraph') {
      return $this->getReferencingEntityLink($referencing_entity->getParentEntity(), $referencing_entity->label());
    }

    // As a fallback just return a non-linked label.
    return $referencing_entity->label();
  }

}
