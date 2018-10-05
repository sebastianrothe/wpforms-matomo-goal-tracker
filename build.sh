#!/bin/sh
zip -r -9 dist/wpforms-matomo-goal-tracker-MASTER.zip plugin \
    -x */.DS_Store \
    -x */.git \
    -x */.svn \
    -x */.idea \
    -X */__MACOSX