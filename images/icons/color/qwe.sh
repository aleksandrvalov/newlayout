#!/bin/bash 
for i in *.png; do 
convert -colorspace "Gray" $i ../gray/$i
done
