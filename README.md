
# MY Project name is mp1
Note: the following guide is for linux user. My project use laravel framewrok. You can also study in laravel main website.



## Clone my project


Firstly, Go to the project folder. Open the terminal there. and type the following command.
### 1. Cloning
```bash
git clone https://github.com/NaingYeLinn/mp1.git
```
### 2. Composer install and update
Enter the project directory and open terminal in it. You need to update and composer. Type the following command each by each.
```bash
composer install
```
```bash
composer update
```
### 3. Create .env file
create .env file for database. Type the following command in your terminal.

```bash
cp .env.example .env
```

### 4. Prepare your database
After that, you should Create your database in "localhost/phpmyadmin/".
And then change the name of your database name in ".env" by using text editor 


### 5. Generate the Key of laravel
```bash
php artisan key:generate
```
Link the storage by following command
```bash
php artisan storage:link
```
### 6. Migration
Migrate your data into your database by following command.
```bash
php artisan migrate
```
### 7. Finally run the project
You can rung service.
```bash
php artisan serve
```
And then you can go to link.


#### The link are following
link 1. localhost/mp1/public/register      (to Register)
link 2. localhost/mp1/public/newprod       (to create new Poduct)
link 3. localhost/mp1/public/login          (to login)
link 4. localhost/mp1/public/create-admin   (to create Admin)



## 🔗 You cam need the following command to run my project

```bash
npm install
```
```bash
npm run dev
```


## Acknowledgements

If you need to  run "npm install and npm run dev" command. You will need to install updated NPM and Nodejs. Follow the link. Thank you verymuch.

 - [How to update NPM and Nodejs](https://www.freecodecamp.org/news/how-to-update-node-and-npm-to-the-latest-version/)
 - [ReadME.md Node Editor](https://readme.so/editor)
