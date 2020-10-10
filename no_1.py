#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sat Oct 10 01:12:14 2020

@author: dianahudanikisyono
"""


def hitungbarang(quality, quantity):
    if quality == 'A':
        print("- Total: "+ str(quantity*3000))
        print("- Potongan: "+ str(int(500*quantity)))
        print("- Total yang harus dibayar: "+str(int((quantity*3000)-(500*quantity))))
    elif quality == 'B':
        print("- Total: "+ str(quantity*3500))
        print("- Potongan: "+ str(int(quantity*3500*50/100)))
        print("- Total yang harus dibayar: "+str(int((quantity*3500*50/100))))
    elif quality == 'C':
        print("- Total: "+str(quantity*5000))
        print("- Potongan: 0")
        print("- Total yang harus dibayar: "+str(int(quantity*5000)))
    else:
        print("quality tidak tersedia")


#python harus menggunakan petik sebagai parameter string
hitungbarang('A', 11)