#!/bin/bash

function get_current_git_branch {
  br=`git branch | grep "*"`
  echo ${br/* /}
}

if [ ! -d "$1" ] && [ ! -f "$1" ]; then 
    echo "file $1 not exists"
    exit
fi
filename=$1

comment="add file"
if [[ $2 != "" ]]; then
    comment=$2
fi
branch=`get_current_git_branch`

echo "start update..."
echo "Has chosen $branch ..."
git pull
echo "start add new file..."
git add $filename
echo "start commit..."
git commit -m "$comment" $filename
git push origin $branch
echo "git commit complete..."

