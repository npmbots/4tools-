import os

import HAY
from HAY.sqlmap import *
from HAY.hammer import *
from HAY.xerxes import *
from HAY.cctv import *

b="\033[0;34m"
g="\033[1;32m"
w="\033[1;37m"
r="\033[1;31m"
y="\033[1;33m"
cyan = "\033[0;36m"
lgray = "\033[0;37m"
dgray = "\033[1;30m"
ir = "\033[0;101m"
reset = "\033[0m"

def main():
  os.system('clear')
print "==========================".format(r)
print "| Author : Mr.Y0uKn0wM3  |".format(r)
print "| Content : 5 Tools      |".format(r)
print "| Updated at 2019-07-30  |".format(r)
print "==========================".format(r)

print ""

print "==== M E N U ====".format(w)
print ""
print "1) SQL MAP".format(r, w)
print "2 DDOS HAMMER".format(r, w)
print "3) DDOS XERXES".format(r, w)
print "4) Hack CCTV".format(r, w)
print "5) Hash Code".format(r, w)
print "00) Exit".format(r, w)
print "=================".format(w)
print ""
select = input("\033[1;31m[ \033[1;37mSelect@Number \033[1;31m]\033[1;37m> ")
filtering(select)

def filtering(pilih):
  if pilih == 1:
    sqlmap()
    
#   def filtering(pilih):
    elif pilih == 2:
      hammer()
        
        
   #  def filtering(pilih):
      elif pilih == 3:
        xerxes()
        
     #   def filtering(pilih):
          elif pilih == 4:
            cctv()
          
          elif pilih == 5:
            os.system('clear')
            os.system('php Hash.php')
        
       # def filtering(pilih):
         elif pilih == 00:
          print (r+"Exiting.."+w)
          os.sys.exit()
            else:
              print (r+"Exiting.."+w)
              os.sys.exit()
              
              
if __name__ == '__main__':
    main()
