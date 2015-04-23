<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function STARTER_form_system_theme_settings_alter(&$form, &$form_state) {}

function yw_desktop_css_alter(&$css) {
  unset($css['sites/all/themes/zurb-foundation/css/foundation.min.css']);
  unset($css['sites/all/themes/zurb-foundation/css/base.css']);
  unset($css['sites/all/themes/zurb-foundation/css/normalize.css']);
  unset($css['sites/all/themes/zurb-foundation/css/app.css']);
}