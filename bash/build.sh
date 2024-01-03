PACKAGE_NAME=$(cat package.json \
  | grep name \
  | head -1 \
  | awk -F: '{ print $2 }' \
  | sed 's/[",]//g' \
  | tr -d '[[:space:]]')


# Version key/value should be on his own line
PACKAGE_VERSION=$(cat package.json \
  | grep version \
  | head -1 \
  | awk -F: '{ print $2 }' \
  | sed 's/[",]//g' \
  | tr -d '[[:space:]]')

./vendor/bin/wp i18n make-pot . --skip-audit --exclude=".dev,.github,.svn_folder,.wordpress-org,build,bundle,docs,dist,node_modules,vendor,wordpress,theme.json" --headers='{"Last-Translator":"wordcampnepal@gmail.com"}' --file-comment="Copyright (c) $(date +'%Y') WPNepal. All Rights Reserved." languages/$PACKAGE_NAME.pot

if [ -d "./bundle/$PACKAGE_VERSION" ]; then
    rm -rf bundle/$PACKAGE_VERSION
fi

if [ ! -d "/bundle/$PACKAGE_VERSION/" ]; then
	mkdir bundle
	mkdir bundle/$PACKAGE_VERSION
	mkdir bundle/$PACKAGE_VERSION/$PACKAGE_NAME
fi

if [[ -e "./.distignore" ]]; then
  echo "ℹ︎ Using .distignore"
  # Copy from current branch to /trunk, excluding dotorg assets
  # The --delete flag will delete anything in destination that no longer exists in source
  rsync -rc --exclude-from="./.distignore" "./" ./bundle/$PACKAGE_VERSION/$PACKAGE_NAME/ --delete --delete-excluded

fi

if [ -d "/build" ]
then
    rm -rf build
fi

mkdir build
rsync -rc --exclude-from="./.distignore" "./" ./build --delete --delete-excluded

