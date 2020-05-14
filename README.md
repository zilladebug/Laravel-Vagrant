<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## REQUIREMENTS

- VAGRANT | https://www.vagrantup.com/downloads.html
- VIRTUAL MACHINE BOX | https://www.virtualbox.org/wiki/Downloads
    - Those are required to run Homestead
- GITBASH | https://git-scm.com/download/win

## INSTALLING HOMESTEAD BOX 
- Create a new [directory]. The name of the folder, will be the 
  name of the VirtualMachine Box.
  
- Open up GitBash and navigate to the new [directory]. But dont cd:/ into yet.
    The path would be:
            /c/xampp/htdocs/janedoe/
            
- Run composer create-project --prefer-dist laravel/laravel [choose name for laravel directory]

- cd:/ into the new project folder

- Run composer require laravel/homestead --dev 
  (if you already have a Homestead Box from previous projects, adding the -dev solves that)
  
- Run vendor\\bin\\homestead make

- Run both vagrant up and vagrant ssh 
- Pass this http://homestead.test/ in your browser and see if it worked!

## First time running Homestead - CHOOSE A VIRTUAL MACHINE 
- Choose one of these options:
    1) hyperv
    2) parallels
    3) virtualbox - choose this if you have VirtualMachine Box
    4) vmware_desktop
    


