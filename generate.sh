#!/usr/bin/env bash
#
# Generate Genesis stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for Genesis\n * @see https://www.studiopress.com/get-genesis/ to download the Genesis framework (require an email)\n * @see https://github.com/php-stubs/genesis-stubs\n */'

FILE="genesis-stubs.php"

set -e

test -f "$FILE"
test -d "source/genesis"

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

