#!/bin/bash


output_file="ping_result.txt"

ping -c 4 sbu.ac.ir > $output_file 2>&1

date >> $output_file


grep "time=" $output_file
