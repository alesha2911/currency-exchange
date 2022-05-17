#!/bin/bash
export WEB_GID=33

perms() {
  sudo chown -R $UID:$WEB_GID "$1"

  sudo chmod -R g+rwx "$1"
}

perms "storage"
