# Details Laravel
- Create Database 
![image](https://user-images.githubusercontent.com/57561468/120093049-269a3580-c135-11eb-8912-ac1c34e15cbd.png)

# Update Composer 
   - composer update

# Create .env file and set below code
- Already provide .**evn examale** file. So copy that file and add below code.

    - MAIL_MAILER=smtp
    - MAIL_HOST=smtp.gmail.com
    - MAIL_PORT=587
    - MAIL_USERNAME=example@gmail.com
    - MAIL_PASSWORD=*********
    - MAIL_ENCRYPTION=tls
    
  - Also set database connection 

# I have already created commnad and also without command so both are describe below
- php artisan email:birthday
    - this command send mail using current birthday.
  
 - http://127.0.0.1:8000/mail 
    - this link without any authentication means direct send to email.
    - this code written in web.php file.


