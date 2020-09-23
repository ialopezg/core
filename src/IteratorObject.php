<?php

namespace ialopezg\Core;

/**
 * Class for array or iterable objects manipulation.
 *
 * @package ialopezg\Core
 */
abstract class IteratorObject {
    /**
     * Copy the iterator into an array.
     *
     * @param \Traversable|array $iterator  The iterator being copied.
     * @param bool $recursive               Recursively check all nested structures.
     *
     * @return array An array containing the elements of the iterator.
     */
    public static function toArray($iterator, $recursive = true) {
        // check for invalid type
        if (!is_array($iterator) && !$iterator instanceof \Traversable) {
            throw new \InvalidArgumentException(__METHOD__ . '() expects an array or Traversable object');
        }

        // check for nested values
        if (!$recursive) {
            // if array return iterator as is
            if (is_array($iterator)) {
                return $iterator;
            }

            // parse iterator to an array
            return iterator_to_array($iterator);
        }

        // if iterator has the method to cast itself as array
        if (is_array($iterator) && method_exists($iterator, 'toArray')) {
            return $iterator->toArray();
        }

        // otherwise
        $result = [];
        foreach ($iterator as $key => $value) {
            // is scalar
            if (is_scalar($value)) {
                $result[$key] = $value;

                continue;
            }
            // array or Traversable
            if ($value instanceof \Traversable || is_array($iterator)) {
                $result[$key] = static::toArray($value, $recursive);

                continue;
            }

            // otherwise
            $result[$key] = $value;
        }

        return $result;
    }
}