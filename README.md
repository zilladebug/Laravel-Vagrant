<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## HOTEL RESERVATION DEMO
:star:
[Zilladebug] <br/><br/> A <b>Laravel v7<b>, hotel reservation demo system. Including <b>CRUD</b> and <b>Laravel Eloquent.</b> 
Also supports the use of Heroku [https://dashboard.heroku.com/] for deploying our app on a test server. <br/>
<br/>
    <b>Includes:</b> email verification, login system, user authentication,
    image upload on a reservation, <br/>service providers, mailgun, and much more!

## REQUIREMENTS

<b>Vagrant</b> | https://www.vagrantup.com/downloads.html <br/>
<b>Virtual Machine Box</b> | https://www.virtualbox.org/wiki/Downloads <br/>
    - Those are required to run Homestead <br/>
<b>GitBash</b> | https://git-scm.com/download/win <br/>

## INSTALLING HOMESTEAD BOX 
- Create a `new [directory]`. The name of the folder, will be the 
  name of the VirtualMachine Box.
  
- Open up GitBash and navigate to the new [directory]. <br/> But dont cd:/ into the directory yet.
    <br/>Example of the path:
            /c/xampp/htdocs/janedoe/
            
- Run `composer create-project --prefer-dist laravel/laravel` [choose name for laravel directory]

- `cd:/ into the new laravel directory`

- Run `composer require laravel/homestead --dev` 
  (With the --dev you can run multiple homestead boxes, in the same VirtualMachine Box)
  
- Run `vendor\\bin\\homestead make`

- Run both `vagrant up` and `vagrant ssh`
- Pass this `http://homestead.test/` in your browser and see if it worked!
    <br/>The name of the path is visible in the Homestead.yaml file at `map: homestead.test`

## First time running Homestead - CHOOSE A VIRTUAL MACHINE 
- Choose one of these options:
  After this, continue the installation process as mentioned above
```
    1. hyperv
    2. parallels
    3. virtualbox - choose this if you have VirtualMachine Box
    4. vmware_desktop

```
## CLONING THE REPO
- Delete the `.vagrant folder` in this repo
- Edit the file `Homestead.yaml` to the correct file path.
    Example: (map: C:\xampp\htdocs\janedoe)
- If needed, edit the machine name and host, at the bottom of the file:<br/>
    ```
    name: [name of machine]
    hostname: [name of host]
    
    ```
    - This will also prevent it, from running on previously installed homestead machines.

- Run both `vagrant up` and `vagrant ssh`
- Pass this `http://homestead.test/` in your browser and see if it worked!   

## TIPS IF YOU GET STUCKED!
- Run GitBash and your virtual machine as administrator

    ```
    | Npm install wont work: 
            use this command npm install --no-bin-links and also npm install --save-dev cross-env
            
    | Npm dev error:
        Replace package.json with: https://github.com/laravel/laravel/blob/master/package.json
            Step1: composer update
            Step2: rm -rf node_modules
            (Step3: npm cache clean)
            Step4: npm install
            Step5: npm outdated
            Step6: npm install
            Step7: npm run dev
            
    | Missing laravel/ui: 
            composer require laravel/ui --dev
            php artisan ui vue --auth 
            npm install 
            npm run dev
            
     | Allround good practice:
            php artisan route:clear
	        php artisan config:clear
	        php artisan cache:clear
         
    ```
    
