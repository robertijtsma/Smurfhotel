Points Shop by x9751 @ Otaku-Studios

Version v0.2
ChangeLog:
Added Daily Rewards.

Version v0.3
Changelog:
CSS Edits
Changed the way paypal.php opens.
bug fixed for uber/phxcf.
rares image pack added (kudos to Benji from Habbo.la for finding).
bug fix for buying VIP.

Instalation:

Step 1:
Run the full SQL for your current version if new install else just run the UPDATE sql.

Step 2:
Open your config.php file in your /manage/ directory
Edit in YOUR mysql details and edit the rest to your liking

['cms']['type'] is your CMS type either rev, uber, or phxcf

['cms']['url'] is your hotels base URL ex. http://example.com NO ending /

['cms']['name'] is your hotels name used for <title> and footer

['admin']['add'] is your admin rank for ADDING AND REMOVING items from the shop

For the rest PLEASE read the "note" besides the CONFIG do not blame me if you cannot read properly and you break your hotel.

Step 3:
Open paypal.php WITHIN your /paypal/ folder and edit the details inside such as your paypal email and your MySQL settings
(in future versions I will have intergrated the paypal IPN but for now you have to use them as seperate).

Step 4:
Log into your CMS and navigat your way over to the shop /shop/index.php by default.
Make sure you are a high enough rank to add stuff and click the "STAR" button at the top left and you can add things to the shop. Once you are done adding stuff refresh the page to see them. If you do not like something you can simply click the "remove" button by the item.

If you have any questions or suggestions or would like to report a bug you can PM me on Otaku or simply post on the thread for the shop.

http://www.otaku-studios.com/f209/php-points-shop-156973/ <-- Thread

http://www.otaku-studios.com/private.php?do=newpm&u=1664831 <-- PM Me