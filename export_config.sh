#!/bin/bash

# Set the path relative to settings.php
CONFIG_DIR="config/sitename"

# Create the config directory if it doesn't exist
if [ ! -d "$CONFIG_DIR" ]; then
  echo "Creating config sync directory at $CONFIG_DIR..."
  mkdir -p "$CONFIG_DIR"
else
  echo "Config sync directory already exists: $CONFIG_DIR"
fi

# Set permissions (optional, adjust to your environment)
chmod -R 755 "$CONFIG_DIR"

# Run drush config export
echo "Running: drush cex -y"
vendor/bin/drush cex -y

# Done
echo "Config export complete."
