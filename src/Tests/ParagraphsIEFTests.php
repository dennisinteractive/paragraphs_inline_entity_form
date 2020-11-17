<?php

namespace Drupal\paragraphs_inline_entity_form\Tests;

use Drupal\Tests\BrowserTestBase;

/**
 * Paragraphs IEF tests.
 *
 * @group paragraphs_inline_entity_form
 */
class ParagraphsIEFTests extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'ckeditor',
    'entity',
    'entity_browser',
    'entity_embed',
    'entity_reference',
    'paragraphs',
    'inline_entity_form',
    'paragraphs_inline_entity_form_example'
  ];

  /**
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create admin user.
    $this->adminUser = $this->drupalCreateUser([
      'access administration pages',
    ], 'Admin', TRUE);
  }

  /**
   * Admin UI.
   */
  function testAdminUI() {
    $this->drupalLogin($this->adminUser);

  }
}
