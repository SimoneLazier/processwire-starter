<?php

use ProcessWire\WireException;

global $DIST_FOLDER;
$DIST_FOLDER = 'dist';

function mix(string $file)
{
  global $config, $DIST_FOLDER;

  if (!str_starts_with($file, '/')) {
    $file = '/' . $file;
  }
  $manifest = json_decode(
    file_get_contents(
      __DIR__ . '/../templates/' . $DIST_FOLDER . '/mix-manifest.json'
    )
  );
  if (!property_exists($manifest, $file)) {
    throw new WireException("Unable to locate Mix file: {$file}");
  }

  return $config->urls->templates . $DIST_FOLDER . $manifest->{$file};
}

function mixExists(string $file)
{
  global $DIST_FOLDER;
  if (!str_starts_with($file, '/')) {
    $file = '/' . $file;
  }
  $manifest = json_decode(
    file_get_contents(
      __DIR__ . '/../templates/' . $DIST_FOLDER . '/mix-manifest.json'
    )
  );
  return property_exists($manifest, $file);
}
