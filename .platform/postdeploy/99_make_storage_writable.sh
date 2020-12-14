#!/usr/bin/env bash
echo "Making /storage writeable..."
chmod -R 777 /var/app/current/storage

if [ ! -d /var/app/current/public/storage ]; then
  echo "Creating /public/storage symlink..."
  ln -s /var/app/current/storage/app/public /var/app/current/public/storage
fi
