<?php
/**
 * @file
 * Hooks for arte_opa_broadcasts module.
 */

/**
 * This hook is invoked after broadcast data has been fetched from OPA.
 *
 * @param  Array $broadcasts multilingual broadcasts with program data keyed by
 *                           program ID.
 */
function hook_arte_opa_broadcasts_sync($broadcasts) {
  foreach ($broadcasts as $program_id => $data) {
    // Do something with the broadcast data.
  }
}

