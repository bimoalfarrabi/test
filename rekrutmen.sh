#!/bin/bash

read -p  "Enter URL repository:" -r remote_url

read -p  "Enter branch name (default:development):" -r remote_branch
remote_branch="${remote_branch:-development}"

cd /var/www/rekrutmen || { echo "Directory not found"; exit 1; }
echo "Navigated to /var/www/rekrutmen."

php8.2 artisan recreate-db && echo "--DB recreated"

git remote remove rekrutmen && echo "--Removed 'rekrutmen'."

git checkout development && echo "--Switched to 'development'."

git branch -D rekrutmen && echo "--Deleted 'rekrutmen'."


git remote add rekrutmen "$remote_url" && echo "--Added remote: $remote_url"

git fetch rekrutmen && echo "--Fetched 'rekrutmen'."

git checkout -B rekrutmen rekrutmen/"$remote_branch" && echo "--Switched 'rekrutmen/$remote_branch'."

echo "\nGit operations completed successfully."
echo "=========="

php8.2 artisan migrate

echo "DB operations done"
