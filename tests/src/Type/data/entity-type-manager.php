<?php

namespace EntityTypeManagerGetStorage;

use function PHPStan\Testing\assertType;
use function PHPUnit\Framework\assertInstanceOf;

$etm = \Drupal::entityTypeManager();

assertType('Drupal\node\NodeStorage', $etm->getStorage('node'));
assertType('Drupal\user\UserStorage', $etm->getStorage('user'));
assertType('Drupal\taxonomy\TermStorage', $etm->getStorage('taxonomy_term'));
assertType('Drupal\Core\Entity\EntityStorageInterface', $etm->getStorage('search_api_index'));
assertType('Drupal\Core\Config\Entity\ConfigEntityStorage', $etm->getStorage('block'));
// @todo fix this assert with a lookup on known entity class type.
// assertType('Drupal\Core\Entity\Sql\SqlContentEntityStorage', $etm->getStorage('content_entity_using_default_storage'));
assertType('Drupal\Core\Entity\EntityStorageInterface', $etm->getStorage('content_entity_using_default_storage'));
assertType('Drupal\phpstan_fixtures\CustomContentEntityStorage', $etm->getStorage('content_entity_using_custom_storage'));
assertType('Drupal\Core\Config\Entity\ConfigEntityStorage', $etm->getStorage('config_entity_using_default_storage'));
assertType('Drupal\phpstan_fixtures\CustomConfigEntityStorage', $etm->getStorage('config_entity_using_custom_storage'));
