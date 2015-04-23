<?php
/**
 * @file
 * content_types.features.inc
 */

/**
 * Implements hook_node_info().
 */
function content_types_node_info() {
  $items = array(
    'announcement' => array(
      'name' => t('Announcement'),
      'base' => 'node_content',
      'description' => t('This is for announcements'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'article' => array(
      'name' => t('Article'),
      'base' => 'node_content',
      'description' => t('Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'occupation' => array(
      'name' => t('Occupation'),
      'base' => 'node_content',
      'description' => t('This content type is for individual occupations, IE Pharmacy Technician.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'occupation_area' => array(
      'name' => t('Occupation Area'),
      'base' => 'node_content',
      'description' => t('This is the greater functional area for occupations'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('Basic page'),
      'base' => 'node_content',
      'description' => t('Use <em>basic pages</em> for your static content, such as an \'About us\' page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'program' => array(
      'name' => t('Program'),
      'base' => 'node_content',
      'description' => t('This content type is for programs.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'resource' => array(
      'name' => t('Resource'),
      'base' => 'node_content',
      'description' => t('This is the content type for resources.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'success_story' => array(
      'name' => t('Success Story'),
      'base' => 'node_content',
      'description' => t('This holds success stories for youth and employers'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'workplace_skill' => array(
      'name' => t('Workplace Skill'),
      'base' => 'node_content',
      'description' => t('This is the content type for workplace skills.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
