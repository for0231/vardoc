<?php

namespace Drupal\entity_clone\Events;

/**
 * Contains all events thrown by entity clone.
 */
final class EntityCloneEvents {

  /**
   * The PRE_CLONE event occurs before the entity was cloned.
   *
   * @var string
   */
  const PRE_CLONE = 'entity_clone.pre_clone';

  /**
   * The POST_CLONE event occurs when an entity has been cloned and saved.
   *
   * @var string
   */
  const POST_CLONE = 'entity_clone.post_clone';

  /**
   * The PRE_SAVE event occurs before the entity was saved.
   * This event is dispatched in the \Drupal\entity_clone\EntityClone\Content\ContentEntityCloneBase::cloneEntity
   * method, which allow recursion for nested entities.
   *
   * @var string
   */
  const PRE_SAVE = 'entity_clone.pre_save';

  /**
   * The POST_CLONE occurs when an entity has been cloned and saved.
   * This event is dispatched in the \Drupal\entity_clone\EntityClone\Content\ContentEntityCloneBase::cloneEntity
   * method, which allow recursion for nested entities.
   *
   * @var string
   */
  const POST_SAVE = 'entity_clone.post_save';

}
