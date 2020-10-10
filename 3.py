#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sat Oct 10 01:12:14 2020

@author: dianahudanikisyono
"""


def siku(n):
    total = 0
    res = []
    num=2
    k=0
    for x in range(0, n+2):
        total = total + x
    while len(res)< total+1:
        prime = True
        for i in range(2,num):
            if (num%i==0):
                prime = False
        if prime:
           res.append(num)
        num=num+1
    for y in range(0, n+1):
        for j in range(0, y):
            print(res[k], end=" ")
            k=k+1
        print(" ")
        

if __name__ == '__main__':
    #input the number of the triangle and press enter for the result
    n = int(input().strip())
    siku(n)