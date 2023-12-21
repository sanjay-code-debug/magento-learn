# magento-learn
all - magento concept

Basic
------
    - Magento ver. 2.4.6-p1

    Storefont Url = http://sanjay.local/
    Admin Url     = http://sanjay.local/admin_1j8hs5
           userName -local
           passWord -local123
    Create new user = sudo bin/magento admin:user:create --admin-user=local --admin-password=local123 --admin-email=sanjay1@gmail.com --admin-firstname=admin --admin-lastname=admin

Setup
------
   - Official Docs

    https://experienceleague.adobe.com/docs/commerce-operations/installation-guide/system-requirements.html?lang=en
   - Pre-Require

            |---- Php   - 8
            |---- Mysql - 8
            |---- Composer 2
            |---- ElasticSearch
            |---- Varnish
            |---- Redish
            |---- 
      
How to Deploy Sample Data
-------------------------
               
               - Install by compoer way 
                          |
                          |---- bin/magento sampledata:deploy  - this command will deploy the sample data
                          |---- bin/magento setup:upgrade


Alway's Remember - Any Issue Just Bring it On
---------------------------------------------
      
      - Debugging Best Practice
      - Update with Latest (Php Version & Magento Updates)
      - Best Practice (Avoid Deprecate Code)

Debugging Best Practice
-----------------------
        
        - At the Time of Debug Only Learn and Implement Tools and ThirdParty Extensions
        - Read Other Code and Debug It - Explore the Github Repos
        - Directly Modify the Vendor Itself If any Issue Delete the Vendor and Do Composer install(vendor will back)
        - Check directly config.php and env.php 
        - First check by passing dummy value
        - var_dump(), echo , print_r() & other way
        - Check the Error on  var/log folder
        - Add Error into Logger / Also Create Custom Log Handler
        - Use X-Debuger
        - Use Php-Md & Php-CS Codding Standard
        - Use Latest Editor For Code and Their Available Features
        - For Quick Test -> Create File on Pub/Debug.php File
        - Alway's Check Code with Onine Editor for Confirmation
        - Elements, Console, Network & Sources --- ctrl+p for check the KO related debug    

Best Practice (Avoid Deprecate Code)
------------------------------------

         - Remove the Deprecated Code
         - Use Proper Codding Standard
         - Make Module Composerable - composer.json (any one can install by composer install way)
         - Alway's Handle the Exception - Check every single Scenario (isset,epmty,not null) --> try , catch, finally, throw & throws
         - Respective Exception For Respective Code (REST, GraphQl, Normal Code)
         - Always Add Exception to Logger (In stage or production it will be easy to find the issue)
         - Use Proper Stadard Like - Repository and Factory and Other Concept as per Code Requirement
         - Keep all the Code for  Respective Folder Area (like - webapi_rest, etc, adminhtml & frontend)

Magento Concept
---------------

     

