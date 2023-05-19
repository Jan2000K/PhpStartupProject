@echo off
start cmd /k sass --watch src/sass:src/public/css
cmd /k tsc -w

