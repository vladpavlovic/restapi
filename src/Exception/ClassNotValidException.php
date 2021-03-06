<?php

namespace Drupal\restapi\Exception;

use Exception;


/**
 * Ensures that the provided class exists and is an implementation of
 * ResourceInterface.
 *
 */
class ClassNotValidException extends Exception {}