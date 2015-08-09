<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Event\EntityDeleteTest.
 */

namespace Drupal\Tests\rules\Integration\Event;

/**
 * Checks that the entity delete events are defined.
 *
 * @coversDefaultClass \Drupal\rules\Plugin\RulesEvent\EntityDeleteDeriver
 */
class EntityDeleteTest extends EventTestBase {

  /**
   * Tests the event metadata.
   */
  public function testEventMetadata() {
    $plugin_definition = $this->eventManager->getDefinition('rules_entity_delete:entity_test_label');
    $this->assertSame('After deleting entity test label', $plugin_definition['label']);
    $context_definition = $plugin_definition['context']['entity_test_label'];
    $this->assertSame('entity:entity_test_label', $context_definition->getDataType());
    $this->assertSame('Entity Test label', $context_definition->getLabel());
  }

}
