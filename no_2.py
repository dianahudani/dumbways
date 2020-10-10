#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sat Oct 10 09:36:23 2020

@author: dianahudanikisyono
"""
def hitungbarang(string):
    count=0
    for char in string:
        if char in "aeiouAEIOU":
           count = count+1
    print(count)
    


#python harus menggunakan petik sebagai parameter string
hitungbarang("Hmm")

