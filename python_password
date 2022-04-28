#!/bin/python3
#Author: Stevens, Title: Automatic Password Generator

import secrets
import string

print('Welcome Hello, Generate a password? Seems that is your goal.')

pass_length = int(input('\nEnter the length of password: '))

#Define the data.
upper = string.ascii_uppercase
lower = string.ascii_lowercase
num = string.digits
symbols = string.punctuation

#Combine the data.
all = upper+lower+num+symbols

#Use Secrets, for better security(than random).
password = ''.join(secrets.choice(all) for i in range(pass_length))

print(password)
